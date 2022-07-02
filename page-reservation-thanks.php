<?php /* Template Name:WEB予約完了  */ ?>

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
                        <h2>WEB予約</h2>
                        <p>RESERVE</p>
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
                        <a itemprop="item" href="<?php echo esc_url(home_url('/page-reservation')); ?>">
                            <span class="breadcrumb-contact" itemprop="name">WEB予約</span>
                        </a>
                        <meta itemprop="position" content="2" />
                    </li>
                    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a itemprop="item" class="current-item">
                            <span itemprop="name">WEB完了</span>
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
            <p>WEBよりご予約いただき誠にありがとうございます。<br>送信いただいた内容を確認して1営業日以内に返信いたします。
                <br><span>※1営業日以内に当院からの返信がない場合には、お電話(TEL 03-1234-5678)にてお問い合わせ下さい。</span>
            </p>
        </div>
    </section>

    <?php get_footer(); ?>
</body>

</html>
