<!-- header.phpを読み込む -->
<?php get_header(); ?>

<main class="main">

    <div class="container">

        <!-- パンくずリスト -->
        <?php get_template_part('template-parts/breadcrumb'); ?>

        <!-- h2帯タイトル -->
        <div class="container">

            <!-- 帯になるコンテナーのタイトル -->
            <div class="container pd20">
                <h2 class="article__title">初心者マナー</h2>
            </div>

        </div>

        <!-- 2col全体を格納するコンテナー -->
        <div class="container__col">

            <!-- メインコラムコンテナー -->
            <div class="main__col">

                <!-- コンテンツのサブタイトル -->
                <h3 class="sub__ttl yellow"> <?php wp_title("") ?></h3>

                <!-- カード型コンテンツ -->

                <div class="card__2col">




                </div>


            </div>

            <!-- aside カテゴリー一覧 -->
            <?php get_sidebar("special"); ?>

        </div>
    </div>






</main>
<!-- footer.phpを読み込む -->
<?php get_footer(); ?>
