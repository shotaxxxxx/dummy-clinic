<?php /* Template Name:スタッフブログ  */ ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php get_header(); ?>

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
                    $args = array(
                        'post_type' => 'blog', //カスタム投稿名にする
                        'posts_per_page' => 10,
                        'orderby' => 'date',
                        'order' => 'DESC',
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
                            <?php
                            $post_time = get_the_time('U');
                            $days = 3; //New!を表示させる日数
                            $last = time() - ($days * 24 * 60 * 60);
                            if ($post_time > $last) {
                                echo '<span>NEW</span>';
                            }
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
