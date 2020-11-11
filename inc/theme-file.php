<?php  

function xpent_scripts(){
// all css file linked
wp_enqueue_style( 'font-awesome', THEME_URI . '/asset/css/font-awesome.min.css ') ;
wp_enqueue_style( 'bootstrap', THEME_URI . '/asset/css/bootstrap.css') ;
wp_enqueue_style( 'jquery-ui', THEME_URI . '/asset/css/jquery-ui.css') ;
wp_enqueue_style( 'owl-carousel', THEME_URI . '/asset/css/owl.carousel.css');
wp_enqueue_style( 'fotorama', THEME_URI . '/asset/css/fotorama.css ') ;
wp_enqueue_style( 'custom', THEME_URI . '/asset/css/custom.css') ;
wp_enqueue_style( 'responsive', THEME_URI . '/asset/css/responsive.css') ;
wp_enqueue_style('style', get_stylesheet_directory_uri() .'/style.css');


// all js file linked

wp_enqueue_script('jquery-1', THEME_URI .'/asset/js/jquery-1.12.3.min.js', array('jquery'), '', true);
wp_enqueue_script('bootstrap', THEME_URI .'/asset/js/bootstrap.min.js', array('jquery'), '', true);
wp_enqueue_script('jquery-ui-min', THEME_URI .'/asset/js/jquery-ui.min.js', array('jquery'), '', true);
wp_enqueue_script('fotorama', THEME_URI .'/asset/js/fotorama.js', array('jquery'), '', true);
wp_enqueue_script('owl-carousel', THEME_URI .'/asset/js/owl.carousel.min.js', array('jquery'), '', true);
wp_enqueue_script('custom-js', THEME_URI .'/asset/js/custom.js', array('jquery'), '', true);

}

?>