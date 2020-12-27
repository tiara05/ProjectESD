<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_pelanggan extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Dashboardpelanggan_model');
		$this->load->model('Pengguna_model');
	}

	public function index()
	{
		// $data['tarif']=$this->tarif->get_tarif();
		$data['main_view'] = 'Dashboard_pelanggan';
		$data['about_view'] = 'about_view';
		$data['barang_view'] = 'barang_view';
		$data['jenis_view'] = 'detail_produk';

		$data['cart_transaksi'] = $this->Dashboardpelanggan_model->get_cart();
		$data['user'] = $this->Pengguna_model->get_pengguna();

		$this->load->view('template_pelanggan', $data);
	}

	public function cari_buku()
	{

			if($this->Dashboardpelanggan_model->cari_buku() == TRUE)
			{
				redirect('Dashboard_pelanggan/index');
			} else {
				$this->session->set_flashdata('notif', 'Data buku tidak ditemukan atau stok sudah habis!');
				redirect('Dashboard_pelanggan/index');
			}
	}

	public function hapus_item_cart()
	{

			if($this->Dashboardpelanggan_model->hapus_item_cart() == TRUE)
			{
				redirect('Dashboard_pelanggan/index');
			} else {
				$this->session->set_flashdata('notif', 'Hapus item cart gagal');
				redirect('Dashboard_pelanggan/index');
			}
	}

	public function ubah_jumlah_cart()
	{
			if($this->Dashboardpelanggan_model->ubah_jumlah_cart() == TRUE){
				echo json_encode(1);
			} else {
				echo json_encode(0);
			}
	}

	public function get_total_belanja()
	{

			$total_belanja['total'] = $this->Dashboardpelanggan_model->get_total_belanja();
			echo json_encode($total_belanja);
	}

	public function bayar()
	{
			//insert ke tabel transaksi dulu
			if($this->Dashboardpelanggan_model->tambah_transaksi() == TRUE)
			{
				$this->session->set_flashdata('notif', 'Proses pembelian berhasil');
				redirect('Dashboard_pelanggan/index');

			} else {
				$this->session->set_flashdata('notif', 'Proses pembelian gagal');
				redirect('Dashboard_pelanggan/index');
			}

	}

	public function riwayat()
	{
			$data['main_view'] = 'riwayat_transaksi_view';
			$data['riwayat'] = $this->Dashboardpelanggan_model->get_riwayat_transaksi();

			$this->load->view('template', $data);
	}

	public function get_detil_transaksi_by_id($id)
	{
			$detil_transaksi = $this->Dashboardpelanggan_model->get_transaksi_by_id($id);
			$data['show_detil'] = "";
			$total = 0;
			$no = 1;
			$data['show_detil'] .= '<table class="table table-striped">
									<tr>
										<th>No</th>
										<th>Judul</th>
										<th>Tahun</th>
										<th>Penulis</th>
										<th>Penerbit</th>
										<th>Harga</th>
										<th>Jumlah</th>
										<th>Sub Total</th>
									</tr>';

			foreach ($detil_transaksi as $d) {
				$data['show_detil'] .= '<tr>
									<td>'.$no.'</td>
									<td>'.$d->judul.'</td>
									<td>'.$d->tahun.'</td>
									<td>'.$d->penulis.'</td>
									<td>'.$d->penerbit.'</td>
									<td>'.$d->harga.'</td>
									<td>'.$d->jumlah.'</td>
									<td>'.$d->harga*$d->jumlah.'</td>
								</tr>';

				$no++;
				$total += $d->harga*$d->jumlah;
			}
			$data['show_detil'] .= '</table>';
			$data['show_detil'] .= '<h3><p class="text-right">Total Belanja:</p></h3>
									<h2><p class="text-right">Rp '.$total.',- </p></h2>';
			echo json_encode($data);
	}

	public function cetak_nota()
	{
		$this->load->view('cetak_nota_view');
	}

}
