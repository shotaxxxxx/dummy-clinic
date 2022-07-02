<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>みなみ歯科クリニック</title>
<meta name="description" content="デスクリプションです">

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
<link rel="stylesheet" href="//unpkg.com/swiper@7/swiper-bundle.min.css" />

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css<?php echo '?' . filemtime(get_template_directory() . '/style.css'); ?>">

<?php wp_enqueue_script('jquery'); ?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="header">
        <div class="header-inner">
            <h1 class="header-logo"><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_theme_file_uri('img/logo.png'); ?>" alt="ヘッダーロゴ"></a></h1>
            <div class="header-right">
                <!-- <div class="header-nav">
                    <ul class="header-nav-items">
                        <li class="header-nav-item"><a href="<?php echo esc_url(home_url('/')); ?>" class="nav-home nav-item-link nav-current" id="nav-home-current">ホーム</a></li>
                        <li class="header-nav-item"><a href="<?php echo esc_url(home_url('/page-about')); ?>" class="nav-about nav-item-link">当院について</a></li>
                        <li class="header-nav-item"><a href="<?php echo esc_url(home_url('/page-medical')); ?>" class="nav-medical nav-item-link">診察案内</a></li>
                        <li class="header-nav-item"><a href="<?php echo esc_url(home_url('/staffs')); ?>" class="nav-people nav-item-link">スタッフ紹介</a></li>
                        <li class="header-nav-item"><a href="<?php echo esc_url(home_url('/blog')); ?>" class="nav-blog nav-item-link">スタッフブログ</a></li>
                        <li class="header-nav-item"><a href="<?php echo esc_url(home_url('/contact')); ?>" class="nav-inquiry nav-item-link">お問い合わせ</a></li>
                    </ul>
                </div> -->
                <?php
                wp_nav_menu(array(
                    "menu" => "グローバルメニュー",
                    "container" => "div",
                    "container_class" => "header-nav",
                    "menu_class" => "header-nav-items",
                ));
                ?>
                <div class="header-info">
                    <p class="header-address">〒166-0001 東京都杉並区阿佐谷北7-3-1</p>
                    <div class="header-tel"><img src="<?php echo get_theme_file_uri('img/tel.png'); ?>" alt="電話番号"></div>
                </div>
            </div>
        </div>
    </header>
