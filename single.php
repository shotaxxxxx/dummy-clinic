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
