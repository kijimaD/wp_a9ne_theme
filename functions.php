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

// ヘッダーサムネイル用画像サイズ設定
add_image_size('header_image', 600, 200, true);

// ページ間ナビゲーションにボタンクラスを追加

add_filter('previous_post_link', 'add_prev_post_link_class');
function add_prev_post_link_class($output)
{
    return str_replace('<a href=', '<a class="btn btn-light btn-block text-center py-4" href=', $output);
}
add_filter('next_post_link', 'add_next_post_link_class');
function add_next_post_link_class($output)
{
    return str_replace('<a href=', '<a class="btn btn-light btn-block text-center py-4" href=', $output);
}

// ペジネーションにクラスを追加
add_filter('page_navi', 'add_page_navi_class');
function add_page_navi_class($output)
{
    if (function_exists('page_navi')):
      return str_replace('<a href=', '<a class="page-link border-0 text-dark" href=', $output);
    endif;
}

// 脚注タイトルをh2にする
add_filter('efn_footnote_label', 'efn_change_label_markup', 10, 2);
function efn_change_label_markup($output, $label)
{
    // if (function_exists('efn_footnote_label')):
    return '<h2>' . $label . '</h2>';
    // endif;
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

// the_excerptからpタグを消去
remove_filter('the_excerpt', 'wpautop');
