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
    
	<title>Halaman Admin | View All Products</title>
	<?php $this->load->view('backend/admin_menu') ?>﻿

	<meta name="keywords" content="">

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
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<h1 style="text-align: center; margin-bottom: 30px;">Products Table</h1>

	<div class="col-md-10 col-md-offset-1">  
    <div style="overflow-x:auto;">
	<table  id="myTable" class="table table-striped table-bordered tabled-hover" style="text-align: center">
		<thead>
			<tr>
				<th style="text-align: center">ID Produk</th>
				<th style="text-align: center">Nama Produk</th>
				<th style="text-align: center">Gambar Produk</th>
				<th style="text-align: center">Deskripsi</th>
				<th style="text-align: center">Harga</th>
				<th style="text-align: center">Stock</th>
				<th style="text-align: center">

				<!-- tombol  add produk -->
					<?=anchor('admin/products/create','Tambah Produk',['class'=>'btn btn-primary btn-sm'])?>

			</tr>


		</thead>
		<tbody>
			<?php foreach($products as $product) : ?>
			<tr>
				<td><?=$product->id?></td>
				<td><?=$product->name?></td>
				<td><?php 
					$product_image = ['src'=> 'uploads/'.$product->image,
										'width' => '100' ];

					echo img($product_image)

					?>
				</td>
				<td><?=$product->description?></td>
				<td><?=$product->price?></td>
				<td><?=$product->stock?></td>
				<td>
					<?=anchor('admin/products/update/'.$product->id,'Edit',
						['class'=>'btn btn-primary btn-sm']

					)?>

					<?=anchor('admin/products/delete/'.$product->id,'Delete',
						['class'=>'btn btn-danger btn-sm',

							'onclick'=>'return confirm(\'Apakah Anda Yakin Menghapus Item ini?\')'
						]

					)?>

				</td>

			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	</div>
	</div>


		</div>
		<div class="col-md-1"></div>
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