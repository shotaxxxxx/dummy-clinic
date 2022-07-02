<?php /* Template Name:スタッフ紹介  */ ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php get_header(); ?>

    <?php get_template_part('drawer'); ?>


    <main class="mainsec stf__mainsec">
        <div class="top-wrap">
            <div class="inner">
                <div class="section-top-img staff-img">
                    <div class="section-top-title">
                        <h2>スタッフ紹介</h2>
                        <p>STAFF</p>
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
                            <span itemprop="name">スタッフ紹介</span>
                        </a>
                        <meta itemprop="position" content="2" />
                    </li>
                </ol>
            </div>
            <div class="top-reserve-button"><a href="<?php echo esc_url(home_url('/page-reservation')); ?>">WEB予約<br>はこちら</a></div>
        </div>
    </main>

    <section class="stf__info-sec" id="greeting">
        <div class="content-inner">
            <h2 class="title stf-title">院長のあいさつ</h2>
            <div class="stf__top-con">
                <div class="stf__con-left">
                    <div class="stf__left-header">
                        <h3>気軽に相談できる<br>街の歯医者さんでありたい。</h3>
                        <div class="stf__left-text">
                            <p>当院は治療はもちろん、予防歯科にも力を入れておりますので、お口に関する相談だけでもお越しいただきたいと考えております。</p>
                            <p>「患部を直すこと」より「未然に防ぐこと」が最も良い歯科医療と言えますので、些細なことでも気軽に話せる街の歯医者さんとして、明るい街づくりに貢献していきたいと考えております。
                            </p>
                        </div>
                        <div class="stf__left-sign">
                            <p>みなみ歯科クリニック</p>
                            <p>院長&emsp;南&ensp;俊雄</p>
                        </div>
                    </div>
                    <div class="stf__con-imgWrap show-sp">
                        <img src="<?php echo get_theme_file_uri('img/staff-page/staff01.png'); ?>" alt="人画像">
                    </div>
                    <div class="stf__left-career">
                        <div class="stf__car-header">
                            <p>経歴</p>
                        </div>
                        <div class="stf_car-body">
                            <ul class="stf__car-timeline">
                                <li>
                                    <p>2004年</p>
                                    <p>東京医科歯科大学歯学部 卒業</p>
                                </li>
                                <li>
                                    <p>2008年</p>
                                    <div class="stf__timeline-con">
                                        <p>東京歯科大学歯学研究科大学院修了</p>
                                        <p>博士(歯学)取得</p>
                                    </div>
                                </li>
                                <li>
                                    <p>2012年</p>
                                    <p>みなみ歯科クリニック 開院</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="stf__left-bottom">
                        <div class="stf__left-bottom-header">
                            <p>資格</p>
                        </div>
                        <ul class="stf__left-bottom-body">
                            <li>
                                <p>歯科医師臨床研修指導歯科医</p>
                            </li>
                            <li>
                                <p>博士(歯学)</p>
                            </li>
                            <li>
                                <p>衛生検査技師</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="stf__con-imgWrap">
                    <img src="<?php echo get_theme_file_uri('img/staff-page/staff01.png'); ?>" alt="人画像">
                </div>
            </div>
        </div>
    </section>

    <section class="stf__gallery">
        <!-- Slider main container -->
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper" id="swiperWrapper">
                <!-- Slides -->
                <div class="swiper-slide"><img src="<?php echo get_theme_file_uri('img/staff-page/staff-slider1.png'); ?>" alt=""></div>
                <div class="swiper-slide"><img src="<?php echo get_theme_file_uri('img/staff-page/staff-slider2.png'); ?>" alt=""></div>
                <div class="swiper-slide"><img src="<?php echo get_theme_file_uri('img/staff-page/staff-slider3.png'); ?>" alt=""></div>
                <div class="swiper-slide"><img src="<?php echo get_theme_file_uri('img/staff-page/staff-slider4.png'); ?>" alt=""></div>
                <div class="swiper-slide"><img src="<?php echo get_theme_file_uri('img/staff-page/staff-slider5.png'); ?>" alt=""></div>
            </div>
        </div>
    </section>

    <section class="stf__card-sec" id="staff">
        <div class="content-inner">
            <h2 class="title stf__card-title">スタッフ紹介</h2>
            <div class="stf__card-subtitle">
                <p>歯科衛生士</p>
            </div>
            <div class="stf__cards">
                <?php
                $args = array(
                    'post_type' => 'staffs', //カスタム投稿名にする
                    'taxonomy' => 'staffs_category',
                    'field' => 'slug',
                    'term' => 'dental-hygienist',
                    'orderby' => 'date',
                    'order' => 'DESC',
                );
                $new_posts = get_posts($args);
                foreach ($new_posts as $post) : setup_postdata($post);
                ?>
                    <div class="stf__card">
                        <?php if (has_post_thumbnail()) :
                            $id = get_post_thumbnail_id();
                            $img = wp_get_attachment_image_src($id, 'large');
                        else :
                            $img = array(get_template_directory_uri() . '/img/noimg.png');
                        endif;
                        ?>
                        <div class="stf__card-img" style="background-image: url('<?php echo $img[0]; ?>'); "></div>
                        <div class="stf__card-body">
                            <p><?php echo esc_html(get_the_terms(get_the_ID(), 'staffs_category')[0]->name); ?><span><?php the_title(); ?></span></p>
                        </div>
                        <dl class="stf__card-info">
                            <?php if (get_field('birthplace')) : ?>
                                <dt>出身地</dt>
                                <dd><?php the_field('birthplace'); ?></dd>
                            <?php endif; ?>
                            <?php if (get_field('hobby')) : ?>
                                <dt>趣味</dt>
                                <dd><?php the_field('hobby'); ?></dd>
                            <?php endif; ?>
                            <?php if (get_field('food')) : ?>
                                <dt>好きな食べ物</dt>
                                <dd><?php the_field('food'); ?></dd>
                            <?php endif; ?>
                        </dl>
                    </div>
                <?php endforeach;
                wp_reset_postdata(); ?>
            </div>
            <div class="stf__card-subtitle">
                <p>歯科助手</p>
            </div>
            <div class="stf__cards">
                <?php
                $args = array(
                    'post_type' => 'staffs', //カスタム投稿名にする
                    'taxonomy' => 'staffs_category',
                    'field' => 'slug',
                    'term' => 'dental-assistant',
                    'orderby' => 'date',
                    'order' => 'DESC',
                );
                $new_posts = get_posts($args);
                foreach ($new_posts as $post) : setup_postdata($post);
                ?>
                    <div class="stf__card">
                        <?php if (has_post_thumbnail()) :
                            $id = get_post_thumbnail_id();
                            $img = wp_get_attachment_image_src($id, 'large');
                        else :
                            $img = array(get_template_directory_uri() . '/img/noimg.png');
                        endif;
                        ?>
                        <div class="stf__card-img" style="background-image: url('<?php echo $img[0]; ?>'); "></div>
                        <div class="stf__card-body">
                            <p><?php echo esc_html(get_the_terms(get_the_ID(), 'staffs_category')[0]->name); ?><span><?php the_title(); ?></span></p>
                        </div>
                        <dl class="stf__card-info">
                            <?php if (get_field('birthplace')) : ?>
                                <dt>出身地</dt>
                                <dd><?php the_field('birthplace'); ?></dd>
                            <?php endif; ?>
                            <?php if (get_field('hobby')) : ?>
                                <dt>趣味</dt>
                                <dd><?php the_field('hobby'); ?></dd>
                            <?php endif; ?>
                            <?php if (get_field('food')) : ?>
                                <dt>好きな食べ物</dt>
                                <dd><?php the_field('food'); ?></dd>
                            <?php endif; ?>
                        </dl>
                    </div>
            </div>
        <?php endforeach;
                wp_reset_postdata(); ?>
        </div>
    </section>

    <?php get_footer(); ?>
</body>

</html>
