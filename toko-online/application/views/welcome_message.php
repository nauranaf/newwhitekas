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

	<title>White : by Kasprianti</title>

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
		<div id="all">
        <div id="content">
		<div id="hot">
                <div class="box" style="margin-top: 50px;">
                    <div class="container">
                        <div class="col-md-12">
                            <h2>Hot this week</h2>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="product-slider">
                        <div class="item">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                                <img src="<?php echo base_url()."assets/img/satuu.jpg"?>" alt="" class="img-responsive">
                                            
                                        </div>
                                        <div class="back">
                                                <img src="<?php echo base_url()."assets/img/duaa.jpg"?>" alt="" class="img-responsive">
                                        </div>
                                    </div>
                                </div>
                                <a href="detail.php" class="invisible">
                                    <img src="<?php echo base_url()."assets/img/satuu.jpg"?>" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3>Khimar Aisha Pink</a></h3>
                                    <p class="price"> Rp.150.000 </p>
                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.product -->
                        </div>

                        <div class="item">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="detail.php">
                                                <img src="<?php echo base_url()."assets/img/tigaa.jpg"?>" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="detail.php">
                                                <img src="<?php echo base_url()."assets/img/empat.jpg"?>" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="detail.php" class="invisible">
                                    <img src="<?php echo base_url()."assets/img/tigaa.jpg"?>" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="detail.php">Pashmina Instan Alesha Pink</a></h3>
                                    <p class="price"><del>Rp.150.000</del> Rp.100.000</p>
                                </div>
                                <!-- /.text -->

                                <div class="ribbon sale">
                                    <div class="theribbon">SALE</div>
                                    <div class="ribbon-background"></div>
                                </div>
                                <!-- /.ribbon -->

                                <div class="ribbon new">
                                    <div class="theribbon">NEW</div>
                                    <div class="ribbon-background"></div>
                                </div>
                                <!-- /.ribbon -->

                                <div class="ribbon gift">
                                    <div class="theribbon">GIFT</div>
                                    <div class="ribbon-background"></div>
                                </div>
                                <!-- /.ribbon -->
                            </div>
                            <!-- /.product -->
                        </div>

                        <div class="item">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="detail.php">
                                                <img src="<?php echo base_url()."assets/img/lima.jpg"?>" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="detail.php">
                                                <img src="<?php echo base_url()."assets/img/enam.jpg"?>" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="detail.php" class="invisible">
                                    <img src="<?php echo base_url()."assets/img/lima.jpg"?>" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="detail.php">Khimar Aisha Cream</a></h3>
                                    <p class="price">Rp.150.000</p>
                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.product -->
                        </div>

                        <div class="item">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            
                                                <img src="<?php echo base_url()."assets/img/baru1.jpg"?>" alt="" class="img-responsive">
                                            
                                        </div>
                                        <div class="back">
                                            
                                                <img src="<?php echo base_url()."assets/img/baru2.jpg"?>" alt="" class="img-responsive">
                                            
                                        </div>
                                    </div>
                                </div>
                                <a href="detail.php" class="invisible">
                                    <img src="<?php echo base_url()."assets/img/baru1.jpg"?>" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3>Khimar Aisha Brown</h3>
                                    <p class="price">Rp.150.000</p>
                                </div>
                                <!-- /.text -->

                                <div class="ribbon new">
                                    <div class="theribbon">NEW</div>
                                    <div class="ribbon-background"></div>
                                </div>
                                <!-- /.ribbon -->
                            </div>
                            <!-- /.product -->
                        </div>

                        <div class="item">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            
                                                <img src="<?php echo base_url()."assets/img/tuju.jpg"?>" alt="" class="img-responsive">
                                            
                                        </div>
                                        <div class="back">
                                                <img src="<?php echo base_url()."assets/img/lapan.jpg"?>" alt="" class="img-responsive">
                                            
                                        </div>
                                    </div>
                                </div>
                                <a href="detail.php" class="invisible">
                                    <img src="<?php echo base_url()."assets/img/tuju.jpg"?>" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="detail.php">Pashmina Instan Alesha Purple</a></h3>
                                   <p class="price"><del>Rp.150.000</del> Rp.100.000</p>
                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.product -->
                        </div>
                    </div>
                    <!-- /.product-slider -->
                </div>
                <!-- /.container -->
            </div>
            </div>
            </div>

            <div id="hot">
			<div class="box" style="margin-top: 50px;">
                    <div class="container">
                        <div class="col-md-12">
                            <h2>Catalog</h2>
                        </div>
                    </div>
                </div>
            </div>
		<!-- Tampilan Semua Produk -->

			
			
			<!-- looping products -->

			<?php foreach($products as $product) :?>

				<div class="row products">
                        <div class="col-md-5 col-sm-3" style="margin-left: 80px;">
			  
			    <div class="thumbnail">
			     <div align="center">
			      <?=img([

			      		'src'  => 'uploads/'. $product -> image,
			      		'style' => 'height:400px; width: 550px;'
			      	])?>
			    </div>

			    
			    
			      <strong> <div class="caption" style="text-align: center;">
			      	<h3 style="min-height:40px;">
							 <?=$product->name?></h3>
			        <p><?=$product->description?></p>
			        <p>
			        	<?=anchor('welcome/add_to_cart/' . $product->id, 'Buy' ,[
			        		'class' => 'btn btn-primary',
			        		'role' => 'button'
			        		])?> 

			        </p>

			      </div></strong>
			    </div>
			       </div>       
			<?php endforeach; ?>
			  <!-- end looping -->
			
<script src="<?php echo base_url()."assets/js/jquery-1.11.0.min.js"?>"></script>
    <script src="<?php echo base_url()."assets/js/bootstrap.min.js"?>"></script>
    <script src="<?php echo base_url()."assets/js/jquery.cookie.js"?>"></script>
    <script src="<?php echo base_url()."assets/js/waypoints.min.js"?>"></script>
    <script src="<?php echo base_url()."assets/js/modernizr.js"?>"></script>
    <script src="<?php echo base_url()."assets/js/bootstrap-hover-dropdown.js"?>"></script>
    <script src="<?php echo base_url()."assets/js/owl.carousel.min.js"?>"></script>
    <script src="<?php echo base_url()."assets/js/front.js"?>"></script>

    <div style="margin-top: 2500px;"></div>
    <?php $this->load->view('layout/footer') ?> 
	</body>
</html>