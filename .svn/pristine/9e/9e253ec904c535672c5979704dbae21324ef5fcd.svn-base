<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><?php echo $title;?></title>
<link rel="stylesheet" href="<?php echo base_url();?>asseta/css/style.default.css" type="text/css" />
<script type="text/javascript" src="<?php echo base_url();?>asseta/js/plugins/jquery-1.7.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>asseta/js/plugins/jquery-ui-1.8.16.custom.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>asseta/js/plugins/jquery.cookie.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>asseta/js/plugins/jquery.uniform.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>asseta/js/plugins/jquery.flot.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>asseta/js/plugins/jquery.flot.resize.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>asseta/js/plugins/jquery.slimscroll.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>asseta/js/custom/general.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>asseta/js/custom/dashboard.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>asseta/js/plugins/jquery.datetimepicker.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>asseta/js/plugins/jquery.bpopup.min.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/plugins/excanvas.min.js"></script><![endif]-->
<!--[if IE 9]>
    <link rel="stylesheet" media="screen" href="css/style.ie9.css"/>
<![endif]-->
<!--[if IE 8]>
    <link rel="stylesheet" media="screen" href="css/style.ie8.css"/>
<![endif]-->
<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
</head>
<body>
<?php 	
			$id_user=$this->session->userdata('id_user');
			$nama_lengkap=$this->session->userdata('nama_lengkap');
			$level=$this->session->userdata('level');
?>
<div class="bodywrapper">
    <div class="topheader">
        <div class="left">
            <h1 class="logo">SIPMP<span>v1.0</span></h1>
            <span class="slogan">Selamat Datang <?php echo $nama_lengkap;?></span><!--search-->
            
            <br clear="all" />
            
        </div><!--left-->
        
        <div class="right">
        	<div class="notification">
                <a class="count" href="<?php echo base_url();?>asseta/ajax/notifications.html"><span class="fa fa-align-justify fa-2x"></span></a>
        	</div>
        </div><!--right-->
    </div><!--topheader-->
    
    
    <div class="header">
    	<ul class="headermenu">
        	<li><img src="<?php echo base_url();?>asseta/images/logos/pzh-wtitle.png" width="433" height="50" class="logo-menu-margin"/></li>


    <?php if($level=="1"){ ?><!--Administrator-->
            <li><a href="<?php echo base_url();?>admin/dashboard_admin"><span class="fa fa-home fa-3x icon"></span>Dashboard</a></li>
            <li><a href="<?php echo base_url();?>admin/pengumuman"><span class="fa fa-pencil-square fa-3x icon"></span>Pengumuman</a></li>
            <li><a href="<?php echo base_url();?>admin/psb"><span class="fa fa-group fa-3x icon"></span>PSB</a></li>
            <li><a href="<?php echo base_url();?>admin/perizinan"><span class="fa fa-ticket fa-3x icon"></span>Perizinan</a></li>
            <li><a href="<?php echo base_url();?>admin/pelanggaran"><span class="fa fa-legal fa-3x icon"></span>Pelanggaran</a></li>
            <li><a href="<?php echo base_url();?>admin/laporan"><span class="icon icon-chart"></span>Laporan</a></li>
            <li><a href="<?php echo base_url();?>admin/konfigurasi"><span class="fa fa-gears fa-3x icon"></span>Konfigurasi</a></li>
    <?php } elseif($level=="2"){ ?><!--Staff PIP-->
            <li><a href="<?php echo base_url();?>admin/dashboard_pip"><span class="fa fa-home fa-3x icon"></span>Dashboard</a></li>
            <li><a href="<?php echo base_url();?>admin/pengumuman"><span class="fa fa-pencil-square fa-3x icon"></span>Pengumuman</a></li>
            <li><a href="<?php echo base_url();?>admin/psb"><span class="fa fa-group fa-3x icon"></span>PSB</a></li>
            <li><a href="<?php echo base_url();?>admin/perizinan"><span class="fa fa-ticket fa-3x icon"></span>Perizinan</a></li>
            <li><a href="<?php echo base_url();?>admin/pelanggaran"><span class="fa fa-legal fa-3x icon"></span>Pelanggaran</a></li>
            <li><a href="<?php echo base_url();?>admin/laporan"><span class="icon icon-chart"></span>Laporan</a></li>
    <?php } elseif($level=="3"){ ?><!--Keamanan-->
            <li><a href="<?php echo base_url();?>admin/dashboard_keamanan"><span class="fa fa-home fa-3x icon"></span>Dashboard</a></li>
            <li><a href="<?php echo base_url();?>admin/pengumuman"><span class="fa fa-pencil-square fa-3x icon"></span>Pengumuman</a></li>
            <li><a href="<?php echo base_url();?>admin/psb"><span class="fa fa-group fa-3x icon"></span>PSB</a></li>
            <li><a href="<?php echo base_url();?>admin/perizinan"><span class="fa fa-ticket fa-3x icon"></span>Perizinan</a></li>
            <li><a href="<?php echo base_url();?>admin/pelanggaran"><span class="fa fa-legal fa-3x icon"></span>Pelanggaran</a></li>
            <li><a href="<?php echo base_url();?>admin/laporan"><span class="icon icon-chart"></span>Laporan</a></li>
    <?php } elseif($level=="4"){ ?><!--Staff Sekolah-->
            <li><a href="<?php echo base_url();?>admin/dashboard_sekolah"><span class="fa fa-home fa-3x icon"></span>Dashboard</a></li>
            <li><a href="<?php echo base_url();?>admin/pengumuman"><span class="fa fa-pencil-square fa-3x icon"></span>Pengumuman</a></li>
            <li><a href="<?php echo base_url();?>admin/psb"><span class="fa fa-group fa-3x icon"></span>PSB</a></li>
            <li><a href="<?php echo base_url();?>admin/perizinan"><span class="fa fa-ticket fa-3x icon"></span>Perizinan</a></li>
            <li><a href="<?php echo base_url();?>admin/pelanggaran"><span class="fa fa-legal fa-3x icon"></span>Pelanggaran</a></li>
            <li><a href="<?php echo base_url();?>admin/laporan"><span class="icon icon-chart"></span>Laporan</a></li>
    <?php } elseif($level=="5"){ ?><!--Walisantri-->
            <li><a href="<?php echo base_url();?>admin/dashboard_walisantri"><span class="fa fa-home fa-3x icon"></span>Dashboard</a></li>
            <li><a href="<?php echo base_url();?>admin/pengumuman"><span class="fa fa-pencil-square fa-3x icon"></span>Pengumuman</a></li>
            <li><a href="<?php echo base_url();?>admin/psb"><span class="fa fa-group fa-3x icon"></span>PSB</a></li>
            <li><a href="<?php echo base_url();?>admin/perizinan"><span class="fa fa-ticket fa-3x icon"></span>Perizinan</a></li>
            <li><a href="<?php echo base_url();?>admin/pelanggaran"><span class="fa fa-legal fa-3x icon"></span>Pelanggaran</a></li>
            <li><a href="<?php echo base_url();?>admin/laporan"><span class="icon icon-chart"></span>Laporan</a></li>
    <?php } else { ?>
                  
    <?php }        ?>
    


        </ul><!--headerwidget-->
        
        
    </div><!--header-->
    
        
        <div class="contentwrapper">
            
           <?php
			$this->load->view($konten_view);
		   ?>
            
      </div><!--contentwrapper-->
        
<br clear="all" />
    
</div><!--bodywrapper-->

</body>

</html>
