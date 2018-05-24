<?php 

    // require_once('class-wp-bootstrap-navwalker.php');
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';


    function addingStyleSheet() {
        wp_enqueue_style('resetfile', get_template_directory_uri(). '/css/reset.css');
        wp_enqueue_style('bootstrapfile', get_template_directory_uri(). '/css/bootstrap.css');
        wp_enqueue_style('style', get_stylesheet_uri());
    }

    add_action('wp_enqueue_scripts', 'addingStyleSheet');

    function addingNavWalker() {
        register_nav_menus( array(
            'primarymenurs' => __( 'Primary Promptrs Menu'),
        ) );

    }

    add_action('after_setup_theme', 'addingNavWalker');

    // function navigationhooking() {
    //     register_nav_menus( array(
    //         'first' => __( 'First Menu'),
    //         'second' => __( 'Second Menu'),
    //         'third' => __( 'Third Menu'),
    //     ) );
    // }
    
    // add_action('after_setup_theme', 'navigationhooking');
    
?>