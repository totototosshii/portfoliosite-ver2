<?php
/*
 * WordPress標準機能
 *
 * @codex https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_theme_support
 */

function my_setup() {
  add_theme_support( 'post-thumbnails' );			 /* アイキャッチ */
  add_theme_support( 'automatic-feed-links' ); /* RSSフィード */
  add_theme_support( 'title-tag' ); 					 /* タイトルタグ自動生成 */
  add_theme_support( 'html5', array( 					 /* HTML5のタグで出力 */
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ) );
  if ( ! isset ($content_width ) ) {					 /* コンテンツの横幅をセット */
    $content_width = 1180;
	}
  add_theme_support( 'responsive-embeds' );		 /* 埋め込みコンテンツレスポンシブ */
}
add_action( 'after_setup_theme', 'my_setup' );


/* メニューの設定 */
function my_menu_init() {
	register_nav_menus(
		array(
			'global' => 'ヘッダーメニュー',
		)
	);
}
add_action( 'init', 'my_menu_init' );


// Google FontsとAdobe Fontsの読み込み
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


// Font Awesomeの読み込み
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
    '1.6.3',
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
    '1.0.4',
    true
  );
}
add_action( 'wp_enqueue_scripts', 'my_scripts' );


/* contactform7の読み込み制限 */
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


/* お問い合わせページを除き、「reCAPTCHA」を読み込ませない */
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
