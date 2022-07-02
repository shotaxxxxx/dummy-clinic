<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php get_header(); ?>

    <?php get_template_part('drawer'); ?>


    <main class="main">
        <div class="top-inner">
            <div class="top">
                <!-- Slider main container -->
                <div class="swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="top-img swiper-slide-1">
                                <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/top-text.png" alt="">
                                <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/top-text-sp.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="top-img swiper-slide-2">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/top-text.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="top-img swiper-slide-3">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/top-text.png" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
                <div class="top-info">
                    <div class="top-news">
                        <div class="top-news-header">
                            <p class="top-news-title">お知らせ</p>
                            <p class="top-news-past"><a href="<?php echo esc_url(home_url('/news')); ?>">過去のお知らせはこちら</a></p>
                        </div>
                        <?php
                        $args = array(
                            'posts_per_page' => 1,
                            'orderby' => 'date',
                            'order' => 'DESC',
                        );
                        $new_posts = get_posts($args);
                        foreach ($new_posts as $post) : setup_postdata($post);
                        ?>
                            <a href="<?php the_permalink(); ?>" class="top-news-item">
                                <p class="top-news-date"><?php the_time('Y.m.d'); ?></p>
                                <p class="top-news-text"><?php the_title(); ?></p>
                            </a>
                        <?php endforeach;
                        wp_reset_postdata(); ?>
                    </div>
                    <div class="top-medical-time"><img src="<?php echo get_template_directory_uri(); ?>/img/medical-time-pc.png" alt=""></div>
                </div>
            </div>
            <div class="top-reserve-button"><a href="<?php echo esc_url(home_url('/page-reservation')); ?>">WEB予約<br>はこちら</a></div>
        </div>
    </main>

    <section class="concept">
        <div class="concept-items">
            <div class="concept-item-img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/concept-img1.png" alt="コンセプト">
            </div>
            <div class="concept-item-body">
                <h2 class="concept-title">CONCEPT</h2>
                <h3 class="concept-item-title">健康的で素敵な笑顔あふれる<br>街づくりを目指して</h3>
                <p class="concept-item-text">
                    私たちは最新の医療技術を追求すると共に、患者様とのコミュニケーションを大事することで、気軽に通いやすく些細なことでも相談できる「街の掛かり付け医」を目指しております。<br>
                    お子様からご高齢の方まで、快適な空間で治療が受けられる場を作り、地域医療に貢献しきたいと考えております。</p>
                <div class="concept-item-button"><a href="<?php echo esc_url(home_url('/page-about')); ?>">当院について</a></div>
            </div>
        </div>
    </section>

    <section class="recommend">
        <h2 class="recommend-title title">当院の3つのおすすめ</h2>
        <div class="recommend-items">
            <div class="recommend-item1">
                <div class="recommend-item-header">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/recommend-1.png" alt="">
                </div>
                <div class="recommend-item-body">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/recommend-img-01.png" alt="">
                    <p>歯の治療において、小さな違和感は大きなストレスにつながります。<br>私たちは常に快適な歯科医療技術の研究を行っております。</p>
                </div>
            </div>
            <div class="recommend-item2">
                <div class="recommend-item-header recommend-header2">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/recommend-2.png" alt="">
                </div>
                <div class="recommend-item-body">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/recommend-img-02.png" alt="">
                    <p>「通いやすさ」も医院選びの重要なポイントと考え、2019年のリニューアルを期に更に駅の近くへ場所を移しました。</p>
                </div>
            </div>
            <div class="recommend-item3">
                <div class="recommend-item-header recommend-header3">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/recommend-3.png" alt="">
                </div>
                <div class="recommend-item-body">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/recommend-img-03.png" alt="">
                    <p>朝から夜までお仕事をされている方のために、診療時間を見直しました。<br>
                        <span>※駆け込みでも対応可能ですが、事前にご連絡いただけるとスムーズです。</span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="medical">
        <div class="med__bg_top"></div>
        <div class="medical-content-wrap">
            <div class="medical-content">
                <h2 class="medical-title title">診療案内</h2>
                <div class="medical-items">
                    <div class="medical-item">
                        <a class="medical-item-left" href="<?php echo esc_url(home_url('/page-medical/#general')); ?>">
                            <div class="medical-item-bf">
                                <div class="medical-item-content">
                                    <div class="medical-item-title">一般診療</div>
                                    <p class="medical-item-text">虫歯・入れ歯・小児歯科</p>
                                </div>
                            </div>
                        </a>
                        <a class="medical-item-right" href="<?php echo esc_url(home_url('/page-medical/#special')); ?>">
                            <div class="medical-item-bf">
                                <div class="medical-item-content">
                                    <div class="medical-item-title">特殊診療</div>
                                    <p class="medical-item-text">インプラント・ホワイトニング<br>
                                        予防歯科・口腔外科・審美歯科</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="medical-under">
                        <p class="medical-under-text">当院では、患者さんの歯の健康状態や治療方針を丁寧にカウンセリングし、十分ご理解していただいた上で治療いたします。<br>
                            痛みに配慮することと、可能な限り削らない・抜かない治療に努めております。<br>
                            <span>※特殊性の高い矯正治療などは保険の適応外となります。 これらの治療を行う際は事前に詳細と費用のご説明いたします。</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="med__bottom"></div>
    </section>


    <section class="blog">
        <div class="blog-content">
            <h2 class="blog-title title">スタッフブログ</h2>
            <div class="blog-cards">
                <?php
                $args = array(
                    'post_type' => 'blog', //カスタム投稿名にする
                    'posts_per_page' => 6,
                    'orderby' => 'date',
                    'order' => 'DESC',
                );
                $new_posts = get_posts($args);
                foreach ($new_posts as $post) : setup_postdata($post);
                ?>
                    <a class="blog-card" href="<?php the_permalink(); ?>">
                        <?php
                        if (has_post_thumbnail()) :
                            $id = get_post_thumbnail_id();
                            $img = wp_get_attachment_image_src($id, 'large');
                        else :
                            $img = array(get_template_directory_uri() . '/img/blog-img.png');
                        endif;
                        ?>

                        <?php
                        $post_time = get_the_time('U');
                        $days = 3; //New!を表示させる日数
                        $last = time() - ($days * 24 * 60 * 60);
                        if ($post_time > $last) {
                            echo '<span>NEW</span>';
                        }
                        ?>
                        <div class="blog-card-header">
                            <div class="blog-card-img" style="background-image: url('<?php echo $img[0]; ?>');"></div>
                        </div>
                        <div class="blog-card-body">
                            <p class="blog-card-category">
                                <?php echo esc_html(get_the_terms(get_the_ID(), 'blog_category')[0]->name); ?>
                            </p>
                            <p class="blog-card-title"><?php the_title(); ?></p>
                            <time class="blog-card-time" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
                        </div>
                    </a>
                <?php endforeach;
                wp_reset_postdata(); ?>
            </div>
            <div class="blog-button"><a href="<?php echo esc_url(home_url('/blog')); ?>">スタッフブログ一覧はこちら</a></div>
        </div>
    </section>

    <?php get_footer(); ?>
</body>

</html>
