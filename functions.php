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

// アイキャッチ画像を利用できるようにする
add_theme_support('post-thumbnails');

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

// 抜粋文が自動的に生成される場合に最後に付与される文字列を変更します。
function cms_excerpt_more()
{
    return '...';
}
add_filter('excerpt_more', 'cms_excerpt_more');

// 抜粋文が自動的に生成される場合にデフォルトの文字数を変更します。
function cms_excerpt_length()
{
    return 120;
}
add_filter('excerpt_mblength', 'cms_excerpt_length');

// 固定ページで抜粋文を入力できるようにする。
add_post_type_support('page', 'excerpt');
