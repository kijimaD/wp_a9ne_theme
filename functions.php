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

// ページ間ナビゲーションにボタンクラスを追加

add_filter('previous_post_link', 'add_prev_post_link_class');
function add_prev_post_link_class($output)
{
    return str_replace('<a href=', '<small>前の記事</small><a class="btn btn-light btn-block text-left py-4" href=', $output);
}
add_filter('next_post_link', 'add_next_post_link_class');
function add_next_post_link_class($output)
{
    return str_replace('<a href=', '<small>次の記事</small><a class="btn btn-light btn-block text-right py-4" href=', $output);
}

// ペジネーションにクラスを追加
add_filter('page_navi', 'add_page_navi_class');
function add_page_navi_class($output)
{
    if (function_exists('page_navi')):
      return str_replace('<a href=', '<a class="page-link border-0 text-dark" href=', $output);
    endif;
}
