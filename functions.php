<?php
/*
 * WordPress標準機能
 *
 * @codex https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_theme_support
 */

/* テーマのセットアップ */
function my_theme_setup() {
  // <head>内にRSSフィードリンクを出力
  add_theme_support( 'automatic-feed-links' );
  // タイトルタグを自動生成
  add_theme_support( 'title-tag' );
  // HTML5のタグで出力
  add_theme_support( 'html5',
  array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption'
    )
  );
  // アイキャッチ画像を有効化
  add_theme_support( 'post-thumbnails' );
  // ブロックエディター用のCSSを有効化
  add_theme_support( 'wp-block-styles' );
  // 埋め込みコンテンツをレスポンシブ対応に
  add_theme_support( 'responsive-embeds' );
}
add_action( 'after_setup_theme', 'my_theme_setup' );


/* コンテンツ幅の設定 */
if (!isset($content_width)) {
  $content_width = 1180;
}


/* メニューの設定 */
function my_menu_init() {
	register_nav_menus(
		array(
			'global' => 'ヘッダーメニュー',
		)
	);
}
add_action( 'init', 'my_menu_init' );


/* 「Google Fonts」と「Adobe Fonts」の読み込み */
add_action( 'wp_head', function() {
?>
<link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap&text=AabCcdefhiklnOoPrSsTtuvW2020&copy;" rel="stylesheet">
<script>
  (function(d) {
    var config = {
      kitId: 'mug8qcw',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>
<?php
});
add_action('wp_head', 'script_fa_cdn');


/* 「Font Awesome」の読み込み */
function script_fa_cdn(){
  $link = <<<EOT
  <script src="https://kit.fontawesome.com/cba31e06f6.js" crossorigin="anonymous"></script>
  EOT;
  echo $link;
};


/* CSSファイル読み込み */
function my_styles() {
  wp_enqueue_style(
    'style-css',
    get_template_directory_uri() . '/css/style.css',
    array(),
    '1.8.0',
    'all'
  );
}
add_action( 'wp_enqueue_scripts', 'my_styles' );


/* JavaScriptファイル読み込み */
function my_scripts() {
  wp_enqueue_script(
    'script-js',
    get_template_directory_uri() . '/js/main.js',
    array( 'jquery' ),
    '1.0.5',
    true
  );
}
add_action( 'wp_enqueue_scripts', 'my_scripts' );


/* お問い合わせページを除き「Contact Form 7」を読み込ませない */
function cf7_limitation() {
    add_filter( 'wpcf7_load_js', '__return_false' );
    add_filter( 'wpcf7_load_css', '__return_false' );
    if( is_page( 'contact' ) ){
      if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
          wpcf7_enqueue_scripts();
      }
      if ( function_exists( 'wpcf7_enqueue_styles' ) ) {
          wpcf7_enqueue_styles();
      }
    }
}
add_action( 'template_redirect', 'cf7_limitation' );


/* お問い合わせページを除き「reCAPTCHA」を読み込ませない */
function load_recaptcha_js() {
  if ( ! is_page( 'contact' ) ) {
    wp_deregister_script( 'google-recaptcha' );
  }
}
add_action( 'wp_enqueue_scripts', 'load_recaptcha_js' );


/* 固定ページ毎に設定したスラッグをclassとして<body>に追加 */
add_filter( 'body_class', 'add_page_slug_class_name' );
function add_page_slug_class_name( $classes ) {
  if ( is_page() ) {
    $page = get_post( get_the_ID() );
    $classes[] = $page->post_name;
  }
  return $classes;
}


/* 管理画面に閲覧数を表示 */
//アクセス数を保存
function set_post_views($postID) {
  $count_key = 'post_views_count';
  $count = get_post_meta($postID, $count_key, true);
  if($count==''){
      $count = 0;
      delete_post_meta($postID, $count_key);
      add_post_meta($postID, $count_key, '0');
  }else{
    $count++;
    update_post_meta($postID, $count_key, $count);
  }
}

//クローラーのアクセス判別
function is_bot() {
  $ua = $_SERVER['HTTP_USER_AGENT'];
  $bot = array(
    "googlebot",
    "msnbot",
    "yahoo"
  );
  foreach( $bot as $bot ) {
    if (stripos( $ua, $bot ) !== false){
      return true;
    }
  }
  return false;
}

// 項目を増やす
function add_views_columns($columns) {
  $columns['post_views_count'] = '閲覧数';
  $columns['thumbnail'] = 'サムネイル';
  return $columns;
}
add_filter( 'manage_posts_columns', 'add_views_columns');

function add_views_column($column_name, $post_id) {
  // 閲覧数の呼び出し
  if($column_name == 'post_views_count') {
    $title = get_post_meta($post_id, 'post_views_count', true);
  }
  // サムネイルの呼び出し
  if( $column_name == 'thumbnail') {
    $thumb = get_the_post_thumbnail($post_id, array(100,100), 'thumbnail');
  }
  // ない場合はなしと表示
  if(isset($title)) {
    echo esc_attr($title);
  }else if( isset($thumb) && $thumb ) {
    echo $thumb;
  }
  else{
    echo __('None');
  }
}
add_action('manage_posts_custom_column', 'add_views_column', 10, 2);

// 並べ替え
function column_orderby_custom($vars) {
  if('post_views_count' == $vars['orderby']){
    $vars = array_merge($vars, array(
      'meta_key' => 'post_views_count',
      'orderby' => 'meta_value_num'
    ));
  }
  return $vars;
}
add_filter( 'request', 'column_orderby_custom' );

// 並べ替えができるように登録
function posts_register_sortable($sortable_column) {
  $sortable_column['post_views_count'] = 'post_views_count';
  return $sortable_column;
}
add_filter( 'manage_edit-post_sortable_columns', 'posts_register_sortable' );
