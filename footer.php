<footer class="footer">
        <div class="footer-top"></div>
        <div class="footer-mid">
            <div class="footer-content">
                <div class="footer-info">
                    <div class="footer-info-items">
                        <div class="footer-left">
                            <div class="footer-logo"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo"></div>
                            <div class="footer-address">
                                <p>〒166-0001</p>
                                <p>東京都杉並区阿佐谷北7-3-1</p>
                            </div>
                            <div class="footer-tel">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/footer-tel.png" alt="tel">
                            </div>
                            <div class="footer-buttons">
                                <div class="footer-button-left"><a href="<?php echo esc_url(home_url('/page-reservation')); ?>">WEB予約</a></div>
                                <div class="footer-button-right"><a href="<?php echo esc_url(home_url('/contact')); ?>">お問い合わせ</a></div>
                            </div>
                            <div class="footer-medical-time"><img src="<?php echo get_template_directory_uri(); ?>/img/medical-time-pc.png" alt=""></div>
                        </div>
                        <div class="footer-right">
                            <div class="footer-map"><iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1619.9134659933595!2d139.63639515817277!3d35.705876295047126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018f277bd8e8ba3%3A0x35285e771d30e2b0!2z5rKz5YyX57eP5ZCI55eF6Zmi!5e0!3m2!1sja!2sjp!4v1635061480324!5m2!1sja!2sjp"
                                    width="600" height="450" style="border:0;" allowfullscreen=""
                                    loading="lazy"></iframe></div>
                        </div>
                    </div>
                </div>
                <ul class="footer-nav">
                    <li class="footer-nav-item"><a href="">TOP</a></li>
                    <li class="footer-nav-item">当院について
                        <ul class="footer-subnav">
                            <li><a href="<?php echo esc_url(home_url('/page-about/#policy')); ?>">ポリシーと特徴</a></li>
                            <li><a href="<?php echo esc_url(home_url('/page-about/#clinic')); ?>">当院の様子</a></li>
                        </ul>
                    </li>
                    <li class="footer-nav-item">スタッフ紹介
                        <ul class="footer-subnav">
                            <li><a href="<?php echo esc_url(home_url('/staffs/#greeting')); ?>">院長のあいさつ</a></li>
                            <li><a href="<?php echo esc_url(home_url('/staffs/#staff')); ?>">スタッフ</a></li>
                            <li><a href="<?php echo esc_url(home_url('/blog')); ?>">スタッフブログ</a></li>
                        </ul>
                    </li>
                    <li class="footer-nav-item">診療内容
                        <div class="footer-subnav footer-medical">
                            <ul class="subnav-left">
                                <li><a href="<?php echo esc_url(home_url('/page-medical/#med-1')); ?>">一般歯科</a></li>
                                <li><a href="<?php echo esc_url(home_url('/page-medical/#med-2')); ?>">小児歯科</a></li>
                                <li><a href="<?php echo esc_url(home_url('/page-medical/#med-3')); ?>">予防歯科</a></li>
                                <li><a href="<?php echo esc_url(home_url('/page-medical/#med-4')); ?>">入れ歯</a></li>
                            </ul>
                            <ul class="subnav-right">
                                <li><a href="<?php echo esc_url(home_url('/page-medical/#med-5')); ?>">矯正歯科</a></li>
                                <li><a href="<?php echo esc_url(home_url('/page-medical/#med-6')); ?>">ホワイトニング</a></li>
                                <li><a href="<?php echo esc_url(home_url('/page-medical/#med-7')); ?>">口腔外科</a></li>
                                <li><a href="<?php echo esc_url(home_url('/page-medical/#med-8')); ?>">レーザー治療</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="footer-nav-item">お問い合わせ
                        <ul class="footer-subnav">
                            <li><a href="<?php echo esc_url(home_url('/contact')); ?>">お問い合わせフォーム</a></li>
                            <li><a href="<?php echo esc_url(home_url('/page-reservation')); ?>">WEB予約</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer-under">
            <div class="footer-copyright">©︎2020-2021 <?php bloginfo('name'); ?></div>
            <div class="footer-reserve-button">
                <div class="reserve-content">
                    <div class="bottom-left"><img src="<?php echo get_template_directory_uri(); ?>/img/bottom-tel.png" alt=""></div>
                    <div class="bottom-right">
                        <a href="<?php echo esc_url(home_url('/page-reservation')); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-pc.png" alt="">
                            <p class="footer-buttom-text"><span>WEB予約</span><br>はこちら</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="top-button"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/totop.png" alt="トップボタン"></a></div>

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>



    <?php wp_footer(); ?>
