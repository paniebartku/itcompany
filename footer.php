<footer>
<?php get_template_part('elements/block-search-modal'); ?>
<div class="footer-main">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 footer-main__item">
                <?php if( is_active_sidebar( 'footer-sidebar-1' ) ){ 
                  dynamic_sidebar( 'footer-sidebar-1' );
                  }else {echo '';}?>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 footer-main__item">
                    <?php if( is_active_sidebar( 'footer-sidebar-2' ) ){ 
                  dynamic_sidebar( 'footer-sidebar-2' );
                  }else {echo '';}?>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-6 footer-main__item">
                    <?php if( is_active_sidebar( 'footer-sidebar-3' ) ){ 
                  dynamic_sidebar( 'footer-sidebar-3' );
                  }else {echo '';}?>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 footer-main__item">
                    <?php if( is_active_sidebar( 'footer-sidebar-4' ) ){ 
                  dynamic_sidebar( 'footer-sidebar-4' );
                  }else {echo '';}?>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-additional">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 footer-additional__item ">
                    <p class="footer-additional__copyright">
                        &copy; <?php echo date('Y') - 1; ?> Copyright <?php bloginfo('name'); ?>.
                    </p>                           
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6  col-sm-12 footer-additional__item">
                    <div class="footer-additional__enova">
                        <img src="<?php echo get_template_directory_uri(); ?>/src/img/enova365_logo_white.png" />
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6  col-sm-12 footer-additional__item">
                    <div class="footer-additional__iso">
                        <img src="<?php echo get_template_directory_uri(); ?>/src/img/iso_logo.png" />
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 footer-additional__item">
                    <div class="footer-additional__socials">
                    <?php $facebookLink = esc_attr( get_option( 'facebook' ) ); ?>
                    <a href="<?php echo $facebookLink ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <?php $linkedinLink = esc_attr( get_option( 'linkedin' ) ); ?>
                    <a href="<?php echo $linkedinLink ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a>  
                    </div>
                </div>
            </div>
        </div>
</div>


</footer>
<?php wp_footer(); ?>
</body>
</html>