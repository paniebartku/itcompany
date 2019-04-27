<footer>

<div class="footer-main">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-md-6">
                <?php if( is_active_sidebar( 'footer-sidebar-1' ) ){ 
                  dynamic_sidebar( 'footer-sidebar-1' );
                  }else {echo '<p>Write something</p>';}?>
                </div>
                <div class="col-xl-3 col-md-6">
                    <?php if( is_active_sidebar( 'footer-sidebar-2' ) ){ 
                  dynamic_sidebar( 'footer-sidebar-2' );
                  }else {echo '<p>Write something</p>';}?>
                </div>
                <div class="col-xl-3 col-md-6">
                    <?php if( is_active_sidebar( 'footer-sidebar-3' ) ){ 
                  dynamic_sidebar( 'footer-sidebar-3' );
                  }else {echo '<p>Write something</p>';}?>
                </div>
                <div class="col-xl-3 col-md-6">
                    <?php if( is_active_sidebar( 'footer-sidebar-4' ) ){ 
                  dynamic_sidebar( 'footer-sidebar-4' );
                  }else {echo '<p>Write something</p>';}?>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-additional">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <p class="footer-additional__copyright">
                        &copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>.
                    </p>                           
                </div>
                <div class="col-sm-6">
                    <?php 
                    $facebookLink = esc_attr( get_option( 'facebook' ) ); 
                    ?>
                    <a href="<?php echo $facebookLink ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a> 
                    
                </div>
            </div>
        </div>
</div>


</footer>
<?php wp_footer(); ?>
</body>
</html>