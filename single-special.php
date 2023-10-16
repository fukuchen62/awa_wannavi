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
                <h2 class="article__title"><?php the_title("") ?></h2>
            </div>

        </div>

        <!-- 2col全体を格納するコンテナー -->
        <div class="container__col">

            <!-- メインコラムコンテナー -->
            <div class="main__col">

                <div class="card__2col">
                    <!-- wpのメインクエリは個別ページでは一回だけループすると定義されています -->
                    <!-- なので、個別でもthe contentsなどの前にループで囲いますp84 -->
                    <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>

                    <?php the_content(); ?>

                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>

            </div>

            <!-- aside カテゴリー一覧 -->
            <?php get_sidebar("special"); ?>

        </div>
    </div>


</main>
<!-- footer.phpを読み込む -->
<?php get_footer(); ?>
