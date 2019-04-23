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

    
}

$functions = new Functions;
require get_template_directory() . '/inc/class.ACFfunctions.php';



