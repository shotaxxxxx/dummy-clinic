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
                        <li class="header-nav-item"><a href="<?php echo esc_url(home_url('/blog')); ?>" class="nav-blog nav-item-link nav-current" id="nab-blog-current">スタッフブログ</a></li>
                        <li class="header-nav-item"><a href="<?php echo esc_url(home_url('/contact')); ?>" class="nav-inquiry nav-item-link">お問い合わせ</a></li>
                    </ul>
                </div>
                <div class="header-info">
                    <p class="header-address">〒166-0001 東京都杉並区阿佐谷北7-3-1</p>
                    <div class="header-tel"><img src="<?php echo get_template_directory_uri(); ?>/img/tel.png" alt="電話番号"></div>
                </div>
            </div>
        </div>
    </header>

    <?php get_template_part('drawer'); ?>

    <main class="mainsec">
        <div class="top-wrap">
            <div class="inner">
                <div class="section-top-img archive-img">
                    <div class="section-top-title">
                        <h2>お知らせ</h2>
                        <p>NEWS</p>
                    </div>
                </div>
                <ol class="breadcrumb" itemscope itemtype="https://schema.org/breadcrumbList">
                    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a itemprop="item" href="<?php echo esc_url(home_url('/')); ?>">
                            <span class="breadcrumb-home" itemprop="name">ホーム</span>
                        </a>
                        <meta itemprop="position" content="1" />
                    </li>
                    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a itemprop="item" href="カテゴリー1のURL">
                            <span itemprop="name">スタッフブログ</span>
                        </a>
                        <meta itemprop="position" content="2" />
                    </li>
                </ol>
            </div>
            <div class="top-reserve-button"><a href="<?php echo esc_url(home_url('/page-reservation')); ?>">WEB予約<br>はこちら</a></div>
        </div>
    </main>

    <?php while (have_posts()) : the_post(); ?>
        <section class="article__section">
            <div class="article__content">
                <div class="article__prime">
                    <article>
                        <div class="article__title">
                            <h1><?php the_title(); ?></h1>
                        </div>
                        <div class="article__info">
                            <time class="article__time" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
                            <div class="article__category">
                            <p>
                            <?php
                            $category = get_the_category();
                            echo $category[0]->name;
                            ?>
                            </p>
                            </div>
                        </div>
                        <div class="article__body">
                        <?php the_content(); ?>
                        </div>
                    </article>
                    <?php 
                    $prev_post = get_previous_post();
                    $next_post =  get_next_post();
                    if($prev_post || $next_post):
                    ?>    
                    <div class="article__pagination">
                        <ul class="article__paginationWrap">
                            <?php if($prev_post); ?>
                            <li class="article__pagination-pre"><a href="<?php echo get_permalink( $prev_post->ID ); ?>"></a></li>
                            <?php endif; ?>
                            <li class="article__pagination-list"><a href="">記事一覧</a></li>
                            <?php if( $next_post ): // 次の投稿があれば表示 ?>
                            <li class="article__pagination-next"><a href="<?php echo get_permalink( $next_post->ID ); ?>"></a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>

                <?php get_sidebar('news'); ?>
            </div>
        </section>
    <?php endwhile; ?>

    <?php get_footer(); ?>
</body>

</html>