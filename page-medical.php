<?php /* Template Name:診療案内  */ ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php get_header(); ?>
</head>


<body>
    <header class="header">
        <div class="header-inner">
            <h1 class="header-logo"><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_theme_file_uri('img/logo.png'); ?>" alt="ヘッダーロゴ"></a></h1>
            <div class="header-right">
                <div class="header-nav">
                    <ul class="header-nav-items">
                        <li class="header-nav-item"><a href="<?php echo esc_url(home_url('/')); ?>" class="nav-home nav-item-link">ホーム</a></li>
                        <li class="header-nav-item"><a href="<?php echo esc_url(home_url('/page-about')); ?>" class="nav-about nav-item-link">当院について</a></li>
                        <li class="header-nav-item"><a href="<?php echo esc_url(home_url('/page-medical')); ?>" class="nav-medical nav-item-link nav-current" id="nav-medical-current">診察案内</a></li>
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

    <main class="mainsec med__mainsec">
        <div class="top-wrap med__top-wrap">
            <div class="inner">
                <div class="section-top-img medical-img">
                    <div class="section-top-title">
                        <h2><?php single_post_title(); ?></h2>
                        <p>MEDICAL</p>
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
                        <a itemprop="item" class="current-item">
                            <span itemprop="name">診療案内</span>
                        </a>
                        <meta itemprop="position" content="2" />
                    </li>
                </ol>
            </div>
            <div class="top-reserve-button"><a href="<?php echo esc_url(home_url('/page-reservation')); ?>">WEB予約<br>はこちら</a></div>
        </div>
    </main>

    <section class="medsec">
        <div class="med__wrap">
            <h2 class="med__wrap_over-ttl">一般診療</h2>
            <div class="med__btns">
                <div class="med__btn"><a href="#med-217">一般歯科</a></div>
                <div class="med__btn"><a href="#med-220">小児歯科</a></div>
                <div class="med__btn"><a href="#med-227">予防歯科</a></div>
            </div>
        </div>
        <div class="med__wrap med__wrap-under">
            <h2 class="med__wrap_under-ttl">特殊診療</h2>
            <div class="med__btns">
                <div class="med__btn"><a href="#med-230">入れ歯</a></div>
                <div class="med__btn"><a href="#med-231">矯正歯科</a></div>
                <div class="med__btn"><a href="#med-232">ホワイトニング</a></div>
                <div class="med__btn"><a href="#med-233">口腔外科</a></div>
                <div class="med__btn"><a href="#med-234">レーザー治療</a></div>
            </div>
        </div>
    </section>

    <section class="med__primary" id="general">
        <div class="med__bg_top"></div>
        <div class="med__content_wrap">
            <div class="med__content">
                <h2 class="title">一般診療</h2>
                <div class="med__items">
                    <?php
                    $args = array(
                        'post_type' => 'plan', //カスタム投稿名にする
                        'taxonomy' => 'medical_category',
                        'field' => 'slug',
                        'term' => 'general_medical',
                        'orderby' => 'date',
                        'order' => 'ASC',
                    );
                    $new_posts = get_posts($args);
                    foreach ($new_posts as $post) : setup_postdata($post);
                    ?>            
                    <span id="med-<?php the_ID(); ?>" class="link-position"></span>
                        <div class="med__item">
                            <div class="med__item_over">
                                <h3><?Php the_title(); ?></h3>
                                <?php if (get_field('problem')) : ?>
                                <p><?php the_field('problem'); ?></p>
                                 <?php endif; ?>
                            </div>
                            <div class="med__item_under">
                                <div class="med__item_text">
                                <?php if (get_field('overview')) : ?>
                                    <p><?php the_field('overview'); ?></p>
                                    <?php endif; ?>   
                                </div>
                                <div class="med__item_img-wrap">
                                <?php if (has_post_thumbnail()) :
                                $id = get_post_thumbnail_id();
                                $img = wp_get_attachment_image_src($id, 'large');
                            else :
                                $img = array(get_template_directory_uri() . '/img/archive-page/blog.png');
                            endif;
                            ?>
                                    <div class="med__item_img">
                                        <img src="<?php echo esc_url($img[0]); ?>" alt="<?php get_the_title(); ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;
                    wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
        <div class="med__bottom"></div>
    </section>

    <section class="med__primary" id="special">
        <div class="med__bg_top"></div>
        <div class="med__content_wrap content-under">
            <div class="med__content">
                <h2 class="title">特殊診療</h2>
                <div class="med__items">
                <?php
                    $args = array(
                        'post_type' => 'plan', //カスタム投稿名にする
                        'taxonomy' => 'medical_category',
                        'field' => 'slug',
                        'term' => 'special_medical',
                        'orderby' => 'date',
                        'order' => 'ASC',
                    );
                    $new_posts = get_posts($args);
                    foreach ($new_posts as $post) : setup_postdata($post);
                    ?>
                    <span id="med-<?php the_ID(); ?>" class="link-position"></span>
                    <div class="med__item item-bottom" id="med-<?php the_ID(); ?>">
                        <div class="med__item_over">
                            <h3><?php the_title(); ?></h3>
                            <?php if (get_field('problem')) : ?>
                                <p><?php the_field('problem'); ?></p>
                                 <?php endif; ?>
                        </div>
                        <div class="med__item_under">
                            <div class="med__item_text">
                            <?php if (get_field('overview')) : ?>
                                    <p><?php the_field('overview'); ?></p>
                                    <?php endif; ?>   
                            </div>
                            <div class="med__item_img-wrap">
                            <?php if (has_post_thumbnail()) :
                                $id = get_post_thumbnail_id();
                                $img = wp_get_attachment_image_src($id, 'large');
                            else :
                                $img = array(get_template_directory_uri() . '/img/archive-page/blog.png');
                            endif;
                            ?>
                                <div class="med__item_img">
                                <img src="<?php echo esc_url($img[0]); ?>" alt="<?php get_the_title(); ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;
                    wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
        <div class="med__bottom"></div>
    </section>

    <?php get_footer(); ?>
</body>

</html>