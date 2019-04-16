<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo();?></title>
    <?php wp_head(); ?>
</head>
<header>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm">
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
      <div class="collapse navbar-collapse" id="navbarText">
         <p>lorem ipsum</p>
      </div>
    </nav>
</header>
<body>
    
