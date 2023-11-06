<!-- header.phpを読み込む -->
<?php get_header(); ?>

<main class="container">

    <!-- コンテナーに格納 -->
    <div class="container">
        <div class="pd20">
            <h2 class="h2__title bgYL"><?php the_title("") ?></h2>
        </div>
        <!-- パンくずリスト -->
        <div class="Breadcrumb">
            <?php get_template_part("template-parts/breadcrumb"); ?>
        </div>

        <!-- articleコンテナーに格納 -->
        <div class="container">

            <!-- 帯になるコンテナーのタイトル -->
            <div class="container pd20">

                <h2 class="article__title"><?php the_title(); ?></h2>
            </div>

            <!-- 2col全体を格納するコンテナー -->
            <div class="container__col">

                <!-- メインコラムコンテナー -->
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>

                        <?php the_content(); ?>

                    <?php endwhile; ?>
                <?php endif; ?>

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
