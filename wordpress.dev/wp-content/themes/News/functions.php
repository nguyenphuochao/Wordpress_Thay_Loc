<?php
// Hàm tạo ảnh đại diện trong post
function news_setup()
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
add_action('after_setup_theme', 'news_setup');


