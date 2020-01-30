<?php


function add_theme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );    
    
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), false, 'all');
    wp_enqueue_style( 'rocostyle', get_template_directory_uri() . '/assets/css/style.css', array(), false, 'all');
    wp_enqueue_style( 'camera', get_template_directory_uri() . '/assets/css/camera.css', array(), false, 'all');
    wp_enqueue_style( 'bootstrapresponsive', get_template_directory_uri() . '/assets/css/bootstrap-responsive.css', array(), false, 'all');
    wp_enqueue_style( 'cslider', get_template_directory_uri() . '/assets/css/cslider.css', array(), false, 'all');
    wp_enqueue_style( 'flexslider', get_template_directory_uri() . '/assets/css/flexslider.css', array(), false, 'all');
    wp_enqueue_style( 'fontawesome', get_template_directory_uri() . 'assets/css/font-awesome.css', array(), false, 'all');
    wp_enqueue_style( 'jquerybxslider', get_template_directory_uri() . '/assets/css/jquery.bxslider.css', array(), false, 'all');
    wp_enqueue_style( 'overwrite', get_template_directory_uri() . '/assets/css/jquery.overwrite.css', array(), false, 'all');
    wp_enqueue_style( 'prettyphoto', get_template_directory_uri() . '/assets/css/prettyPhoto.css', array(), false, 'all');
    wp_enqueue_style( 'shortcodes', get_template_directory_uri() . '/assets/css/shortcodes.css', array(), false, 'all');
    wp_enqueue_style( 'shortcodes', get_template_directory_uri() . '/assets/js/google-code-prettify/prettify.css', array(), false, 'all');
    
    wp_enqueue_script( 'jquery-js', '//code.jquery.com/jquery-3.2.1.slim.min.js', array( 'jquery' ), false, true );
    wp_enqueue_script( 'popper', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array( 'jquery' ), false, true );
    wp_enqueue_script( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array( 'jquery' ), false, true );
    wp_enqueue_script( 'animate', get_template_directory_uri() . '/assets/js/animate.js', array ( 'jquery' ), false, true);
    wp_enqueue_script( 'custom', get_template_directory_uri() . '/assets/js/custom.js', array ('jquery'), false, true);
    wp_enqueue_script( 'inview', get_template_directory_uri() . '/assets/js/inview.js', array (), false, true);    
    wp_enqueue_script( 'jquerybx', get_template_directory_uri() . '/assets/js/jquery.bxslider.js', array ('jquery'), false, true);    
    wp_enqueue_script( 'jquerycslider', get_template_directory_uri() . '/assets/js/jquery.cslider.js', array ('jquery'), false, true);    
    wp_enqueue_script( 'jqueryeasing', get_template_directory_uri() . '/assets/js/jquery.easing.1.3.js', array ('jquery'), false, true);    
    wp_enqueue_script( 'jqueryflexslider', get_template_directory_uri() . '/assets/js/jquery.flexslider.js', array ('jquery'), false, true);    
    wp_enqueue_script( 'jqueryprettyphoto', get_template_directory_uri() . '/assets/js/jquery.prettyPhoto.js', array ('jquery'), false, true);    
    wp_enqueue_script( 'modernizrcustom', get_template_directory_uri() . '/assets/js/modernizr.custom.js', array ('jquery'), false, true);    
    wp_enqueue_script( 'camera', get_template_directory_uri() . '/assets/js/camera/camera.js', array ('jquery'), false, true);    
    wp_enqueue_script( 'camerasetting', get_template_directory_uri() . '/assets/js/camera/setting.js', array ('jquery'), false, true);    
    wp_enqueue_script( 'googlepretify', get_template_directory_uri() . '/assets/js/google-codde-prettify/prettify.js', array ('jquery'), false, true);    
    wp_enqueue_script( 'portfolio', get_template_directory_uri() . '/assets/js/portfolio/jquery.quicksand.js', array ('jquery'), false, true);    
    wp_enqueue_script( 'portfoliosetting', get_template_directory_uri() . '/assets/js/portfolio/setting.js', array ('jquery'), false, true);    
    wp_enqueue_script( 'toucheffects', get_template_directory_uri() . '/assets/js/modernizr.custom.js', array ('jquery'), false, true);    
      
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
}