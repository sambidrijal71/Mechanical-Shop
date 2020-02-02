<?php

function load_stylesheets()
{

    
    
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');
    
    
    
    wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_enqueue_style('style');

   


}
add_action('wp_enqueue_scripts', 'load_stylesheets');










function include_jquery()
{

        wp_deregister_script('jquery');

        wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery 3.1.1_main.js', '', 1, true);

        add_action('wp_equeue_scripts', 'jquery'); 

}
add_action('wp_enqueue_scrpts', 'include_jquery');

function loadjs()
{

    wp_register_script('customjs', get_template_directory_uri() . '/js/scripts.js', '', 1, true );
    wp_enqueue_script('customjs');


}
add_action('wp_enqueue_scrpts', 'loadjs');


add_theme_support('menus');

add_theme_support('post-thumbnails');


register_nav_menus(

    array(


            'top-menu' =>  __('Top Menu', 'theme'),
            'footer-menu' =>  __('Footer Menu', 'theme'),



    )


);
 
function themename_custom_logo_setup() {
    $defaults = array(
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
   }
   add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

   if ( function_exists( 'the_custom_logo' ) ) {
 the_custom_logo();
}

add_action( 'after_setup_theme', 'register_multiple_widget_areas' );

function register_multiple_widget_areas()
{
    register_sidebar(
        array(
        'name'          => 'Sidebar',
        'id'            => 'sidebar',
        'description'   => 'describe the function of the box.'
        )
    );
    register_sidebar(
        array(
        'name'          => 'Header',
        'id'            => 'header-widget',
        'description'   => 'Goes at the top of the page.'
        )
    );
}










