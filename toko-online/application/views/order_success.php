<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>TokoKu</title>

	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	
</head>
	<body>
		<?php $this->load->view('layout/top_menu') ?>
		

			

		<h2 style="text-align: center; margin-top: 100px;"> Terimakasih telah berbelanja di White Kasprianti. <br> Pemesanan Anda akan segera diproses. </h2>
		<div class="col-sm-offset-2 col-sm-10">
		<button style="margin-left: 400px; margin-top: 100px;" type="submit" class="btn btn-default"><a href=" <?php echo base_url()."index.php/Welcome/index/"; ?> "> Back to Home </a></button>
		</div>

		<h1 style="text-align: center; margin-top: 300px;">White by: Kasprianti</h1>

		<div style="margin-top: 100px;"></div>
		<?php $this->load->view('layout/footer') ?> 
	</body>
</html>