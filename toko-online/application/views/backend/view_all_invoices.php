<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Halaman Admin | View All Invoices</title>
	<?php $this->load->view('backend/admin_menu') ?>﻿

<meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Obaju e-commerce template">
    <meta name="author" content="Ondrej Svestka | ondrejsvestka.cz">
    <meta name="keywords" content="">


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
			<h1 style="text-align: center; margin-bottom: 30px;">Invoices Table</h1>
	<table  id="myTable" class="table table-striped table-bordered tabled-hover" style="text-align: center">
		<thead>
			<tr>
				<th style="text-align: center">Invoice ID</th>
				<th style="text-align: center">Date</th>
				<th style="text-align: center">Due Date</th>
				<th style="text-align: center">Status</th>
				
				

				

			</tr>


		</thead>
		<tbody>
			<?php foreach($invoices as $invoice) : ?>
			<tr>

				<td><?=$invoice->id?></td>
				<td><?=$invoice->date?></td>
				<td><?=$invoice->due_date?></td>
				<td><?=$invoice->status?> <?=anchor('admin/invoices/detail/'.$invoice->id,'Details',
						['class'=>'btn btn-primary btn-sm']

					)?> </td>
				
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>



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