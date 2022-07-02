<?php /* Template Name:お問い合わせ  */ ?>

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
                        <p>CONTACT</p>
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
                            <span itemprop="name">お問い合わせ</span>
                        </a>
                        <meta itemprop="position" content="2" />
                    </li>
                </ol>
            </div>
            <div class="top-reserve-button"><a href="<?php echo esc_url(home_url('/page-reservation')); ?>">WEB予約<br>はこちら</a></div>
        </div>
    </main>

    <section class="submit__top-section">
        <div class="submit__top-text">
            <p>お急ぎの方は、お電話(TEL 03-1234-5678)での連絡がスムーズです。
                <br>以下のフォームからお問い合わせ頂いた場合、ご連絡が2～3日後になる場合がございます。
                <br>また、メールアドレスの入力間違いにより送信できない事が発生しておりますので、メールアドレスは正しくご入力下さい。
                <br><span>※3営業日以内に当院からの返信がない場合には、お電話(TEL 03-1234-5678)にてお問い合わせ下さい。</span></p>
        </div>
    </section>

    <section class="contact__form">
        <div class="contact__form-content">
            <h2 class="title contact-title">お問い合わせ<br class="unshow-contact__title">フォーム</h2>
            <div class="contact__formWrap">
            <?php the_content(); ?>
            </div>
        </div>
    </section>

    <?php get_footer(); ?>

</body>
</html>
