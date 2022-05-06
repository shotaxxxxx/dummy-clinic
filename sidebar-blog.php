<div class="sidebar">
    <div class="sidebar__about-section">
        <div class="sidebar__about-header">
            <h2>クリニックの紹介</h2>
        </div>
        <div class="sidebar__about-content">
            <div class="sidebar__about-img"><img src="<?php echo get_template_directory_uri(); ?>/img/archive-page/sidebar-img_1.png" alt=""></div>
            <div class="sidebar__about-body">
                <h3>みなみ歯科クリニック</h3>
                <p>お子様からご高齢の方まで、快適な空間で治療が受けられる場を作り、地域医療に貢献しきたいと考えております。</p>
                <div class="sidebar__about-link"><a href="<?php echo esc_url(home_url('/page-about')); ?>">当院について</a></div>
            </div>
        </div>
    </div>
    <div class="sidebar__archive-section">
        <div class="sidebar__archive-header">
            <h2>新着記事</h2>
        </div>
        <div class="sidebar__archives">
            <?php
            $args = array(
                'post_type' => 'blog', //カスタム投稿名にする
                'posts_per_page' => 5,
                'orderby' => 'date',
                'order' => 'DESC',
            );
            $new_posts = get_posts($args);
            foreach ($new_posts as $post) : setup_postdata($post);
            ?>

                <a class="sidebar__archive" href="<?php the_permalink(); ?>">
                    <?php if (has_post_thumbnail()) :
                        $id = get_post_thumbnail_id();
                        $img = wp_get_attachment_image_src($id, 'large');
                    else :
                        $img = array(get_template_directory_uri() . '/img/archive-page/side-blog.png');
                    endif;
                    ?>
                    <div class="sidebar__archive-content">
                        <div class="archive__card-img sidebar__archive-img" style="background-image: url('<?php echo $img[0]; ?>');"></div>
                    </div>
                    <div class="sidebar__archive-body">
                        <div class="archive__category sidebar__archive-category">
                            <?php echo esc_html(get_the_terms(get_the_ID(), 'blog_category')[0]->name); ?>
                        </div>
                        <p class="sidebar__archive-title"><?php the_title(); ?></p>
                        <time class="archive__card-time sidebar__archive-time" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
                    </div>
                </a>

            <?php endforeach;
            wp_reset_postdata(); ?>
        </div>

    </div>
    <div class="sidebar__category">
        <div class="sidebar__category-header">
            <h2>カテゴリー</h2>
        </div>
        <ul class="sidebar__category-content">
        <?php 
        $terms = get_terms('blog_category');
        foreach ($terms as $term) {
            echo '<li><a href="' . get_term_link($term) . '">' . $term->name . '</a></li>';  
        }
        ?>
        </ul>
    </div>
</div>