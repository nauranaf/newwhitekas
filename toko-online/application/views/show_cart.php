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
	<title>TokoKu</title>

	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

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


	
</head>
	<body>
		<?php $this->load->view('layout/top_menu') ?>
		<div id="hot">
			<div class="box" style="margin-top: 50px;">
                    <div class="container">
                        <div class="col-md-12">
                            <h2><strong> Your Cart </strong></h2>
                        </div>
                    </div>
                </div>
            
			<div class="col-md-9 col-md-offset-1">
			<div style="overflow-x:auto;">
			<table class="table table-bordered table-striped table hover" style="text-align: center;">
				<thead>
				<tr>
					<th style="text-align: center"> ID </th>
					<th style="text-align: center">Product</th>
					<th style="text-align: center">Jumlah</th>
					<th style="text-align: center">Harga</th>
					<th style="text-align: center">Subtotal</th>
				</tr>
				</thead>

				<tbody>
					<?php 
						$i=0;
						foreach ($this->cart->contents() as $items): 
						$i++;
					?>
					<tr>
						<td><?= $i ?></td>
						<td><?= $items['name'] ?></td>
						<td><?= $items['qty'] ?></td>
						<td align="right"><?= number_format($items['price'],0,',','.') ?></td>
						<td align="right"><?= number_format($items['subtotal'],0,',','.') ?></td>
					</tr>
					<?php endforeach; ?>
				</tbody>

				<tfoot>
					<tr>
						<td align="right" colspan="4">Total</td>
						<td align="right"> <?= number_format($this->cart->total(),0,',','.');?></td>

					</tr>
				</tfoot>
			</table>
			</div>
			</div>

			<div align="center">
			<div class="col-md-9 col-md-offset-1">
				<!-- <button style="margin-left: 390px; margin-top: 15px;" class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in </button> -->
				<?= anchor('welcome/clear_cart' ,'Clear Cart',['class'=>'btn btn-primary']) ?>
				<?= anchor(base_url() ,'Continue Shopping',['class'=>'btn btn-primary']) ?>
				<?= anchor('order' ,'Check Out',['class'=>'btn btn-primary']) ?>
			</div>
			</div>
		
</div>
			<div style="margin-top: 200px;"></div>
			<?php $this->load->view('layout/footer') ?> 
	</body>
</html>