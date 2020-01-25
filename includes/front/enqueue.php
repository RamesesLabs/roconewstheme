<?php

function rn_enqueue() {
    $uri            = get_theme_file_uri();

    wp_register_style('rn_google_fonts', 'https://fonts.googleapis.com/css?family=Handlee|Open+Sans:300,400,600,700,800');
    wp_register_style('rn_bootstrap', $uri . '/assets/css/bootstrap.css');
    wp_register_style('rn_bootstrap_responsive', $uri . '/assets/css/bootstrap-responsive.css');
    wp_register_style('rn_flexslider', $uri . '/assets/css/flexslider.css');
    wp_register_style('rn_prettyphoto', $uri . '/assets/css/prettyPhoto.css');
    wp_register_style('rn_camera', $uri . '/assets/css/css/camera.css');
    wp_register_style('rn_jquery_bxslider', $uri . '/assets/css/jquery.bxslider.css');
    wp_register_style('rn_style', $uri . '/assets/css/style.css');
    wp_register_style('rn_color_default', $uri . '/assets/color/default.css');

    wp_enqueue_style('rn_google_fonts');
    wp_enqueue_style('rn_bootstrap');
    wp_enqueue_style('rn_bootstrap_responsive');
    wp_enqueue_style('rn_flexslider');
    wp_enqueue_style('rn_prettyphoto');
    wp_enqueue_style('rn_camera');
    wp_enqueue_style('rn_jquery_bxslider');
    wp_enqueue_style('rn_style');
    wp_enqueue_style('rn_color_default');

    wp_register_script('rn_jquery', $uri . '/assets/js/jquery.js', [], false, true);
    wp_register_script('rn_jquery_easing', $uri . '/assets/js/jquery.easing.1.3.js', [], false, true);
    wp_register_script('rn_bootstrap', $uri . '/assets/js/bootstrap.js', [], false, true);
    wp_register_script('rn_modernizer_custom', $uri . '/assets/js/modernizr.custom.js', [], false, true);
    wp_register_script('rn_toucheffects', $uri . '/assets/js/toucheffects.js', [], false, true);
    wp_register_script('rn_google_code_prettify', $uri . '/assets/js/google-code-prettify/prettify.js', [], false, true);
    wp_register_script('rn_jquery_bxslider', $uri . '/assets/js/jquery.bxslider.min.js', [], false, true);
    wp_register_script('rn_camera', $uri . '/assets/js/camera/camera.js', [], false, true);
    wp_register_script('rn_camera_setting', $uri . '/assets/js/camera/setting.js', [], false, true);
    wp_register_script('rn_jquery_prettyphoto', $uri . '/assets/js/jquery.prettyPhoto.js', [], false, true);
    wp_register_script('rn_jquery_portfolio_setting', $uri . '/assets/js/portfolio/jquery.quicksand.js', [], false, true);
    wp_register_script('rn_jquery_portfolio_quicksand', $uri . '/assets/js/portfolio/setting.js', [], false, true);
    wp_register_script('rn_jquery_flexslider', $uri . '/assets/js/jquery.flexslider.js', [], false, true);
    wp_register_script('rn_animate', $uri . '/assets/js/animate.js', [], false, true);
    wp_register_script('rn_inview', $uri . '/assets/js/inview.js', [], false, true);
    wp_register_script('rn_custom', $uri . '/assets/js/custom.js', [], false, true);

    wp_enqueue_script('rn_jquery');
    wp_enqueue_script('rn_jquery_easing');
    wp_enqueue_script('rn_bootstrap');
    wp_enqueue_script('rn_modernizer_custom');
    wp_enqueue_script('rn_toucheffects');
    wp_enqueue_script('rn_google_code_prettify');
    wp_enqueue_script('rn_jquery_bxslider');
    wp_enqueue_script('rn_camera');
    wp_enqueue_script('rn_camera_setting');
    wp_enqueue_script('rn_jquery_prettyphoto');
    wp_enqueue_script('rn_jquery_portfolio_setting');
    wp_enqueue_script('rn_jquery_portfolio_quicksand');
    wp_enqueue_script('rn_jquery_flexslider');
    wp_enqueue_script('rn_animate');
    wp_enqueue_script('rn_inview');
    wp_enqueue_script('rn_custom');
}