<!-- header.phpを読み込む -->
<?php get_header(); ?>

<main class="main">

    <div class="container">
        <!-- h2帯タイトル -->


        <div class="banner__head">
            <h2 class="page__title">おすすめ情報</h2>
        </div>



        <!-- パンくずリスト -->
        <?php get_template_part('template-parts/breadcrumb'); ?>

        <!-- 2col全体を格納するコンテナー -->
        <div class="container__col">

            <!-- メインコラムコンテナー -->
            <div class="main__col">

                <!-- コンテンツのサブタイトル -->
                <h3 class="sub__ttl yellow"> <?php wp_title("") ?></h3>

                <!-- カード型コンテンツ -->

                <div class="card__2col">


                    <!-- タイトルの切り替え -->
                    <?php if (is_month()) : ?>
                        <h2 class="main_title"><?php the_time("Y年m月"); ?></h2>
                    <?php endif; ?>

                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : ?>
                            <?php the_post(); ?>

                            <!-- 共通のニュースカード型を読み込む -->
                            <?php get_template_part("template-parts/loop", "card"); ?>

                        <?php endwhile; ?>
                    <?php endif; ?>


                    <!-- ページネーション -->
                    <?php if (function_exists("wp_pagenavi")) {
                        wp_pagenavi();
                    } ?>

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
