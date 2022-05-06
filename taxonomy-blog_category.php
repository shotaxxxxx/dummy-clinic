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
                        <h2>スタッフブログ</h2>
                        <p>STAFF BLOG</p>
                    </div>
                </div>
                <ol class="breadcrumb" itemscope itemtype="//schema.org/breadcrumbList">
                    <li itemprop="itemListElement" itemscope itemtype="//schema.org/ListItem">
                        <a itemprop="item" href="<?php echo esc_url(home_url('/')); ?>">
                            <span class="breadcrumb-home" itemprop="name">ホーム</span>
                        </a>
                        <meta itemprop="position" content="1" />
                    </li>
                    <li itemprop="itemListElement" itemscope itemtype="//schema.org/ListItem">
                        <a itemprop="item" class="current-item">
                            <span itemprop="name">スタッフブログ</span>
                        </a>
                        <meta itemprop="position" content="2" />
                    </li>
                </ol>
            </div>
            <div class="top-reserve-button"><a href="">WEB予約<br>はこちら</a></div>
        </div>
    </main>


    <section class="archive">
        <div class="archive__content">
            <div class="archive__cardsWrap">
                <div class="archive__cards">
                <?php
                $term = wp_get_object_terms($post->ID, 'blog_category');
                  $args = array(
                        'post_type' => 'blog', //カスタム投稿名にする
                        'taxonomy' => 'blog_category',
                        'field' => 'slug',
                        'term' => $term[0]->slug,
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'posts_per_page' => 10,
                    );
                    $new_posts = get_posts($args);
                    foreach ($new_posts as $post) : setup_postdata($post);
                    ?>
                            <a class="archive__card new__archive" href="<?php the_permalink(); ?>">
                                <?php if (has_post_thumbnail()) :
                                    $id = get_post_thumbnail_id();
                                    $img = wp_get_attachment_image_src($id, 'large');
                                else :
                                    $img = array(get_template_directory_uri() . '/img/archive-page/blog.png');
                                endif;
                                ?>
                                <div class="archive__card-header">
                                    <div class="archive__card-img" style="background-image: url('<?php echo $img[0]; ?>');">
                                    </div>
                                </div>
                                <div class="archive__card-body">
                                    <div class="archive__category">
                                        <?php echo esc_html(get_the_terms(get_the_ID(), 'blog_category')[0]->name); ?>
                                    </div>
                                    <h2 class="archive__card-title"><?php the_title(); ?></h2>
                                    <time class="archive__card-time" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
                                </div>
                            </a>
                            <?php endforeach;
                    wp_reset_postdata(); ?>
                </div>

                <?php the_posts_pagination(
                    array(
                        'mid_size' => 2, //現在ページの左右に表示するページ番号の数
                        'prev_next' => true, //「前へ」「次へ」のリンクを表示する場合はtrue
                        'prev_text' => __('前へ'), //「前へ」リンクのテキスト
                        'next_text' => __('次へ'), //「次へ」リンクのテキスト
                        'type'      => 'plain',
                    )
                ); ?>

            </div>

            <?php get_sidebar('blog'); ?>
        </div>
    </section>

    <?php get_footer(); ?>
</body>

</html>