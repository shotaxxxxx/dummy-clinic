<?php 
add_action('init', function() {
    add_theme_support('post-thumbnails');

    // メニューをサポート
    register_nav_menus([
        'global' => 'ヘッダーメニュー',
        'footer' => 'フッターメニュー'

    ]);

});

function my_setup() {
    add_theme_support('automatic-feed-links'); //投稿とコメントのRSSフィードのリンクを有効化
    add_theme_support('title-tag'); //タイトルタグを生成
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        )
        );
}

function my_script_init() {
    // wp_enqueue_style('my', get_template_directory_uri() . '/style.css', array(), '5.8.2', 'all');
    // WordPressに含まれているjquery.jsを読み込まない
    wp_deregister_script('jquery');
    // jQueryの読み込み
    wp_enqueue_script( 'jquery', '//code.jquery.com/jquery-3.5.1.min.js', "", "1.0.1");
    wp_enqueue_script('drawer-js', get_template_directory_uri() . '/js/drawer.js', array( 'jquery'), '1.0.0', true);
    wp_enqueue_script('scroll-js', get_template_directory_uri() . '/js/scroll.js', array( 'jquery'), '1.0.0', true);

    if ( is_front_page()) { //フロントページであるか判断
        wp_enqueue_script('front-js', get_template_directory_uri() . '/js/script.js', array( 'jquery'), '1.0.0', true);
    }

    if ( is_archive('archive-staffs')) { // 投稿ページであるか判断
        wp_enqueue_script('staff-js', get_template_directory_uri() . '/js/staff.js', array( 'jquery'), '1.0.0', true);
    }
    
}
add_action('wp_enqueue_scripts', 'my_script_init');

function add_prev_post_link_class($output) {
    return str_replace('<a href=' , '<a class="article__pagination-pre" href=' , $output);
}
add_filter( 'previous_post_link' , 'add_prev_post_link_class');

/* インデックスと巡回の設定 */
function add_noindex_insert(){

	/* 特定の固定ページ */
	if (is_page('staffs')) {
		echo '<meta name="robots" content="noindex,nofollow,noarchive">'."\n";
		echo '<meta name="googlebot" content="noindex,nofollow,noarchive">'."\n";
	}

}
add_action('wp_head', 'add_noindex_insert');

function add_thanks_page() {
    echo <<< EOD
    <script>
    var thanksPage = {
        248: 'http://minamiclinic.local/page-contact-thanks/',
        252: 'http://minamiclinic.local/page-reservation-thanks/',
    };
    document.addEventListener( 'wpcf7mailsent', function( event ) {
    location = thanksPage[event.detail.contactFormId];
    }, false );
    </script>
    EOD;
}
add_action( 'wp_footer', 'add_thanks_page' );

// jQueryの読み込み

