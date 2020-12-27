<section id="booking" class="contact section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>BOOKING</h2>
          <p>Silahkan untuk memasukan nama buku yang ingin dibeli. Setelah mamasukan nama buku yang di beli silahkan klik tomboh tambah dan jangan lupa untuk me refresh halaman untuk dapat tampil di dalam tabel konfirmasi pesanan.</p>
        </div>

        <div class="row">
          <div class="col-lg-12 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form class="php-email-form" action="<?php echo base_url('index.php/Dashboard_pelanggan/cari_buku') ?>" method="post">
              <div class="row">
                <div class="form-group col-md-9">
                  <input type="text" class="form-control input-lg" placeholder="NAMA BUKU" name="judul" required>
                </div>
                <div class="col-md-3  ">
                  <input type="submit" class="btn btn-success btn-lg btn-block" name="submit" value="TAMBAH" data-toggle="modal" data-target="#modal_berhasil_tambah">
                </div>
              </div>
            </form>
          </div>


          <div class="col-lg-12 mt-5 mt-lg-0 d-flex align-items-stretch">
            
            <form action="<?php echo base_url('index.php/Dashboard_pelanggan/bayar'); ?>" method="post" role="form" class="php-email-form">
              <div class="section-title">
                <h4>KONFIRMASI PESANAN</h4>
              </div>
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Tahun</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Jumlah</th>
                    <th>Sub Total</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                
                <?php
                  $no = 1;
                  if($cart_transaksi != NULL){
                    foreach ($cart_transaksi as $cart) {
                      echo '
                        <tr>
                          <input type="hidden" name="id_buku[]" value="'.$cart->id_buku.'">
                          <td>'.$no.'</td>
                          <td>'.$cart->judul.'</td>
                          <td>'.$cart->tahun.'</td>
                          <td>'.$cart->penulis.'</td>
                          <td>'.$cart->penerbit.'</td>
                          <td>
                            <input type="number" name="jumlah[]" class="form-control" onchange="hitung_subtotal('.$cart->id.','.$cart->harga.',this.value,'.$cart->id_buku.')" value="'.$cart->jumlah.'">
                          </td>
                          <td><span id="subtot_'.$cart->id.'">'.$cart->harga*$cart->jumlah.'</span></td>
                          <td>
                            <a href="#" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal_hapus_cart" onclick="prepare_hapus_cart('.$cart->id.')">Hapus</a>
                          </td>
                        </tr>
                      ';
                      $no++;
                    }
                  } else {
                    echo '
                      <tr>
                        <td colspan="8">
                          Keranjang belanja kosong.
                        </td>
                      </tr>
                    ';
                  }
                ?>
                </tbody>
              </table>
              <?php
                if($cart_transaksi != NULL || $user != NULL)

                {
                  echo '
                    <div class="row">
                      <div class="col-md-4">
                        <h1 style="margin:0">Rp <span id="total_belanja">0</span>,-</h1>
                      </div>
                      <div class="col-md-5">
                        <input type="text" name="nama_pembeli" placeholder="NAMA PEMBELI" class="form-control input-lg" required>
                      </div>
                
                      <div class="col-md-3">
                        <input type="submit" name="submit" value="BAYAR" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#modal_berhasil_bayar">
                      </div>

                    ';
                }
              ?>
              
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

  <div id="modal_berhasil_tambah" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          
          <h4 class="section-title">Konfirmasi Hapus Item Cart</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
          <form action="<?php echo base_url('index.php/Dashboard_pelanggan/cari_buku') ?>" method="post">
          <div class="modal-body">
              <p>Anda Berhasil Menambahkan Barang to Cart</p>
          </div>
          <div class="modal-footer">
            <input type="submit" class="btn btn-danger" name="submit" value="YA">
          </div>
          </form>
      </div>

    </div>
  </div>

  <div id="modal_berhasil_bayar" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          
          <h4 class="section-title">Konfirmasi Hapus Item Cart</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
          <form  method="post">
          <div class="modal-body">
              <p>Anda Berhasil Membayar Barang Pesanan</p>
          </div>
          <div class="modal-footer">
            <input type="submit" class="btn btn-danger" name="submit" value="YA">
          </div>
          </form>
      </div>

    </div>
  </div>