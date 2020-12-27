<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
	// public function __construct()
	// {
	// 	parent::__construct();
	// 	$this->load->model('Dashboardpelanggan_model');
	// }

	public function index()
	{
		// $data['tarif']=$this->tarif->get_tarif();
		$data['about_view'] = 'about_view';

		//$data['cart_transaksi'] = $this->Dashboardpelanggan_model->get_cart();

		$this->load->view('template_pelanggan', $data);
	}
}
?>