<?php
	$id 			= $product->id;
	if($this->input->post('is_submitted')){
		$Name 		= set_value('name');
		$description = set_value('description');
		$Price 		= set_value('price');
		$stock 		= set_value('stock');
	}else{

	$name 			= $product->name;
	$description 	= $product->description;
	$price 			= $product->price;
	$stock 			= $product->stock;
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Obaju e-commerce template">
    <meta name="author" content="Ondrej Svestka | ondrejsvestka.cz">
    <meta name="keywords" content="">


    <title>Halaman Admin | Edit Produk </title>
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
			<h1 style="text-align: center;">Edit Produk</h1> </div>
			<div><?= validation_errors() ?></div>

			<div id="all">
       		<div id="content">
			<div class="container">	

			<?= form_open_multipart('admin/products/update/' .$id,['class'=>'form_horizontal'])?>
				
				<div class="col-md-6 col-md-offset-3">
		          <form role="form" class="form-horizontal">
				  <div class="form-group">
				    <label for="" class="control-label">Product Name</label>
				    
				      <input type="text" class="form-control" name="name" placeholder="" value="<?= $name ?>">
				    
				  </div>

				  <div class="form-group">
				    <label for="" class="control-label">Description</label>
				    
				      <textarea class="form-control" style="margin-top: 10px;" name="description"><?= $description ?></textarea>
				    
				  </div>


				  <div class="form-group">
				    <label  for="" class="control-label">Price</label>
				    
				      <input style="margin-top: 10px;" type="text" class="form-control" name="price"  placeholder="" value="<?= $price ?>">
				    
				  </div>

				  <div class="form-group">
				    <label for="" class="control-label">Avaible Stock</label>
				    
				      <input style="margin-top: 10px;" type="text" class="form-control" name="stock" placeholder="" value="<?= $stock ?>">
				    
				  </div>
				  
				  <div class="form-group">
				    <label for="" class="control-label">Product Image</label>
				    
				      <input style="margin-top: 10px;" type="file" class="form-control" name="userfile" >
				    
				  </div>



				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				    	<input type="hidden" name="is_submitted" value="1" />
				      <button style="margin-top: 10px;" type="submit" class="btn btn-primary">Save</button>
				    </div>
				  </div>
				  </form>
				  </div>
				  
			<?= form_close() ?>
	



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