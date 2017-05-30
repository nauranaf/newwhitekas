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

	<title>Payment Confirmation</title>

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

		<div><?=validation_errors()?> </div>
			<div>
				<?=$this->session->flashdata('error') ?>
			</div>
		
			<div id="all">
       		<div id="content">
			<div class="container">	
			

		<?=form_open('customer/payment_confirmation/',['class'=>'form_horizontal']) ?>

		<div class="col-md-6 col-md-offset-3">
		<form role="form" class="form-horizontal">
		  <div class="form-group">
		    <label for="inputEmail3" class="control-label"><strong>Invoice ID</strong></label>
		    <input type="text" class="form-control" name="invoice_id" value="<?=($invoice_id != 0?$invoice_id:'')?>">
		    </div>
		  
		  <div class="form-group">
		    <label for="inputPassword3" class="control-label"><strong> Amount Transfered </strong></label>
		    
		      <input type="text" class="form-control"  name="amount" >
		    
		  </div>

		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <button type="submit" class="btn btn-primary">Confirm My Payment</button>
		    </div>
		  </div>
		  </form>
		  </div>

		</div>
		</div>
		</div>

		</form>
		<div style="margin-top: 50px;"></div>
		<?php $this->load->view('layout/footer') ?> 
		
	</body>
</html>