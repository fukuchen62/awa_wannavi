<!-- header.phpを読み込む -->
<?php get_header(); ?>

<main class="container">
    <!-- パンくずリスト -->
    <?php get_template_part("template-parts/breadcrumb"); ?>

    <div class="container pd20">
        <h2 class="mypage_title">マイページ</h2>
    </div>

    <div class="explanation explanation2">
        <p>1. 本マイページはこのサイトにてご紹介した『遊ぶ』『泊る』『食べる』の施設等を ブックマークし参照することができます。</p>
        <p> 2. 訪れた場所をgoogleマップで参照できます。</p>
        <p>3.ブックマークにはCookieを使用しています。</p>
        <p>4.Cookieの削除に伴いブックマークした情報も削除されます。</p>
    </div>

    <!-- 一つ目のカテゴリのカード群 -->
    <!-- コンテンツのサブタイトル -->
    <h2 class="sub__title2 mb20 bgGL"><i class="fa-solid fa-paw"></i> お気に入りした<br>
        遊ぶの施設</h2>
    <div class="next__info tr2 "><a href="">>>〇〇件</a></div>
    <!-- カード型コンテンツまとめ -->
    <div class="card__contents mw12">

        <!-- カード型 -->
        <div class="card tokushima">
            <a href="#">
                <!-- 背面 -->
                <div class="card__back"></div>
                <!-- 前面 -->
                <div class="card__front">
                    <!-- カード内情報 -->
                    <img src="../assets/img/cat.jpg" alt="">
                    <div class="card__tag">
                        <p>遊ぶ</p>
                    </div>
                    <h2 class="card__outline">徳島○○○公園</h2>
                    <div class="card__line"></div>
                    <div class="card__textarea">
                        <dl>
                            <dd>●住所：</dd>
                            <dd>徳島市○○○○○-○○</dd>
                        </dl>
                        <dl>
                            <dd>●お問い合わせ：</dd>
                            <dd>○○-○○-○○○</dd>
                        </dl>
                        <dl class="card__url">
                            <dd>●URL：</dd>
                            <dd><a href="">aaaaaaaaa.com</a></dd>
                        </dl>
                    </div>
                </div>
            </a>
        </div>

        <!-- カード型 -->
        <div class="card tokushima">
            <a href="#">
                <!-- 背面 -->
                <div class="card__back"></div>
                <!-- 前面 -->
                <div class="card__front">
                    <!-- カード内情報 -->
                    <img src="../assets/img/cat.jpg" alt="">
                    <div class="card__tag">
                        <p>遊ぶ</p>
                    </div>
                    <h2 class="card__outline">徳島○○○公園</h2>
                    <div class="card__line"></div>
                    <div class="card__textarea">
                        <dl>
                            <dd>●住所：</dd>
                            <dd>徳島市○○○○○-○○</dd>
                        </dl>
                        <dl>
                            <dd>●お問い合わせ：</dd>
                            <dd>○○-○○-○○○</dd>
                        </dl>
                        <dl class="card__url">
                            <dd>●URL：</dd>
                            <dd><a href="">aaaaaaaaa.com</a></dd>
                        </dl>
                    </div>
                </div>
            </a>
        </div>

        <!-- カード型 -->
        <div class="card tokushima">
            <a href="#">
                <!-- 背面 -->
                <div class="card__back"></div>
                <!-- 前面 -->
                <div class="card__front">
                    <!-- カード内情報 -->
                    <img src="../assets/img/cat.jpg" alt="">
                    <div class="card__tag bgBL">
                        <p>遊ぶ</p>
                    </div>
                    <h2 class="card__outline">徳島○○○公園</h2>
                    <div class="card__line"></div>
                    <div class="card__textarea">
                        <dl>
                            <dd>●住所：</dd>
                            <dd>徳島市○○○○○-○○</dd>
                        </dl>
                        <dl>
                            <dd>●お問い合わせ：</dd>
                            <dd>○○-○○-○○○</dd>
                        </dl>
                        <dl class="card__url">
                            <dd>●URL：</dd>
                            <dd><a href="">aaaaaaaaa.com</a></dd>
                        </dl>
                    </div>
                </div>
            </a>
        </div>

        <!-- カード型 -->
        <div class="card tokushima">
            <a href="#">
                <!-- 背面 -->
                <div class="card__back"></div>
                <!-- 前面 -->
                <div class="card__front">
                    <!-- カード内情報 -->
                    <img src="../assets/img/cat.jpg" alt="">
                    <div class="card__tag">
                        <p>遊ぶ</p>
                    </div>
                    <h2 class="card__outline">徳島○○○公園</h2>
                    <div class="card__line"></div>
                    <div class="card__textarea">
                        <dl>
                            <dd>●住所：</dd>
                            <dd>徳島市○○○○○-○○</dd>
                        </dl>
                        <dl>
                            <dd>●お問い合わせ：</dd>
                            <dd>○○-○○-○○○</dd>
                        </dl>
                        <dl class="card__url">
                            <dd>●URL：</dd>
                            <dd><a href="">aaaaaaaaa.com</a></dd>
                        </dl>
                    </div>
                </div>
            </a>
        </div>

        <!-- 記事が4以上ならmoreボタンを出す。 -->

    </div>

    <button id="btn__tokushima" class="more-button">
        MORE
    </button>


    <!-- コンテンツのサブタイトル -->
    <h2 class="sub__title2 mb20 bgBL"><i class="fa-solid fa-paw"></i> お気に入りした<br>泊るの施設</h2>

    <div class="next__info tr2"><a href="">>>〇〇件</a></div>

    <!-- 2つめのカテゴリ -->

    <!-- カード型コンテンツまとめ -->
    <div class="card__contents mw12">

        <!-- カード型 -->
        <div class="card tokushima">
            <a href="#">
                <!-- 背面 -->
                <div class="card__back"></div>
                <!-- 前面 -->
                <div class="card__front">
                    <!-- カード内情報 -->
                    <img src="../assets/img/cat.jpg" alt="">
                    <div class="card__tag">
                        <p>遊ぶ</p>
                    </div>
                    <h2 class="card__outline">徳島○○○公園</h2>
                    <div class="card__line"></div>
                    <div class="card__textarea">
                        <dl>
                            <dd>●住所：</dd>
                            <dd>徳島市○○○○○-○○</dd>
                        </dl>
                        <dl>
                            <dd>●お問い合わせ：</dd>
                            <dd>○○-○○-○○○</dd>
                        </dl>
                        <dl class="card__url">
                            <dd>●URL：</dd>
                            <dd><a href="">aaaaaaaaa.com</a></dd>
                        </dl>
                    </div>
                </div>
            </a>
        </div>

        <!-- カード型 -->
        <div class="card tokushima">
            <a href="#">
                <!-- 背面 -->
                <div class="card__back"></div>
                <!-- 前面 -->
                <div class="card__front">
                    <!-- カード内情報 -->
                    <img src="../assets/img/cat.jpg" alt="">
                    <div class="card__tag">
                        <p>遊ぶ</p>
                    </div>
                    <h2 class="card__outline">徳島○○○公園</h2>
                    <div class="card__line"></div>
                    <div class="card__textarea">
                        <dl>
                            <dd>●住所：</dd>
                            <dd>徳島市○○○○○-○○</dd>
                        </dl>
                        <dl>
                            <dd>●お問い合わせ：</dd>
                            <dd>○○-○○-○○○</dd>
                        </dl>
                        <dl class="card__url">
                            <dd>●URL：</dd>
                            <dd><a href="">aaaaaaaaa.com</a></dd>
                        </dl>
                    </div>
                </div>
            </a>
        </div>

        <!-- カード型 -->
        <div class="card tokushima">
            <a href="#">
                <!-- 背面 -->
                <div class="card__back"></div>
                <!-- 前面 -->
                <div class="card__front">
                    <!-- カード内情報 -->
                    <img src="../assets/img/cat.jpg" alt="">
                    <div class="card__tag bgBL">
                        <p>遊ぶ</p>
                    </div>
                    <h2 class="card__outline">徳島○○○公園</h2>
                    <div class="card__line"></div>
                    <div class="card__textarea">
                        <dl>
                            <dd>●住所：</dd>
                            <dd>徳島市○○○○○-○○</dd>
                        </dl>
                        <dl>
                            <dd>●お問い合わせ：</dd>
                            <dd>○○-○○-○○○</dd>
                        </dl>
                        <dl class="card__url">
                            <dd>●URL：</dd>
                            <dd><a href="">aaaaaaaaa.com</a></dd>
                        </dl>
                    </div>
                </div>
            </a>
        </div>

        <!-- カード型 -->
        <div class="card tokushima">
            <a href="#">
                <!-- 背面 -->
                <div class="card__back"></div>
                <!-- 前面 -->
                <div class="card__front">
                    <!-- カード内情報 -->
                    <img src="../assets/img/cat.jpg" alt="">
                    <div class="card__tag">
                        <p>遊ぶ</p>
                    </div>
                    <h2 class="card__outline">徳島○○○公園</h2>
                    <div class="card__line"></div>
                    <div class="card__textarea">
                        <dl>
                            <dd>●住所：</dd>
                            <dd>徳島市○○○○○-○○</dd>
                        </dl>
                        <dl>
                            <dd>●お問い合わせ：</dd>
                            <dd>○○-○○-○○○</dd>
                        </dl>
                        <dl class="card__url">
                            <dd>●URL：</dd>
                            <dd><a href="">aaaaaaaaa.com</a></dd>
                        </dl>
                    </div>
                </div>
            </a>
        </div>

        <!-- 記事が4以上ならmoreボタンを出す。 -->

    </div>

    <!-- 記事が4以上ならmoreボタンを出す。 -->

    </div>

    <button id="btn__east" class="more-button">
        MORE
    </button>

    <!-- コンテンツのサブタイトル -->
    <h2 class="sub__title2 mb20 bgPK"><i class="fa-solid fa-paw"></i> お気に入りした<br>食べるの施設</h2>

    <div class="next__info tr2"><a href="">>>〇〇件</a></div>
    <!-- ３つめのカテゴリ -->
    <div class="card__contents mw12">

        <!-- カード型 -->
        <div class="card west">
            <a href="#">
                <!-- 背面 -->
                <div class="card__back"></div>
                <!-- 前面 -->
                <div class="card__front">
                    <!-- カード内情報 -->
                    <img src="../assets/img/cat.jpg" alt="">
                    <div class="card__tag">
                        <p>遊ぶ</p>
                    </div>
                    <h2 class="card__outline">徳島○○○公園</h2>
                    <div class="card__line"></div>
                    <div class="card__textarea">
                        <dl>
                            <dd>●住所：</dd>
                            <dd>徳島市○○○○○-○○</dd>
                        </dl>
                        <dl>
                            <dd>●お問い合わせ：</dd>
                            <dd>○○-○○-○○○</dd>
                        </dl>
                        <dl class="card__url">
                            <dd>●URL：</dd>
                            <dd><a href="">aaaaaaaaa.com</a></dd>
                        </dl>
                    </div>
                </div>
            </a>
        </div>

        <!-- カード型 -->
        <div class="card west">
            <a href="#">
                <!-- 背面 -->
                <div class="card__back"></div>
                <!-- 前面 -->
                <div class="card__front">
                    <!-- カード内情報 -->
                    <img src="../assets/img/cat.jpg" alt="">
                    <div class="card__tag">
                        <p>遊ぶ</p>
                    </div>
                    <h2 class="card__outline">徳島○○○公園</h2>
                    <div class="card__line"></div>
                    <div class="card__textarea">
                        <dl>
                            <dd>●住所：</dd>
                            <dd>徳島市○○○○○-○○</dd>
                        </dl>
                        <dl>
                            <dd>●お問い合わせ：</dd>
                            <dd>○○-○○-○○○</dd>
                        </dl>
                        <dl class="card__url">
                            <dd>●URL：</dd>
                            <dd><a href="">aaaaaaaaa.com</a></dd>
                        </dl>
                    </div>
                </div>
            </a>
        </div>

        <!-- カード型 -->
        <div class="card west">
            <a href="#">
                <!-- 背面 -->
                <div class="card__back"></div>
                <!-- 前面 -->
                <div class="card__front">
                    <!-- カード内情報 -->
                    <img src="../assets/img/cat.jpg" alt="">
                    <div class="card__tag">
                        <p>遊ぶ</p>
                    </div>
                    <h2 class="card__outline">徳島○○○公園</h2>
                    <div class="card__line"></div>
                    <div class="card__textarea">
                        <dl>
                            <dd>●住所：</dd>
                            <dd>徳島市○○○○○-○○</dd>
                        </dl>
                        <dl>
                            <dd>●お問い合わせ：</dd>
                            <dd>○○-○○-○○○</dd>
                        </dl>
                        <dl class="card__url">
                            <dd>●URL：</dd>
                            <dd><a href="">aaaaaaaaa.com</a></dd>
                        </dl>
                    </div>
                </div>
            </a>
        </div>

        <!-- カード型 -->
        <div class="card west">
            <a href="#">
                <!-- 背面 -->
                <div class="card__back"></div>
                <!-- 前面 -->
                <div class="card__front">
                    <!-- カード内情報 -->
                    <img src="../assets/img/cat.jpg" alt="">
                    <div class="card__tag">
                        <p>遊ぶ</p>
                    </div>
                    <h2 class="card__outline">徳島○○○公園</h2>
                    <div class="card__line"></div>
                    <div class="card__textarea">
                        <dl>
                            <dd>●住所：</dd>
                            <dd>徳島市○○○○○-○○</dd>
                        </dl>
                        <dl>
                            <dd>●お問い合わせ：</dd>
                            <dd>○○-○○-○○○</dd>
                        </dl>
                        <dl class="card__url">
                            <dd>●URL：</dd>
                            <dd><a href="">aaaaaaaaa.com</a></dd>
                        </dl>
                    </div>
                </div>
            </a>
        </div>

        <!-- 記事が4以上ならmoreボタンを出す。 -->

    </div>

    <button id="btn__west" class="more-button">
        MORE
    </button>

    <!-- コンテンツのサブタイトル -->
    <h2 class="sub__title bgBL mb20"><i class="fa-solid fa-paw"></i>MAP表示</h2>

    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d128516.40393760444!2d134.45463388956426!3d34.074890831171494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sja!2sjp!4v1696859548408!5m2!1sja!2sjp"></iframe>" frameborder="0"></iframe>
    </div>
</main>

<!-- footer.phpを読み込む -->
<?php get_footer(); ?>
