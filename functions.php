<?php

function theme_enqueue_scripts() {
  // jQueryを読み込む
  wp_enqueue_script('jquery');

  // テーマディレクトリのURLを取得
  $theme_directory = get_template_directory_uri();

  /* 
    * CSSファイルとJavaScriptファイルを読み込む
    *
    * ハンドル名
    * ファイルのURL
    * 依存するファイルのハンドル名
    * バージョン
    * フッターにスクリプトを出力するかどうか
  */

  // 共通のCSSファイルとJavaScriptファイルを読み込む
wp_enqueue_style('reset-style', $theme_directory . '/assets/css/reset.css');
wp_enqueue_style('common-style', $theme_directory . '/assets/css/common.css', array('reset-style'), null);
wp_enqueue_script('common-script', $theme_directory . '/assets/js/common.js', array('jquery'), null, true);

  // front-page.php のみで読み込むCSSとJavaScript
if (is_front_page()) {
    wp_enqueue_style('front-style', $theme_directory . '/assets/css/front.css', array('common-style'));
    wp_enqueue_script('front-script', $theme_directory . '/assets/js/front.js', array('jquery'), null, true);
}

  // news 投稿タイプ用のCSSとJavaScript
if (is_singular('news') || is_post_type_archive('news')) {
    wp_enqueue_style('news-style', $theme_directory . '/assets/css/news.css', array('common-style'));
    wp_enqueue_script('news-script', $theme_directory . '/assets/js/news.js', array('jquery'), null, true);
}

  // product 投稿タイプ用のCSSとJavaScript
if (is_singular('product') || is_post_type_archive('product')) {
    wp_enqueue_style('product-style', $theme_directory . '/assets/css/product.css', array('common-style'));
    wp_enqueue_script('product-script', $theme_directory . '/assets/js/product.js', array('jquery'), null, true);
}
}
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');




// カスタム投稿タイプ news を登録
function create_news_post_type() {
register_post_type('news',
    array(
        'labels' => array(
              'name' => __('News'),  // 管理画面のメニューなどで表示される投稿タイプの名前（複数形）
              'singular_name' => __('News')  // 管理画面で表示される投稿タイプの名前（単数形）
        ),
          'public' => true, // 投稿タイプを公開するかどうか。trueにすると、管理画面に表示され、公開されます
          'has_archive' => true, // 投稿タイプにアーカイブページを持たせるかどうか。trueにすると、アーカイブページが生成されます
          'rewrite' => array('slug' => 'news'), // 投稿タイプのURLスラッグを指定します。例: yoursite.com/news/
          'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'comments') // この投稿タイプがサポートする機能を指定します
    )
);
}
add_action('init', 'create_news_post_type');


// カスタム投稿タイプ product を登録
function create_product_post_type() {
    register_post_type('product',
        array(
            'labels' => array(
                'name' => __('Products'),
                'singular_name' => __('Product')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'products'),
            'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'comments')
        )
    );
}
add_action('init', 'create_product_post_type');

// アイキャッチ画像のサポートを有効にする
function theme_setup() {
add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'theme_setup');