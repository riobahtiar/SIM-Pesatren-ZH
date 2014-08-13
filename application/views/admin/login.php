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
<body class="loginpage">
<script type="text/javascript" src="<?php echo base_url();?>asseta/js/plugins/jquery-1.7.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>asseta/js/plugins/jquery-ui-1.8.16.custom.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>asseta/js/plugins/jquery.cookie.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>asseta/js/plugins/jquery.uniform.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>asseta/js/custom/general.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>asseta/js/custom/index.js"></script>
<center><br /><br />
<img src="<?php echo base_url();?>asseta/images/logos/pzh-wtitle.png" width="656" height="76" alt="Pesantren Zainul Hasan Genggong" /><br /><br />
</center>
<?php echo form_open('admin/login');?>
	<div class="loginbox">
    	<div class="loginboxinner">
        	
            <div class="logo">
            	<h1><span>SIPMP</span>LOGIN</h1>
              <p>Sistem Informasi Pendukung Manajemen Pesantren</p>
            </div><!--logo-->

            <!--notifikasi kesalahan-->
			            <?php
			if(isset($login_info))
			{
			   echo "<div class='loginmsg'>";
			   echo $login_info;
			   echo '</div>';
			}
			?>

            
            	<?php echo form_error('email'); ?>
                <div class="username">
                	<div class="usernameinner">
                    	<input type="text" name="email" id="email" />
                    </div>
                </div>
            	<?php echo form_error('password'); ?>
                <div class="password">
                	<div class="passwordinner">
                    	<input type="password" name="password" id="password" />
                    </div>
                </div>
                
                <?php echo form_submit('submit','LOGIN');?>
                
                
            
         <?php echo form_close(); ?>
            
        </div><!--loginboxinner-->
    </div><!--loginbox-->


</body>
