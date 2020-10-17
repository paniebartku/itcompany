<?php 

/*
*Template name: Contact
*/
get_header(); ?>

<section class="block-page-contact">
<div class="header__parallax">
<div class="header__into-parallax">

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="header__into-parallax--white">
            <h1><?php echo the_title(); ?></h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
     
    </div>
</div>

</div>

</div>

<style>
.block-page-contact {
 background-image: url('<?php image_acf_background_css(get_field("parallax-image")) ?>');
 background-attachment: fixed;
}
</style>
<div class="container-fluid" style="background-color: white;">
    <div class="container">

  



        <div class="row">
        
    <div class="col-sm-12">
            <div class="contact__header">
               
          
            </div>
    </div>

    </div>

    <div class="row">
    <div class="col-sm-12">
    <div class="contact__content">
    <?php while (have_posts()) : the_post(); 
                          the_content();
                            endwhile; 
                        ?>
</div>
    </div>
    </div>


<div class="row">
    <div class="col-sm-12">
    <div class="contact__map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2470.0195399280574!2d19.448331087267135!3d51.750966257854145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471a34d92736d087%3A0x1425127df7d0ec06!2zxYHDs2TFuiBFeHBvIEhhbGE!5e0!3m2!1spl!2spl!4v1559766413380!5m2!1spl!2spl" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

      </div>
     </div>
   </div>




    </div>
    </div>
    </div>
</section>

              




<?php get_footer(); ?>