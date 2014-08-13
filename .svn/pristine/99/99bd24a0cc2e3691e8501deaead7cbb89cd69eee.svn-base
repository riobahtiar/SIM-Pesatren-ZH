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
<body class="withvernav">
<?php 
			$_this = & get_Instance();
			$level=$_this->session->userdata('level');
			//echo 'level '.$level;
			
			?>
<div class="bodywrapper">
    <div class="topheader">
        <div class="left">
            <h1 class="logo">SIPMP<span>v1.0</span></h1>
            <span class="slogan">Selamat Datang <?php echo $nama_user ?></span><!--search-->
            
            <br clear="all" />
            
        </div><!--left-->
        
        <div class="right">
        	<div class="notification">
                <a class="count" href="ajax/notifications.html"><span class="fa fa-align-justify fa-2x"></span></a>
        	</div>
        </div><!--right-->
    </div><!--topheader-->

    <div class="header">
    	<ul class="headermenu">
        	<li><img src="images/logos/pzh-wtitle.png" width="433" height="50" class="logo-menu-margin"/></li>
        	<li><a href="<?php echo base_url();?>home/*dashboard.html"><span class="fa fa-home fa-3x icon"></span>Dashboard</a></li>
            <li><a href="<?php echo base_url();?>home/*manageblog.html"><span class="fa fa-pencil-square fa-3x icon"></span>Pengumuman</a></li>
            <li><a href="<?php echo base_url();?>home/*manageblog.html"><span class="fa fa-group fa-3x icon"></span>PSB</a></li>
          	<li><a href="<?php echo base_url();?>home/*messages.html"><span class="fa fa-ticket fa-3x icon"></span>Perizinan</a></li>
            <li><a href="<?php echo base_url();?>home/*reports.html"><span class="fa fa-legal fa-3x icon"></span>Pelanggaran</a></li>
            <li><a href="<?php echo base_url();?>home/*reports.html"><span class="icon icon-chart"></span>Laporan</a></li>
            <li><a href="<?php echo base_url();?>home/*reports.html"><span class="fa fa-gears fa-3x icon"></span>Konfigurasi</a></li>
        </ul><!--headerwidget-->
        
        
    </div><!--header-->
  
    <div class="vernav2 iconmenu">
    	<ul>
        	<li class="current"><a href="manageblog.html" class="addons">Manajemen Data & QuickLink</a></li>
        	<li><a href="<?php echo base_url();?>home/x" class="editor">Manajemen User</a></li>        	
            <li><a href="<?php echo base_url();?>home/x" class="editor">Manajemen Lembaga</a></li>
        	<li><a href="<?php echo base_url();?>home/x" class="editor">Konfirmasi PSB</a></li>
        	<li><a href="<?php echo base_url();?>home/x" class="editor">Pesan</a></li>            
        </ul>

        <br /><br />
    </div><!--leftmenu-->

<div class="centercontent"><!--pageheader-->
        
        <div id="contentwrapper" class="contentwrapper">
        
<?php echo $konten ?>
        
      </div><!--contentwrapper-->
        
        <br clear="all" />
        
  </div><!-- centercontent -->
    
    
</div><!--bodywrapper-->

</body>

</html>