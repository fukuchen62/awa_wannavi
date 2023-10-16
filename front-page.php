<!-- header.phpを読み込む -->
<?php get_header(); ?>

<main>

    <!-- いったんコンテナーに格納 -->
    <div class="container">

        <!-- トップ -->
        <section class="top top-section">
            <!-- 枠線 -->
            <div class="top__border pc">
                <!-- トップテキスト（スマホ） -->
                <img class="top__text" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/top_font_sp.svg" alt="">
                <!-- 自動スクロール文字列（PC） -->
                <div class="slider slider__text">
                    <img class="top__scroll-text" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/top_font.svg" alt="">
                    <img class="top__scroll-text" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/top_font.svg" alt="">
                </div>
                <!-- 自動スクロール画像グループ -->
                <div class="top__key-visual">
                    <div class="slider__flame slider slider__img">
                        <div><img class="top__scroll-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/top_img01.jpg" alt=""></div>
                        <div><img class="top__scroll-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/top_img02.jpg" alt=""></div>
                        <div><img class="top__scroll-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/top_img03.jpg" alt=""></div>
                        <div><img class="top__scroll-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/top_img04.jpg" alt=""></div>
                        <div><img class="top__scroll-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/top_img05.jpg" alt=""></div>
                        <div><img class="top__scroll-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/top_img06.jpg" alt=""></div>
                        <div><img class="top__scroll-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/top_img07.jpg" alt=""></div>
                    </div>
                    <div class="top__asobu-button"><a href="<?php echo home_url('/enjoy_type/park/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/top_asobu.svg" alt=""></a></div>
                    <div class="top__tomaru-button"><a href="<?php echo home_url('/stay_type/hotel/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/top_tomaru.svg" alt=""></a></div>
                    <div class="top__taberu-button"><a href="<?php echo home_url('/eat_type/cafe/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/top_taberu.svg" alt=""></a></div>
                </div>
                <div class="top__awamaru"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/top_awawan.svg" alt=""></div>
            </div>
            <!-- sp -->
            <div class="top__border--sp">
                <img class="top__border__bg" src="<?php echo get_template_directory_uri(); ?>/assets/img/home/kv_bg.png" alt="">
                <div class="top__key-visual sp">
                    <div class="slider__flame slider slider__img">
                        <div><img class="top__scroll-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/top_img01.jpg" alt=""></div>
                        <div><img class="top__scroll-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/top_img02.jpg" alt=""></div>
                        <div><img class="top__scroll-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/top_img03.jpg" alt=""></div>
                        <div><img class="top__scroll-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/top_img04.jpg" alt=""></div>
                        <div><img class="top__scroll-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/top_img05.jpg" alt=""></div>
                        <div><img class="top__scroll-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/top_img06.jpg" alt=""></div>
                        <div><img class="top__scroll-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/top_img07.jpg" alt=""></div>
                    </div>

                </div>
                <div class="top__border__btn">
                    <div class="top__asobu-button"><a href="<?php echo home_url('/enjoy_type/park/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/top_asobu.svg" alt=""></a></div>
                    <div class="top__tomaru-button"><a href="<?php echo home_url('/stay_type/hotel/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/top_tomaru.svg" alt=""></a></div>
                    <div class="top__taberu-button"><a href="<?php echo home_url('/eat_type/cafe/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/top_taberu.svg" alt=""></a></div>
                </div>
            </div>
        </section>

        <!-- ごあいさつ -->
        <section class="section mt20">
            <!-- 見出し -->
            <div class="top__outline-area">
                <h2 class="top__outline">ごあいさつ</h2>
            </div>
            <!-- ごあいさつ内容 -->
            <div class="top-greeting">
                <!-- あいさつ文 -->
                <p class="top-greeting__text">
                    ごあいさつ文がはいりますごあいさつ文がはいりますごあいさつ文がはいりますごあいさつ文がはいりますごあいさつ文がはいりますごあいさつ文がはいりますごあいさつ文がはいりますごあいさつ文がはいりますごあいさつ文がはいりますごあいさつ文がはいりますごあいさつ文がはいりますごあいさつ文がはいりますごあいさつ文がはいりますごあいさつ文がはいりますごあいさつ文がはいります
                </p>
                <img class="greeting__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/top_ill_dog01.svg" alt="">
            </div>
        </section>

        <!-- ディスクリプション -->
        <section class="top-description section tc mt20">
            <div>
                <div class="top-description__foot-img">
                    <i class="fa-solid fa-paw"></i>
                </div>
                <p class="top-description__title">
                    <i class="fa-solid fa-paw top-description__title-foot"></i>
                    ワンちゃんとおでかけしてみよう！
                    <i class="fa-solid fa-paw top-description__title-foot"></i>
                </p>
            </div>
            <a href="<?php echo home_url('/enjoy_type/park/'); ?>">
                <div class="top-description__block tc">
                    <img class="top-description__logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/top_asobu.svg" alt="">
                    <div class="top-description__text-area">
                        <h2 class="top-description__outline">ワンちゃんと思いっきりのびのび遊んでみたい！</h2>
                        <p class="top-description__text">
                            普段は近所を軽くお散歩するだけだけど
                            たまにはドッグランで走ってみたり、
                            広い公園で気持ちよくお散歩したりしてみませんか？
                        </p>
                    </div>
                    <img class="top-description__dog" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/top_ill_dog02.svg" alt="">
                </div>
            </a>
            <a href="<?php echo home_url('/stay_type/hotel/'); ?>">
                <div class="top-description__block flex-r tc">
                    <img class="top-description__logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/top_tomaru.svg" alt="">
                    <div class="top-description__text-area">
                        <h2 class="top-description__outline">ワンちゃんと一緒に泊ってみたい!</h2>
                        <p class="top-description__text">
                            いつも一緒のかわいいワンちゃん。旅先でも一緒に寝たり、ゆっくり過ごしたいですよね。
                            ワンちゃんと一緒に宿泊できる施設をご紹介します！
                        </p>
                    </div>
                    <img class="top-description__dog" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/top_ill_dog03.svg" alt="">
                </div>
            </a>
            <a href="<?php echo home_url('/eat_type/cafe/'); ?>">
                <div class="top-description__block tc">
                    <img class="top-description__logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/top_taberu.svg" alt="">
                    <div class="top-description__text-area">
                        <h2 class="top-description__outline">ワンちゃんと一緒に楽しくお食事したい！</h2>
                        <p class="top-description__text">
                            愛犬と一緒に楽しい時間が過ごせるドッグカフェや
                            ワンちゃん専用のメニューが用意されているレストラン等を
                            ご紹介。記念日にいかがですか？
                        </p>
                    </div>
                    <img class="top-description__dog" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/top_ill_dog04.svg" alt="">
                </div>
            </a>
            <img class="top-description__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/top_ill_dog03.svg" alt="">
        </section>

        <!-- 新着情報 -->
        <section class="section mt20">
            <!-- 見出し -->
            <div class="top__outline-area">
                <h2 class="top__outline">新着情報</h2>
            </div>
            <a href="<?php echo home_url('/category/news/'); ?>">
                <p class="top-news__archive-link">>>>一覧表を見る</p>
            </a>
            <!-- カード3連 -->
            <div class="top-news__card-area">

                <?php query_posts('posts_per_page=3'); ?>
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : ?>
                        <?php the_post(); ?>
                        <?php get_template_part('template-parts/loop', 'news'); ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </section>
        <!-- map -->
        <section class="top-map tc">
            <!-- 見出し -->
            <div class="top__outline-area">
                <h2 class="top__outline">MAP</h2>
            </div>
            <div>
                <p class="top-map__title">ドッグランや公園など、わんちゃんと遊べる施設をエリアで検索します。</p>
            </div>
            <div>
                <div class="background__map"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/top_map.jpg" alt="map">
                    <a class="tokushima__btn top-map__modal-open__tokushima" href="">徳島市</a>
                    <a class="east__btn top-map__modal-open__east" href="">県東部</a>
                    <a class="west_btn top-map__modal-open__west" href="">県西部</a>
                    <a class="south__btn top-map__modal-open__south" href="">県南部</a>
                </div>
            </div>
            <!-- モーダル本体 -->
            <div class="top-map__modal-container">
                <div class="top-map__modal-body">
                    <!-- 閉じるボタン -->
                    <div class="top-map__modal-close__tokusima">
                        <p>×</p>
                    </div>
                    <!-- モーダル内のコンテンツ -->
                    <iframe class="top-map__map" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d52876.31538723905!2d134.52770198283693!3d34.075417172099314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sja!2sjp!4v1696904245356!5m2!1sja!2sjp" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="top-map__modal-container">
                <div class="top-map__modal-body">
                    <!-- 閉じるボタン -->
                    <div class="top-map__modal-close__east">
                        <p>×</p>
                    </div>
                    <!-- モーダル内のコンテンツ -->
                    <iframe class="top-map__map" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d52876.31538723905!2d134.52770198283693!3d34.075417172099314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sja!2sjp!4v1696904245356!5m2!1sja!2sjp" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="top-map__modal-container">
                <div class="top-map__modal-body">
                    <!-- 閉じるボタン -->
                    <div class="top-map__modal-close__west">
                        <p>×</p>
                    </div>
                    <!-- モーダル内のコンテンツ -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13253.60625967496!2d134.08377772625818!3d33.853540512344495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x355237d85f748f35%3A0x5d98f310ebe684fb!2z5Ymj5bGx!5e0!3m2!1sja!2sjp!4v1697423162462!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="top-map__modal-container">
                <div class="top-map__modal-body">
                    <!-- 閉じるボタン -->
                    <div class="top-map__modal-close__south">
                        <p>×</p>
                    </div>
                    <!-- モーダル内のコンテンツ -->
                    <iframe class="top-map__map" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d52876.31538723905!2d134.52770198283693!3d34.075417172099314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sja!2sjp!4v1696904245356!5m2!1sja!2sjp" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="top-map__dog">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/top_ill_dog05.svg" alt="">
            </div>
        </section>

        <!-- Pickup! -->
        <section class="section tc">
            <!-- 見出し -->
            <div class="top__outline-area">
                <h2 class="top__outline">Pickup!</h2>
            </div>
            <div class="top-pickup__card-area">

                <?php
                $nearby_query = new WP_Query(
                    array(
                        'post_type' => 'special',
                        'orderby' => 'rand',
                        'post_per_page' => '3',
                    )
                );
                ?>

                <?php if ($nearby_query->have_posts()) : ?>
                    <?php while ($nearby_query->have_posts()) : ?>
                        <?php $nearby_query->the_post(); ?>

                        <!-- カード型を読み込む -->
                        <?php get_template_part('template-parts/loop', 'card_special'); ?>

                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>

            </div>

            <img class="top-pickup__dog" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/top_ill_dog06.svg" alt="">

        </section>


        <!-- instagram -->
        <section class="section">
            <!-- 見出し -->
            <div class="top__outline-area">
                <h2 class="top__outline">Instagram</h2>
            </div>
            <div class="top-insta__insta-area">
                <?php echo do_shortcode('[instagram-feed]'); ?>
            </div>
        </section>
    </div>
</main>

<!-- footer.phpを読み込む -->
<?php get_footer(); ?>
