<!-- header.phpを読み込む -->
<?php get_header(); ?>

<main>
    <div class="container">
        <!-- h2帯タイトル -->
        <div class="container">

            <div class="banner__head">
                <h2 class="page__title">おすすめ情報</h2>
            </div>

        </div>

        <!-- パンくずリスト -->
        <?php get_template_part('template-parts/breadcrumb'); ?>

        <!-- 2col全体を格納するコンテナー -->
        <div class="container__col">

            <!-- メインコラムコンテナー -->
            <div class="main__col">

                <!-- 帯になるコンテナーのタイトル -->
                <!-- <div class="container "> -->

                <!-- コンテンツのサブタイトル -->
                <h3 class="sub__ttl yellow"> 記事一覧</h3>
                <!-- </div> -->

                <!-- カード型コンテンツ -->

                <div class="card__2col">

                    <div class="card__wrapper mb40">
                        <div class="card__block">
                            <img class="card__img" src="../assets/img/cat.jpg" alt="">
                            <div class="card__content">
                                <div class="card__flex">
                                    <div class="card__title">徳島●●●公園</div>
                                    <div class="card__category">遊ぶ</div>
                                </div>

                                <div class="card__text">
                                    <div class="card__address">●住所：徳島県徳島市鮎喰町２丁目５６－１１</div>
                                    <div class="card__number">●お問い合わせ：０８０－６３７９－７４３７</div>
                                    <div class="card__url"></div>
                                </div>
                            </div>
                            <div class="card__link">
                                <a href="#">もっと見る</a>
                                <!-- <a href="#">FAQ</a>
                                        <a href="#">PRIVACY</a> -->
                            </div>
                        </div>
                    </div>

                    <div class="card__wrapper mb40">
                        <div class="card__block">
                            <img class="card__img" src="../assets/img/cat.jpg" alt="">
                            <div class="card__content">
                                <div class="card__flex">
                                    <div class="card__title">徳島●●●公園</div>
                                    <div class="card__category">遊ぶ</div>
                                </div>

                                <div class="card__text">
                                    <div class="card__address">●住所：徳島県徳島市鮎喰町２丁目５６－１１</div>
                                    <div class="card__number">●お問い合わせ：０８０－６３７９－７４３７</div>
                                    <div class="card__url"></div>
                                </div>
                            </div>
                            <div class="card__link">
                                <a href="#">もっと見る</a>
                                <!-- <a href="#">FAQ</a>
                                        <a href="#">PRIVACY</a> -->
                            </div>
                        </div>
                    </div>

                    <div class="card__wrapper mb40">
                        <div class="card__block">
                            <img class="card__img" src="../assets/img/cat.jpg" alt="">
                            <div class="card__content">
                                <div class="card__flex">
                                    <div class="card__title">徳島●●●公園</div>
                                    <div class="card__category">遊ぶ</div>
                                </div>

                                <div class="card__text">
                                    <div class="card__address">●住所：徳島県徳島市鮎喰町２丁目５６－１１</div>
                                    <div class="card__number">●お問い合わせ：０８０－６３７９－７４３７</div>
                                    <div class="card__url"></div>
                                </div>
                            </div>
                            <div class="card__link">
                                <a href="#">もっと見る</a>
                                <!-- <a href="#">FAQ</a>
                                        <a href="#">PRIVACY</a> -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- moreボタン -->
                <button id="btn__tokushima" class="more-button">
                    MORE
                </button>
            </div>

            <!-- aside カテゴリー一覧 -->
            <?php get_sidebar("special"); ?>

        </div>
    </div>



</main>
<!-- footer.phpを読み込む -->
<?php get_footer(); ?>
