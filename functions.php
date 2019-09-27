<?php

// jsの読み込み
function add_js()
{
    wp_enqueue_script(
        'custom_js',
        get_template_directory_uri() . '/js/bootstrap.bundle.js',
        array('jquery'),
        true
        );
}
add_action('wp_enqueue_scripts', 'add_js');
