<?php

// head自動出力を全てオフにする

/* DNSプリフェッチ設定の削除 */
add_filter( 'emoji_svg_url', '__return_false' );
 
/* 絵文字削除 */
remove_action( 'wp_head',             'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles',     'print_emoji_styles' );
remove_action( 'admin_print_styles',  'print_emoji_styles' );

/* WP5.x.xのブロックエディタ用スタイルの排除 */
wp_deregister_style( 'wp-block-library' );
wp_deregister_style( 'wp-block-library-theme' );

/* wp-json削除 */
remove_action('wp_head','rest_output_link_wp_head');
remove_action('wp_head','wp_oembed_add_discovery_links');

/* 外部投稿ツール設定削除 */
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'rsd_link' );

/* WPのバージョン削除 */
remove_action('wp_head', 'wp_generator');

// カテゴリーとタグのmeta descriptionからpタグを除去
remove_filter('term_description','wpautop');

// ↑ head自動出力を全てオフにする　↑


// 404ページ表示
add_action( 'template_redirect', 'is404_redirect' );
function is404_redirect() {
  if ( is_404() ) {
    wp_safe_redirect( get_permalink( get_page_by_path( '404' ) ), 301 );
    exit();
  }
}

add_theme_support( 'title-tag' );
// function add_editor_style_cb() {
//   add_editor_style();
// }
// add_action('admin_init', 'add_editor_style_cb');
// contactform 7 pタグ出さない 
add_filter( 'wpcf7_autop_or_not', '__return_false' );


// function disable_visual_editor_in_page(){
//   add_filter('user_can_richedit', 'disable_visual_editor_filter');
// }
// function disable_visual_editor_filter(){
//   return false;
// }
add_action( 'load-post.php', 'disable_visual_editor_in_page' );
add_action( 'load-post-new.php', 'disable_visual_editor_in_page' );

/**
 * WP-SCSS：ページをロードするたびにscssファイルを強制的にコンパイル.
 */
define( 'WP_SCSS_ALWAYS_RECOMPILE', true );

// アイキャッチ機能を有効
add_theme_support('post-thumbnails');

// remove_filter('the_content', 'wpautop'); // 記事の自動整形を無効にする
// remove_filter('the_excerpt', 'wpautop'); // 抜粋の自動整形を無効にする

// テキストエディタを選択不可に
add_filter( 'wp_editor_settings', function ( $settings ) {
  if ( user_can_richedit() )
    $settings['quicktags'] = false;
  return $settings;
});

// アップロード画像サイズを無制限にする
add_filter("big_image_size_threshold", "__return_false");
