<!-- header.phpを読み込む -->
<?php get_header(); ?>

<h2 class="pageTitle">Special</h2>

<main class="main">
    <div class="container">
        <div class="row">
            <!-- 左半分：記事一覧 -->
            <div class="col-12 col-md-9">

                <!-- タイトルの切り替え -->
                <?php if (is_month()) : ?>
                    <h2 class="main_title"><?php the_time("Y年m月"); ?></h2>
                <?php else : ?>
                    <h2 class="main_title"><?php wp_title("") ?></h2>
                <?php endif; ?>


                <div class="row">

                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : ?>
                            <?php the_post(); ?>
                            <div class="col-md-4">
                                <!-- 共通のニュースカード型を読み込む -->
                                <?php get_template_part("template-parts/loop", "news"); ?>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>

                <!-- ページネーション -->
                <?php if (function_exists("wp_pagenavi")) {
                    wp_pagenavi();
                } ?>

            </div>

            <!-- カテゴリーで絞りこむ -->
            <?php get_sidebar("special"); ?>

        </div>
    </div>
</main>

<!-- footer.phpを読み込む -->
<?php get_footer(); ?>
