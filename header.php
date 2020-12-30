<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo();?></title>

    <?php wp_head(); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
<script>
  WebFont.load({
    google: {
      families: ['Monserrat']
    }
  });
</script>
</head>
<body>
<header class="fixed-top ">
    <div class="upperinfo">
      <div class="upperinfo__left">
      <a href="#" data-toggle="modal" data-target="#searchModal"><span class="searchGLass"><?php  include("src/img/searchGlass.svg"); ?></span></a>
    </div>
    <div class="upperinfo__right">
      <?php 
    $phoneNumber= esc_attr( get_option( 'phone' ) ); 
    $email= esc_attr( get_option( 'email' ) ); 
      ?>
                  
    <?php if(!empty($email)){?>
    <span class="upperinfo__email"><i class="fa fa-envelope" aria-hidden="true"></i><?php echo $email; ?></span>
    <?php } ?>
    <?php if(!empty($phoneNumber)){?>
    <span class="upperinfo__phone"><i class="fa fa-phone" aria-hidden="true"></i>tel. <?php echo $phoneNumber;?></span>
    <?php } ?>
    </div>
    </div>
  
       

    
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
 
      <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
      <?php
        $custom_logo_id = get_theme_mod( 'custom_logo' );
        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
        echo '<img class="" src="'. esc_url( $logo[0] ) .'">';
      ?>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarText">
        <div class="flexbox__navbar">
          <?php do_action('primary_nav'); ?>
          <?php do_action('secondary_nav'); ?>
        </div>
      </div>
      <span class="navbar-text">

          <img src="<?php echo get_template_directory_uri();?>/src/img/partner.jpg"/>
          
    </span>
    </nav>
</header> 
