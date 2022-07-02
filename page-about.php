<?php /* Template Name:当院について  */ ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php get_header(); ?>

    <?php get_template_part('drawer'); ?>

    <main class="mainsec">
        <div class="top-wrap">
            <div class="inner">
                <div class="section-top-img about-img">
                    <div class="section-top-title">
                        <h2><?php single_post_title(); ?></h2>
                        <p>ABOUT OUR CLINIC</p>
                    </div>
                </div>
                <div class="breadcrumbs">
                    <ol class="breadcrumb" itemscope itemtype="https://schema.org/breadcrumbList">
                        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                            <a itemprop="item" href="<?php echo esc_url(home_url('/')); ?>">
                                <span class="breadcrumb-home" itemprop="name">ホーム</span>
                            </a>
                            <meta itemprop="position" content="1" />
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                            <a itemprop="item" class="current-item">
                                <span itemprop="name">当院について</span>
                            </a>
                            <meta itemprop="position" content="2" />
                        </li>
                    </ol>
                </div>
                <div class="top-reserve-button"><a href="<?php echo esc_url(home_url('/page-reservation')); ?>">WEB予約<br>はこちら</a></div>
            </div>
        </div>
    </main>

    <section id="policy">
        <h2 class="title policy-title">ポリシーと特徴</h2>
        <div class="policy">
            <div class="policy-items">
                <div class="policy-item-img">
                    <img src="<?php echo get_theme_file_uri('img/about-page/feature_1.png'); ?>" alt="コンセプト">
                </div>
                <div class="policy-item-body">
                    <p class="policy-body-top">POLICY</p>
                    <h3 class="policy-item-title">コミュニケーションから始まる最適な医療提供</h3>
                    <p class="policy-item-text">当院ではまず患者様から詳しくお話を伺います。
                        <br>難しい言葉は使わず、実際に感じている小さな違和感からあらゆる可能性を考え、最適な治療方法をご提案いたします。
                    </p>
                    <p class="policy-text-under">「どこよりも本音で話せる歯医者さん」を目指し、スタッフ一同、「人間力の向上」にも勤めております。</p>
                </div>
            </div>
            <div class="policy-items reverse">
                <div class="policy-item-img">
                    <img class="policy-img-under" src="<?php echo get_theme_file_uri('img/about-page/feature_2.png'); ?>" alt="コンセプト">
                </div>
                <div class="policy-item-body policy-under">
                    <h2 class="policy-body-top">FEATURE</h2>
                    <h3 class="policy-item-title">「医療技術の追求」と<br>「通いやすさ」</h3>
                    <p class="policy-item-text">
                        歯の治療において、小さな違和感は大きなストレスにつながります。私たちは常に快適な歯科医療技術の研究を行っております。
                        <br>また、「通いやすさ」も医院選びの重要なポイントと考え、2019年のリニューアルを期に更に駅の近くへ場所を移しました。
                    </p>
                    <p class="policy-text-under">朝から夜までお仕事をされている方のために診療時間を見直し、平日でもご利用いただけるようにいたしました。</p>
                </div>
            </div>
        </div>
    </section>

    <section id="clinic">
        <div class="about-section">
            <h2 class="title about-title">院内の様子</h2>
            <div class="about-items">
                <div class="about-item">
                    <div class="about-img"><img src="<?php echo get_theme_file_uri('img/about-page/about_1.png'); ?>" alt=""></div>
                </div>
                <div class="about-item">
                    <div class="about-img"><img src="<?php echo get_theme_file_uri('img/about-page/about_2.png'); ?>" alt=""></div>
                </div>
                <div class="about-item">
                    <div class="about-img"><img src="<?php echo get_theme_file_uri('img/about-page/about_3.png'); ?>" alt=""></div>
                </div>
                <div class="about-item">
                    <div class="about-img"><img src="<?php echo get_theme_file_uri('img/about-page/about_4.png'); ?>" alt=""></div>
                </div>
                <div class="about-item">
                    <div class="about-img"><img src="<?php echo get_theme_file_uri('img/about-page/about_5.png'); ?>" alt=""></div>
                </div>
                <div class="about-item">
                    <div class="about-img"><img src="<?php echo get_theme_file_uri('img/about-page/about_6.png'); ?>" alt=""></div>
                </div>
            </div>
        </div>
    </section>


    <?php get_footer(); ?>
</body>

</html>
