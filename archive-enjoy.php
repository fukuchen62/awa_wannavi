<!-- header.phpを読み込む -->
<?php get_header(); ?>

<main>

    <div class="container">
        <div class="banner__head">遊ぶ</div>

        <!-- いったんコンテナーに格納 -->

        <!-- パンくずリスト -->
        <div class="Breadcrumb"><a href="">トップ > 遊ぶ一覧</a>
        </div>
        <!-- 県別検索ボタン -->
        <!-- 各ボタンをラップでハサミ、ホバーすると色が変わるギミック -->

        <div class="tab__wrapper mb40">
            <div class="tab__block bgGL">
                <a href="">
                    <h3 class="tab__title">ペットホテル</h3>
                </a>
            </div>

            <div class="tab__block bgGL">
                <a href="">
                    <h3 class="tab__title">ペットと宿泊</h3>
                </a>
            </div>

            <div class="tab__block bgGL">
                <a href="">
                    <h3 class="tab__title">キャンプ</h3>
                </a>
            </div>

        </div>
        <!-- 県別検索終了 -->

        <!-- メインのタイトル -->
        <h2 class="h2__title bgGL mb20">ペットホテル</h2>

        <!-- 一覧まで飛んでいくリンク -->
        <div class="next__info tr mb20"><a href="">>>一覧を見る</a></div>


        <!-- カード型コンテンツのテンプレート -->
        <!-- デザインはカンプどおりに作成するとして、機能などは逐一考える -->

        <!-- 一つ目のカテゴリのカード群 -->
        <!-- コンテンツのサブタイトル -->
        <h2 class="sub__title bgGL mb20"><i class="fa-solid fa-paw"></i> 徳島市エリア</h2>

        <!-- カード型コンテンツまとめ -->
        <div class="card__contents mw12">



            <!-- 教科書73pwpループより -->
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <!-- カード型 -->
                    <div class="card tokushima">
                        <!-- IDの追加 -->
                        <a id="post-<?php the_ID(); ?>" <?php post_class("tokushima") ?> href="#">
                            <!-- 背面 -->
                            <div class="card__back"></div>
                            <!-- 前面 -->
                            <div class="card__front">
                                <!-- カード内情報 -->
                                <!-- サムネイル画像を投稿画面からとってくる -->
                                <!-- 教科書79p -->
                                <div class="thumbnail__pic">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail("medium"); ?>
                                        <?php else : ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/noimage_600x400.png" alt="">
                                        <?php endif; ?>
                                    </a>
                                </div>

                                <div class="card__tag bgGL">
                                    <p>遊ぶ</p>
                                </div>

                                <!-- カテゴリが引っ張ってこれません2023/10/10 記事のカテゴリ75p -->
                                <?php the_category(); ?>
                                <!-- 記事タイトル表示 76p -->
                                <h2 class="card__outline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                <div class="card__line"></div>
                                <div class="card__textarea">
                                    <dl>
                                        <dd>●住所：</dd>
                                        <!-- getfieldからデータを抜き出す203p -->
                                        <dd><?php
                                            the_field("address");
                                            ?></dd>
                                    </dl>
                                    <dl>
                                        <dd>●お問い合わせ：</dd>
                                        <dd><?php
                                            the_field("tel");
                                            ?></dd>
                                    </dl>
                                    <dl class="card__url">
                                        <dd>●URL：</dd>
                                        <dd><a href=""><?php
                                                        the_field("url");
                                                        ?></a></dd>
                                    </dl>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>


            <!-- 記事が4以上ならmoreボタンを出す。 -->

        </div>

        <button id="btn__tokushima" class="more-button">
            MORE
        </button>


        <!-- コンテンツのサブタイトル -->
        <h2 class="sub__title bgGL mb20"><i class="fa-solid fa-paw"></i> 県東エリア</h2>

        <!-- 2つめのカテゴリ -->


        <div class="card__contents mw12">

            <!-- 教科書73pwpループより -->
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <!-- カード型 -->
                    <div class="card tokushima">
                        <!-- IDの追加 -->
                        <a id="post-<?php the_ID(); ?>" <?php post_class("tokushima") ?> href="#">
                            <!-- 背面 -->
                            <div class="card__back"></div>
                            <!-- 前面 -->
                            <div class="card__front">
                                <!-- カード内情報 -->
                                <!-- サムネイル画像を投稿画面からとってくる -->
                                <!-- 教科書79p -->
                                <div class="thumbnail__pic">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail("medium"); ?>
                                        <?php else : ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/noimage_600x400.png" alt="">
                                        <?php endif; ?>
                                    </a>
                                </div>

                                <div class="card__tag bgGL">
                                    <p>遊ぶ</p>
                                </div>

                                <!-- カテゴリが引っ張ってこれません2023/10/10 記事のカテゴリ75p -->
                                <?php the_category(); ?>
                                <!-- 記事タイトル表示 76p -->
                                <h2 class="card__outline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                <div class="card__line"></div>
                                <div class="card__textarea">
                                    <dl>
                                        <dd>●住所：</dd>
                                        <!-- getfieldからデータを抜き出す203p -->
                                        <dd><?php
                                            the_field("address");
                                            ?></dd>
                                    </dl>
                                    <dl>
                                        <dd>●お問い合わせ：</dd>
                                        <dd><?php
                                            the_field("tel");
                                            ?></dd>
                                    </dl>
                                    <dl class="card__url">
                                        <dd>●URL：</dd>
                                        <dd><a href=""><?php
                                                        the_field("url");
                                                        ?></a></dd>
                                    </dl>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>


            <!-- 記事が4以上ならmoreボタンを出す。 -->

        </div>

        <button id="btn__east" class="more-button">
            MORE
        </button>

        <!-- コンテンツのサブタイトル -->
        <h2 class="sub__title bgGL mb20"><i class="fa-solid fa-paw"></i> 県西エリア</h2>

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
                        <div class="card__tag bgGL">
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
                        <div class="card__tag bgGL">
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
                        <div class="card__tag bgGL">
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
                        <div class="card__tag bgGL">
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
        <h2 class="sub__title bgGL mb20"><i class="fa-solid fa-paw"></i> 県南エリア</h2>

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
                        <div class="card__tag bgGL">
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
                        <div class="card__tag bgGL">
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
                        <div class="card__tag bgGL">
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
                        <div class="card__tag bgGL">
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
