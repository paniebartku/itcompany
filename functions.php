<?php 

class Functions {
    public function __construct() {

        $this->add_actions();
        $this->add_filters();
        $this->theme_setup();
        
    }

    public function theme_setup() {
        add_action( 'after_setup_theme', array( $this, 'theme_setup_core' ) );
    }

    public function theme_setup_core() {
        add_theme_support( 'menus' );
        register_nav_menu( 'primary', 'Primary menu' );
        add_theme_support( 'custom-logo');
        add_theme_support( 'post-thumbnails' );
    }

    public function add_actions() {
        add_action( 'wp_enqueue_scripts', array( $this, 'load_scripts_and_styles' ) );
        add_action( 'init', array( $this, 'home_page_slider_post_type' ) );   
        add_action( 'init', array( $this, 'case_studies_post_type' ) ); 
        add_action( 'init', array( $this, 'logos_post_type' ) );    
        add_action( 'admin_menu', array($this,'itcompany_add_admin_page') );  
        add_action( 'admin_init', array($this, 'itcompany_custom_settings' ));
        add_action( 'widgets_init', array( $this, 'footer_sidebars' ) );
        
    }

    public function add_filters(){
       
    }

    public function load_scripts_and_styles() {
        wp_enqueue_style('itcompany_css', get_template_directory_uri() . '/dist/dist.min.css', array(), '1.0.0', 'all');
        wp_enqueue_script('itcompany_js', get_template_directory_uri() . '/dist/dist.min.js', array('jquery'),  '1.0.0', true);
    }

    public function home_page_slider_post_type(){
       
        register_post_type( 'slider',
            array(
            'labels' => array(
                'name' => __( 'Slider' ),
                'singular_name' => __( 'Slide' ),
                'add_new' => __( 'Add New' ),
                'add_new_item' => __( 'Add New Slide' ),
                'edit' => __( 'Edit' ),
                'edit_item' => __( 'Edit Slide' ),
                'new_item' => __( 'New Slide' ),
                'view' => __( 'View Slide' ),
                'view_item' => __( 'View Slide' ),
                'search_items' => __( 'Search Slide' ),
                'not_found' => __( 'No Slides found' ),
                'not_found_in_trash' => __( 'No Slides found in Trash' )
            ),
            'public' => true,
            'has_archive' => true,
            'menu_icon'   => 'dashicons-image-filter',
            'supports' => array('title', 'thumbnail', 'editor')
        ));
    }

    public function case_studies_post_type(){
       
        register_post_type( 'case-studies',
            array(
            'labels' => array(
                'name' => __( 'Case Studies' ),
                'singular_name' => __( 'Case Study' ),
                'add_new' => __( 'Add New' ),
                'add_new_item' => __( 'Add New Case Study' ),
                'edit' => __( 'Edit' ),
                'edit_item' => __( 'Edit Case Study' ),
                'new_item' => __( 'New Case Study' ),
                'view' => __( 'View Case Study' ),
                'view_item' => __( 'View Case Study' ),
                'search_items' => __( 'Search Case Study' ),
                'not_found' => __( 'No Case Studies found' ),
                'not_found_in_trash' => __( 'No Case Studies found in Trash' )
            ),
            'public' => true,
            'has_archive' => true,
            'menu_icon'   => 'dashicons-image-filter',
            'supports' => array('title', 'editor')
        ));
    }

    public function logos_post_type(){
       
        register_post_type( 'logos',
            array(
            'labels' => array(
                'name' => __( 'Logos' ),
                'singular_name' => __( 'Logo' ),
                'add_new' => __( 'Add New' ),
                'add_new_item' => __( 'Add New Logo' ),
                'edit' => __( 'Edit' ),
                'edit_item' => __( 'Edit Logo' ),
                'new_item' => __( 'New Logo' ),
                'view' => __( 'View Logo' ),
                'view_item' => __( 'View Logo' ),
                'search_items' => __( 'Search Logo' ),
                'not_found' => __( 'No Logos found' ),
                'not_found_in_trash' => __( 'No Logos found in Trash' )
            ),
            'public' => true,
            'has_archive' => true,
            'menu_icon'   => 'dashicons-image-filter',
            'supports' => array('title', 'thumbnail')
        ));
    }

