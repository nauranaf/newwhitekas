<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	
<meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Obaju e-commerce template">
    <meta name="author" content="Ondrej Svestka | ondrejsvestka.cz">
    <meta name="keywords" content="">

	<title>Halaman Admin | Tambah Produk </title>
	<?php $this->load->view('backend/admin_menu') ?>﻿

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>

    <!-- styles -->
    <link href="<?php echo base_url()."assets/css/font-awesome.css"?>" rel="stylesheet">
    <link href="<?php echo base_url()."assets/css/bootstrap.min.css"?>" rel="stylesheet">
    <link href="<?php echo base_url()."assets/css/animate.min.css"?>" rel="stylesheet">
    <link href="<?php echo base_url()."assets/css/owl.carousel.css"?>" rel="stylesheet">
    <link href="<?php echo base_url()."assets/css/owl.theme.css"?>" rel="stylesheet">

    <!-- theme stylesheet -->
    <link href="<?php echo base_url()."assets/css/style.default.css"?>" rel="stylesheet" id="theme-stylesheet">

    <!-- your stylesheet with modifications -->
    <link href="<?php echo base_url()."assets/css/custom.css"?>" rel="stylesheet">

    <script src="<?php echo base_url()."assets/js/respond.min.js"?>"></script>

    <link rel="shortcut icon" href="favicon.png">

	<style>
		.row div{ border:#000 0px solid }
	</style>
</head>
<body>

	<!-- dalam dicv row harus ada col yang maksimum 12 -->
			<div class="box">
			<h1 style="text-align: center; margin-left: 20px;">Tambah Produk Baru</h1>
			<div><?= validation_errors() ?></div> </div>

			<div id="all">
       		<div id="content">
			<div class="container">	
			
			<?= form_open_multipart('admin/products/create',['class'=>'form_horizontal'])?>
				
				<div class="col-md-6">
				  <div class="form-group">
				    <label for="inputEmail3" control-label" style="margin-top: 20px; margin-left: 280px;">Product Name</label>
				    
				      <input type="text" class="form-control" name="name" placeholder="" value="<?= set_value('name')?>" style="margin-left: 280px; margin-top: 15px;" >
				    </div>
				  

				  <div class="form-group">
				    <label for="inputPassword3" control-label" style="margin-top: 30px; margin-left: 280px;">Description</label>
				    
				      <textarea class="form-control" style="margin-left: 280px; margin-top: 5px;" name="description"><?= set_value('description')?> </textarea>
				    
				  </div>


				  <div class="form-group">
				    <label for="inputPassword3" control-label" style="margin-top: 30px; margin-left: 280px;">Price</label>
				    
				      <input type="text" class="form-control" name="price"  style="margin-left: 280px; margin-top: 5px;" value="<?= set_value('price')?>">
				    
				  </div>

				  <div class="form-group">
				    <label for="inputPassword3" control-label" style="margin-top: 30px; margin-left: 280px;">Avaible Stock</label>
				    
				      <input type="text" class="form-control" name="stock" style="margin-left: 280px; margin-top: 5px;" value="<?= set_value('stock')?>">
				    
				  </div>


				  <div class="form-group">
				    <label for="inputPassword3" control-label" style="margin-top: 30px; margin-left: 280px;">Product Image</label>
				    
				      <input type="file" class="form-control" name="userfile" style="margin-left: 280px; margin-top: 5px;">
				    
				  </div>

				  </div>
				  
				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <input type="submit" class="btn btn-primary" value="Save" style="margin-left: 330px; margin-top: 5px;">
				    </div>
				  </div>
			<?= form_close() ?>
	



		</div>
		</div>
		</div>
	
	

	<script>
		
		$(document).ready(function(){
			$('#myTable').DataTable();
		});
	</script>

<script src="<?php echo base_url()."assets/js/jquery-1.11.0.min.js"?>"></script>
    <script src="<?php echo base_url()."assets/js/bootstrap.min.js"?>"></script>
    <script src="<?php echo base_url()."assets/js/jquery.cookie.js"?>"></script>
    <script src="<?php echo base_url()."assets/js/waypoints.min.js"?>"></script>
    <script src="<?php echo base_url()."assets/js/modernizr.js"?>"></script>
    <script src="<?php echo base_url()."assets/js/bootstrap-hover-dropdown.js"?>"></script>
    <script src="<?php echo base_url()."assets/js/owl.carousel.min.js"?>"></script>
    <script src="<?php echo base_url()."assets/js/front.js"?>"></script>
</body>
</html>