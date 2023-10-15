<!-- header.phpを読み込む -->
<?php get_header(); ?>

<main class="container">
    <!-- h2帯タイトル -->
    <div class="container">
        <h2 class="banner__yellow">
            <?php echo get_the_category()[0]->name; ?>
        </h2>

    </div>


    <!-- コンテナーに格納 -->
    <div class="container">
        <!-- パンくずリスト -->
        <div class="Breadcrumb">
            <?php get_template_part("template-parts/breadcrumb"); ?>
        </div>

        <!-- articleコンテナーに格納 -->
        <div class="container">

            <!-- 2col全体を格納するコンテナー -->
            <div class="container__col">

                <!-- メインコラムコンテナー -->
                <div class="main__col mb40">
                    <ul class="news__cont">

                        <?php if (have_posts()) : ?>
                            <?php while (have_posts()) : ?>
                                <?php the_post(); ?>
                                <?php get_template_part('template-parts/loop', 'new'); ?>
                            <?php endwhile; ?>
                        <?php endif; ?>

                    </ul>

                    <!-- ページネーション -->
                    <?php if (function_exists("wp_pagenavi")) {
                        wp_pagenavi();
                    } ?>

                </div>

                <!-- aside カテゴリー一覧 -->

                <div class="aside__col">
                    <div class="category__tag yellow">カテゴリー一覧</div>

                    <div class="category__innner">
                        <ul>
                            <li class="category__list"><a href="<?php echo home_url('/category/event/'); ?>">イベント情報</a></li>
                            <li class="category__list"><a href="<?php echo home_url('/category/news/'); ?>">お知らせ</a></li>
                            <li class="category__list"><a href="<?php echo home_url('/category/update/'); ?>">更新情報</a></li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
    </div>
</main>

<!-- footer.phpを読み込む -->
<?php get_footer(); ?>
