<!-- header.phpを読み込む -->
<?php get_header(); ?>

<main>
    <div class="container">
        <div class="bg__img">
            <!-- パンくずリスト -->
            <div class="Breadcrumb mb20">
                <?php get_template_part("template-parts/breadcrumb"); ?>
            </div>

            <!-- 帯になるコンテナーのタイトル -->
            <div class="container pd20">
                <h2 class="search__ttl"><?php the_search_query(); ?>検索結果</h2>
            </div>

            <!-- 遊ぶタブ -->
            <div class="mb40 mt40">
                <div class="sub__title bgGL"><i class="fa-solid fa-paw"></i>遊ぶの検索結果</div>
            </div>

            <div class="next__info tr2"><a href="">>>〇〇件</a></div>

            <!-- カード型コンテンツまとめ -->
            <div class="card__contents mw12">

                <!-- カード型 -->
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>

                <div class="card tokushima">
                    <a href="#">
                        <!-- 背面 -->
                        <div class="card__back"></div>
                        <!-- 前面 -->
                        <div class="card__front">
                            <!-- カード内情報 -->

                            <!-- サムネイルの取得 -->
                            <a href="<?php the_permalink(); ?>">
                                <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail("medium"); ?>
                                <?php else : ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/noimage_600x400.png" alt="">
                                <?php endif; ?>
                            </a>

                            <div class="card__tag bgGL">
                                <p>遊ぶ</p>
                            </div>
                            <h2 class="card__outline"><?php the_title(); ?></h2>
                            <div class="card__line"></div>
                            <div class="card__textarea">
                                <dl>
                                    <dd>●住所：</dd>
                                    <dd><?php the_field("address"); ?></dd>
                                </dl>
                                <dl>
                                    <dd>●お問い合わせ：</dd>
                                    <dd><?php the_field("tel"); ?></dd>
                                </dl>
                                <dl class="card__url">
                                    <dd>●URL：</dd>
                                    <dd><a href="<?php the_field("url"); ?>"><?php the_field("url"); ?></a></dd>
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

            <!-- ライン -->
            <div class="line__solid"></div>


            <!-- コンテンツのサブタイトル -->
            <div class="pb20 pd20">
                <div class="sub__title bgBL"><i class="fa-solid fa-paw"></i>泊まるの検索結果</div>
            </div>

            <div class="next__info tr2 mb20"><a href="">>>〇〇件</a></div>

            <!-- 2つめのカテゴリ -->


            <div class="card__contents mw12">

                <!-- カード型 -->
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>

                <div class="card east">
                    <a href="#">
                        <!-- 背面 -->
                        <div class="card__back"></div>
                        <!-- 前面 -->
                        <div class="card__front">
                            <!-- カード内情報 -->

                            <!-- サムネイルの取得 -->
                            <a href="<?php the_permalink(); ?>">
                                <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail("medium"); ?>
                                <?php else : ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/noimage_600x400.png" alt="">
                                <?php endif; ?>
                            </a>

                            <div class="card__tag bgBL">
                                <p>泊まる</p>
                            </div>
                            <h2 class="card__outline"><?php the_title(); ?></h2>
                            <div class="card__line"></div>
                            <div class="card__textarea">
                                <dl>
                                    <dd>●住所：</dd>
                                    <dd><?php the_field("address"); ?></dd>
                                </dl>
                                <dl>
                                    <dd>●お問い合わせ：</dd>
                                    <dd><?php the_field("tel"); ?></dd>
                                </dl>
                                <dl class="card__url">
                                    <dd>●URL：</dd>
                                    <dd><a href="<?php the_field("url"); ?>"><?php the_field("url"); ?></a></dd>
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

            <!-- ライン -->
            <div class="line__solid"></div>

            <!-- コンテンツのサブタイトル -->
            <div class="mb20 md20">
                <div class="sub__title bgPK"><i class="fa-solid fa-paw"></i>食べるの検索結果</div>
            </div>


            <div class="next__info tr2 mb20"><a href="">>>〇〇件</a></div>
            <!-- ３つめのカテゴリ -->
            <div class="card__contents mw12">

                <!-- カード型 -->
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>

                <div class="card west">
                    <a href="#">
                        <!-- 背面 -->
                        <div class="card__back"></div>
                        <!-- 前面 -->
                        <div class="card__front">
                            <!-- カード内情報 -->

                            <!-- サムネイルの取得 -->
                            <a href="<?php the_permalink(); ?>">
                                <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail("medium"); ?>
                                <?php else : ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/noimage_600x400.png" alt="">
                                <?php endif; ?>
                            </a>

                            <div class="card__tag bgPK">
                                <p>食べる</p>
                            </div>
                            <h2 class="card__outline"><?php the_title(); ?></h2>
                            <div class="card__line"></div>
                            <div class="card__textarea">
                                <dl>
                                    <dd>●住所：</dd>
                                    <dd><?php the_field("address"); ?></dd>
                                </dl>
                                <dl>
                                    <dd>●お問い合わせ：</dd>
                                    <dd><?php the_field("tel"); ?></dd>
                                </dl>
                                <dl class="card__url">
                                    <dd>●URL：</dd>
                                    <dd><a href="<?php the_field("url"); ?>"><?php the_field("url"); ?></a></dd>
                                </dl>
                            </div>
                        </div>
                    </a>
                </div>

                <?php endwhile; ?>
                <?php endif; ?>


                <!-- 記事が4以上ならmoreボタンを出す。 -->

            </div>

            <button id="btn__west" class="more-button">
                MORE
            </button>

            <!-- ライン -->
            <div class="line__solid"></div>

            <!-- コンテンツのサブタイトル -->
            <div class="mb20 md20">
                <div class="sub__title bgYL"><i class="fa-solid fa-paw"></i>おすすめ情報の<br>検索結果</div>
            </div>


            <div class="next__info tr2 mb20"><a href="">>>〇〇件</a></div>
            <!-- 4つめのカテゴリ -->
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

            </div>

            <button id="btn__west" class="more-button">
                MORE
            </button>

            <!-- ライン -->
            <div class="line__solid"></div>

        </div>
    </div>
</main>

<!-- footer.phpを読み込む -->
<?php get_footer(); ?>