    function itcompany_add_admin_page() {
        add_menu_page( 'IT Admin Theme Options', 'IT Admin', 'manage_options', 'itcompany_options', 'itcompany_theme_create_page');
        add_submenu_page( 'itcompany_options', 'IT Admin Theme Options', 'General', 'manage_options', 'itcompany_options', 'itcompany_theme_create_page' );
    }
    	
function itcompany_custom_settings() {
    register_setting( 'itcompany-settings-group', 'facebook' );
    register_setting( 'itcompany-settings-group', 'linkedin' );
    register_setting( 'itcompany-settings-group', 'phone' );
    register_setting( 'itcompany-settings-group', 'email' );
	add_settings_section( 'itcompany-socials-options', 'Your important information', 'itcompany_socials_options', 'itcompany_options');
    add_settings_field( 'sidebar-name1', 'Facebook', 'itcompany_socials_name', 'itcompany_options', 'itcompany-socials-options');
    add_settings_field( 'sidebar-name2', 'Phone', 'itcompany_socials_phone', 'itcompany_options', 'itcompany-socials-options');
    add_settings_field( 'sidebar-name3', 'Email', 'itcompany_socials_email', 'itcompany_options', 'itcompany-socials-options');
    add_settings_field( 'sidebar-name4', 'Linkedin', 'itcompany_socials_linkedin', 'itcompany_options', 'itcompany-socials-options');

}


public function footer_sidebars() {
    register_sidebar( array(
        'name' => __( 'Footer sidebar 1'),
        'id' => 'footer-sidebar-1',
        'description' => __( 'First footer sidebar'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="footer-main__sidebar-title">',
        'after_title'   => '</h3>',
        ) );
    register_sidebar( array(
        'name' => __( 'Footer sidebar 2'),
        'id' => 'footer-sidebar-2',
        'description' => __( 'Second footer sidebar'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="footer-main__sidebar-title">',
        'after_title'   => '</h3>',
        ) );
    register_sidebar( array(
        'name' => __( 'Footer sidebar 3'),
        'id' => 'footer-sidebar-3',
        'description' => __( 'Third footer sidebar'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="footer-main__sidebar-title">',
        'after_title'   => '</h3>',
        ) );
    register_sidebar( array(
        'name' => __( 'Footer sidebar 4'),
        'id' => 'footer-sidebar-4',
        'description' => __( 'Fourth footer sidebar'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="footer-main__sidebar-title">',
        'after_title'   => '</h3>',
        ) );    
}


    
}

$functions = new Functions;
require get_template_directory() . '/inc/class.Walker.php';
require get_template_directory() . '/inc/class.PrimaryMenu.php';
require get_template_directory() . '/inc/class.ACFfunctions.php';



function itcompany_socials_name() {
	$facebookLink = esc_attr( get_option( 'facebook' ) );
	echo '<input type="text" name="facebook" value="'.$facebookLink.'" placeholder="Facebook" />';
}
function itcompany_socials_linkedin() {
	$linkedinLink = esc_attr( get_option( 'linkedin' ) );
	echo '<input type="text" name="linkedin" value="'.$linkedinLink.'" placeholder="Linkedin" />';
}
function itcompany_socials_phone() {
	$phone = esc_attr( get_option( 'phone' ) );
	echo '<input type="text" name="phone" value="'.$phone.'" placeholder="phone number" />';
}
function itcompany_socials_email() {
	$email = esc_attr( get_option( 'email' ) );
	echo '<input type="text" name="email" value="'.$email.'" placeholder="main email" />';
}
function itcompany_theme_create_page() {
	require_once( get_template_directory() . '/inc/itcompany-admin.php' );
}
function itcompany_socials_options() {
	echo 'Just paste and save :)';
}
