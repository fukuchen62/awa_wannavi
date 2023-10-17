<!-- header.phpを読み込む -->
<?php get_header(); ?>

<main class="main">

    <div class="container">

        <!-- パンくずリスト -->
        <?php get_template_part('template-parts/breadcrumb'); ?>

        <!-- h2帯タイトル -->
        <div class="pd20">
            <h2 class="article__title"><?php the_title("") ?></h2>
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
        <h2 class="article__title">こちらの記事はいかがですか？</h2>

        <div class="card__contents mw12">

            <!-- カード型を読み込む -->
            <?php
            $nearby_query = new WP_Query(
                array(
                    'post_type' => 'special',
                    'orderby' => 'rand',
                    'post_per_page' => '3',
                )
            );
            ?>

            <?php if ($nearby_query->have_posts()) : ?>
            <?php while ($nearby_query->have_posts()) : ?>
            <?php $nearby_query->the_post(); ?>

            <!-- カード型を読み込む -->
            <?php get_template_part('template-parts/loop', 'card_special'); ?>

            <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>


</main>
<?php if (function_exists("wp_pagenavi")) {
    wp_pagenavi();
} ?>
<!-- footer.phpを読み込む -->
<?php get_footer(); ?>
