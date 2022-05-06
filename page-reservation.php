<?php /* Template Name:WEB予約  */ ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="header">
        <div class="header-inner">
        <h1 class="header-logo"><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_theme_file_uri('img/logo.png'); ?>" alt="ヘッダーロゴ"></a></h1>
        <div class="header-right">
                <div class="header-nav">
                    <ul class="header-nav-items">
                        <li class="header-nav-item"><a href="<?php echo esc_url(home_url('/')); ?>" class="nav-home nav-item-link">ホーム</a></li>
                        <li class="header-nav-item"><a href="<?php echo esc_url(home_url('/page-about')); ?>" class="nav-about nav-item-link">当院について</a></li>
                        <li class="header-nav-item"><a href="<?php echo esc_url(home_url('/page-medical')); ?>" class="nav-medical nav-item-link">診察案内</a></li>
                        <li class="header-nav-item"><a href="<?php echo esc_url(home_url('/staffs')); ?>" class="nav-people nav-item-link">スタッフ紹介</a></li>
                        <li class="header-nav-item"><a href="<?php echo esc_url(home_url('/blog')); ?>" class="nav-blog nav-item-link">スタッフブログ</a></li>
                        <li class="header-nav-item"><a href="<?php echo esc_url(home_url('/contact')); ?>" class="nav-inquiry nav-item-link">お問い合わせ</a></li>
                    </ul>
                </div>
                <div class="header-info">
                    <p class="header-address">〒166-0001 東京都杉並区阿佐谷北7-3-1</p>
                    <div class="header-tel"><img src="<?php echo get_theme_file_uri('img/tel.png'); ?>" alt="電話番号"></div>
                </div>
            </div>
        </div>
    </header>

    <?php get_template_part('drawer'); ?>

    <main class="mainsec">
        <div class="top-wrap">
            <div class="inner">
                <div class="section-top-img contact-img">
                    <div class="section-top-title">
                        <h2><?php single_post_title(); ?></h2>
                        <p>RESERVE</p>
                    </div>
                </div>
                <ol class="breadcrumb" itemscope itemtype="https://schema.org/breadcrumbList">
                    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a itemprop="item" href="ホームのURL">
                            <span class="breadcrumb-home" itemprop="name">ホーム</span>
                        </a>
                        <meta itemprop="position" content="1" />
                    </li>
                    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a itemprop="item" class="current-item">
                            <span itemprop="name">WEB予約</span>
                        </a>
                        <meta itemprop="position" content="2" />
                    </li>
                </ol>
            </div>
            <div class="top-reserve-button"><a href="<?php echo esc_url(home_url('/page-reservation')); ?>">WEB予約<br>はこちら</a></div>
        </div>
    </main>

    <section class="reserve__top-section">
        <div class="reserve__tel">
            <h2>お電話でのご予約/ご相談</h2>
            <div class="reserve__tel-img"><img src="<?php echo get_theme_file_uri('img/footer-tel.png'); ?>" alt=""></div>
            <p>お急ぎの方は電話での連絡がスムーズです。
                <br>混雑状況によっては当日受診をご利用いただけない場合がございます。
                <br>あらかじめご了承ください。
            </p>
        </div>
        <div class="reserve__mail">
            <h2>メールでのご予約/ご相談</h2>
            <p>【ご予約に関しての注意点】
                <br>メールアドレスの入力間違いにより送信できない事が発生しておりますので、メールアドレスは正しくご入力下さい。
                <br>※24時間以内に当院からの返信がない場合には、お電話(TEL 03-1234-5678)にてお問い合わせ下さい。
            </p>
        </div>
    </section>

    <section class="reserve__form-section">
        <h2 class="title reserve__title">予約フォーム</h2>
        <div class="reserve__formWrap">
        <?php the_content(); ?>
        </div>
    </section>

    <?php get_footer(); ?>
</body>

</html>