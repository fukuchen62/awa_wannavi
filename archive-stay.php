<!-- header.phpを読み込む -->
<?php get_header(); ?>

<main>

    <div class="container">
        <div class="banner__head">泊まる</div>

        <!-- いったんコンテナーに格納 -->

        <!-- パンくずリスト -->
        <div class="Breadcrumb"><a href="">トップ > 泊まる一覧</a>
        </div>
        <!-- 県別検索ボタン -->
        <!-- 各ボタンをラップでハサミ、ホバーすると色が変わるギミック -->

        <div class="tab__wrapper mb40">
            <div class="tab__block">
                <a href="">
                    <h3 class="tab__title">ペットホテル</h3>
                </a>
            </div>

            <div class="tab__block">
                <a href="">
                    <h3 class="tab__title">ペットと宿泊</h3>
                </a>
            </div>

            <div class="tab__block">
                <a href="">
                    <h3 class="tab__title">キャンプ</h3>
                </a>
            </div>

        </div>
        <!-- 県別検索終了 -->

        <!-- メインのタイトル -->
        <h2 class="h2__title bgBL mb20">ペットホテル</h2>

        <!-- 一覧まで飛んでいくリンク -->
        <div class="next__info tr mb20"><a href="">>>一覧を見る</a></div>


        <!-- カード型コンテンツのテンプレート -->
        <!-- デザインはカンプどおりに作成するとして、機能などは逐一考える -->

        <!-- 一つ目のカテゴリのカード群 -->
        <!-- コンテンツのサブタイトル -->
        <h2 class="sub__title bgBL mb20"><i class="fa-solid fa-paw"></i> 徳島市エリア</h2>

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

            <!-- 記事が4以上ならmoreボタンを出す。 -->

        </div>

        <button id="btn__tokushima" class="more-button">
            MORE
        </button>


        <!-- コンテンツのサブタイトル -->
        <h2 class="sub__title bgBL mb20"><i class="fa-solid fa-paw"></i> 県東エリア</h2>

        <!-- 2つめのカテゴリ -->


        <div class="card__contents mw12">

            <!-- カード型 -->
            <div class="card east">
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
            <div class="card east">
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
            <div class="card east">
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
            <div class="card east">
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

        <button id="btn__east" class="more-button">
            MORE
        </button>

        <!-- コンテンツのサブタイトル -->
        <h2 class="sub__title bgBL mb20"><i class="fa-solid fa-paw"></i> 県西エリア</h2>

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
        <h2 class="sub__title bgBL mb20"><i class="fa-solid fa-paw"></i> 県南エリア</h2>

        <!-- ３つめのカテゴリ -->
        <div class="card__contents mw12">

            <!-- カード型 -->
            <div class="card south">
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
            <div class="card south">
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
            <div class="card south">
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
            <div class="card south">
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

        <button id="btn__south" class="more-button">
            MORE
        </button>

    </div>

</main>

<!-- footer.phpを読み込む -->
<?php get_footer(); ?>