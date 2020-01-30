<?php 

include(get_theme_file_path('/includes/front/enqueue.php'));


add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );