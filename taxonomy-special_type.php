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

                <!-- コンテンツのサブタイトル -->
                <h3 class="sub__ttl yellow"> 記事一覧</h3>
                <!-- </div> -->

                <!-- カード型コンテンツ -->
                <div class="card__2col">

                    <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>

                    <!-- カード型を読み込む -->
                    <?php get_template_part('template-parts/loop', 'card_tax-special'); ?>

                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>

                <!-- moreボタン -->
                <!-- <button id="btn__tokushima" class="more-button">
                    MORE
                </button> -->
            </div>

            <!-- aside カテゴリー一覧 -->
            <?php get_sidebar("special"); ?>


        </div>
        <?php if (function_exists("wp_pagenavi")) {
            wp_pagenavi();
        } ?>

    </div>



</main>
<!-- footer.phpを読み込む -->
<?php get_footer(); ?>
