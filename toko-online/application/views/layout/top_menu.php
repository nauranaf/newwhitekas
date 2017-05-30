<meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Obaju e-commerce template">
    <meta name="author" content="Ondrej Svestka | ondrejsvestka.cz">
    <meta name="keywords" content="">


    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script scr="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
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

    <nav id="top" class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
            <strong> <h2 style="color: white; font-family: Georgia;"> white. </h2> </strong>
        </div>
        <ul class="nav navbar-nav navbar-right" style="font-style: italic;">
        <li> <?php echo anchor(base_url(),'Home'); ?>
        <?php if($this->session->userdata('username')){ ?>
                <li> <?php echo anchor('customer/payment_confirmation','Payment Confirmation'); ?></li>
                <li> <?php echo anchor('customer/shopping_history','History'); ?></li>
                <?php }  ?>
                <li>
                <?php
                $text_cart_url = '<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>';
                $text_cart_url .=  ' Inside Cart: '. $this->cart->total_items().' Items';
                ?>

                <?= anchor('welcome/cart',$text_cart_url )?>
        </li>
        <?php if($this->session->userdata('username')) { ?>
          <li><div style="line-height:70px; color: white;"> Hi, <?=$this->session->userdata('username')?></div> </li>
          <li> <?php echo anchor('logout','Logout'); ?></li>
        <?php } else {; ?>

        <li>
          <?php echo anchor('login','Login'); ?>
        </li> 
        <li>
          <?php echo anchor('register','Register'); ?>
        </li>
        <?php } ?>
        </li>
        </ul>
      </div>
    </nav>



<script src="<?php echo base_url()."assets/js/jquery-1.11.0.min.js"?>"></script>
    <script src="<?php echo base_url()."assets/js/bootstrap.min.js"?>"></script>
    <script src="<?php echo base_url()."assets/js/jquery.cookie.js"?>"></script>
    <script src="<?php echo base_url()."assets/js/waypoints.min.js"?>"></script>
    <script src="<?php echo base_url()."assets/js/modernizr.js"?>"></script>
    <script src="<?php echo base_url()."assets/js/bootstrap-hover-dropdown.js"?>"></script>
    <script scr="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <script src="<?php echo base_url()."assets/js/owl.carousel.min.js"?>"></script>
    <script src="<?php echo base_url()."assets/js/front.js"?>"></script>