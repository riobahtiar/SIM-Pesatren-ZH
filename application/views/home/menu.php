<!--menu-->
<div class="navbar navbar-inverse navbar-fixed-top menu-atas">
      <div class="container">
        <div class="navbar-header">
          <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">

          </button>
          <a href="<?php echo base_url();?>home/" class="navbar-brand">&nbsp;<span class="fa fa-home pad"></span>&nbsp;</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo base_url();?>home/tentang_website">Tentang Website</a></li>
            <li class="dropdown">
              <a data-toggle="dropdown" class="dropdown-toggle" href="#">Santri Baru <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo base_url();?>home/santri_daftar">Pendaftaran</a></li>
                <li><a data-toggle="modal" href="#Konfirmasi" href="<?php echo base_url();?>home/santri_lengkapi_data">Lengkapi Data Pendaftaran</a></li>
                <li><a href="<?php echo base_url();?>home/santri_konfirmasi">Konfirmasi Pembayaran</a></li>
                <li><a href="<?php echo base_url();?>home/santri_syarat_ketentuan">Syarat dan Ketentuan</a></li>
                <li><a href="<?php echo base_url();?>home/santri_petunjuk_daftar">Petunjuk Pendaftaran</a></li>                
              </ul>
            </li>
            <li><a href="<?php echo base_url();?>home/jadwal_penting">Jadwal Penting</a></li>
            <li><a href="<?php echo base_url();?>home/wali_santri">Wali Santri</a></li>
            <li><a href="<?php echo base_url();?>home/hubungi_kami">Hubungi Kami</a></li>
            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
<!--menu-end-->
<!--modal Konfirmasi-->
<div class="modal fade" id="Konfirmasi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Silahkan Login Untuk Melanjutkan..</h4>
        </div>
        <div class="modal-body">
            <form role="form">
  <div class="form-group">
    <label for="exampleInputEmail1">Alamat Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Masukkan email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">No Refrensi</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="No Refrensi">
  </div>
      
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Masuk</button>  
</form>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
<!--modal akhir-->
