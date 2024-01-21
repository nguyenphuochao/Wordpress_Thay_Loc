<?php
// Hàm hook tự nhúng css và js vào website 
function phuochao_enqueue_scripts()
{
    $version = '1.0';
    wp_enqueue_style('bootstrap', get_theme_file_uri('assets/plugins/bootstrap/css/bootstrap.min.css'), array(), $version);
    wp_enqueue_style('themify-icons', get_theme_file_uri('assets/plugins/themify/css/themify-icons.css'), array(), $version);
    wp_enqueue_style('slick-theme', get_theme_file_uri('assets/plugins/slick-carousel/slick-theme.css'), array(), $version);
    wp_enqueue_style('slick', get_theme_file_uri('assets/plugins/slick-carousel/slick.css'), array(), $version);
    wp_enqueue_style('owl.carousel', get_theme_file_uri('assets/plugins/owl-carousel/owl.carousel.min.css'), array(), $version);
    wp_enqueue_style('owl.theme.default', get_theme_file_uri('assets/plugins/owl-carousel/owl.theme.default.min.css'), array(), $version);
    wp_enqueue_style('magnific-popup', get_theme_file_uri('assets/plugins/magnific-popup/magnific-popup.css'), array(), $version);
    wp_enqueue_style('style', get_theme_file_uri('assets/css/style.css'), array(), $version);

    wp_enqueue_script('jquery', get_theme_file_uri('assets/plugins/jquery/jquery.js'), array('jquery'), $version, true);
    wp_enqueue_script('bootstrap', get_theme_file_uri('assets/plugins/bootstrap/js/bootstrap.min.js'), array('jquery'), $version, true);
    wp_enqueue_script('popper', get_theme_file_uri('assets/plugins/bootstrap/js/popper.min.js'), array('jquery'), $version, true);
    wp_enqueue_script('carousel', get_theme_file_uri('assets/plugins/owl-carousel/owl.carousel.min.js'), array('jquery'), $version, true);
    wp_enqueue_script('slick', get_theme_file_uri('assets/plugins/slick-carousel/slick.min.js'), array('jquery'), $version, true);
    wp_enqueue_script('magnific-popup', get_theme_file_uri('assets/plugins/magnific-popup/magnific-popup.js'), array('jquery'), $version, true);
    wp_enqueue_script('instafeed', get_theme_file_uri('assets/plugins/instafeed-js/instafeed.min.js'), array('jquery'), $version, true);
    wp_enqueue_script('googleapis', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw', array('jquery'), $version, true);
    wp_enqueue_script('google-map', get_theme_file_uri('assets/plugins/google-map/gmap.js'), array('jquery'), $version, true);
    wp_enqueue_script('custom', get_theme_file_uri('assets/js/custom.js'), array('jquery'), $version, true);
}
add_action('wp_enqueue_scripts', 'phuochao_enqueue_scripts');
// Hàm tạo ảnh đại diện trong post
function phuochao_setup()
{
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        // Any or all of these.
        'comment-list',
        'comment-form',
        'search-form',
        'gallery',
        'caption',
        'style',
        'script',
    ));
}
add_action('after_setup_theme', 'phuochao_setup');
