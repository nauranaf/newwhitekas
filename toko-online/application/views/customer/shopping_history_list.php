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
		<?php if($history != false) :?>
		<?= $this->session->flashdata('message'); ?>

		<div id="hot">
			<div class="box" style="margin-top: 50px;">
                    <div class="container">
                        <div class="col-md-12">
                            <h2><strong> Your Shopping History </strong></h2>
                        </div>
                    </div>
                </div>

            <div class="col-md-9 col-md-offset-1">  
            <div style="overflow-x:auto;">  
			<table class="table table-bordered table-striped table hover" style="text-align: center;">
				<thead>
				<tr>
					<th style="text-align: center">Invoice ID</th>
					<th style="text-align: center">Invoice Date</th>
					<th style="text-align: center">Due Date</th>
					<th style="text-align: center">Total Amount</th>
					<th style="text-align: center">Status</th>
				</tr>
				</thead>

				<tbody>
					<?php 
						foreach ($history as $row): 
					?>
					<tr>
						<td><?= $row -> id ?></td>
						<td><?= $row -> date ?></td>
						<td><?= $row -> due_date ?></td>
						<td><?= $row -> total ?></td>
						<td>
							<?= $row -> status ?>

  					
          
        
									<?= anchor ('customer/payment_confirmation/'. $row->id,'Confirm Payment',
										array('class'=>'btn btn-primary btn-xs')
										) ?>

						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
			</div>
			</div>
		<?php else: ?>
			<p align="center"> Tidak ada shopping history <?=anchor('/','Shop now')?></p>
		<?php endif ;?>
		</div>

		
<script src="<?php echo base_url()."assets/js/jquery-1.11.0.min.js"?>"></script>
    <script src="<?php echo base_url()."assets/js/bootstrap.min.js"?>"></script>
    <script src="<?php echo base_url()."assets/js/jquery.cookie.js"?>"></script>
    <script src="<?php echo base_url()."assets/js/waypoints.min.js"?>"></script>
    <script src="<?php echo base_url()."assets/js/modernizr.js"?>"></script>
    <script src="<?php echo base_url()."assets/js/bootstrap-hover-dropdown.js"?>"></script>
    <script src="<?php echo base_url()."assets/js/owl.carousel.min.js"?>"></script>
    <script src="<?php echo base_url()."assets/js/front.js"?>"></script>

    <div style="margin-top: 70px;"></div>
	<?php $this->load->view('layout/footer') ?> 
	</body>
</html>