<?php /* Template Name:WEB予約  */ ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php get_header(); ?>

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
