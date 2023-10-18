<!-- header.phpを読み込む -->
<?php get_header(); ?>

<main>

    <?php
    //URLからタクソノミーのslugを取得
    $special_type_slug = get_query_var('special_type');
    // タクソノミーの情報を取得
    $special_type = get_term_by('slug', $special_type_slug, 'special_type');
    ?>

    <div class="container">
        <!-- h2帯タイトル -->
        <div class="container">

            <div class="bnr__head bg__special">
                <h2 class=" page__title">おすすめ情報</h2>
            </div>

        </div>

        <!-- パンくずリスト -->
        <?php get_template_part('template-parts/breadcrumb'); ?>

        <!-- 2col全体を格納するコンテナー -->
        <div class="container__col">

            <!-- メインコラムコンテナー -->
            <div class="main__col">

                <!-- コンテンツのサブタイトル -->
                <h3 class="sub__ttl yellow">「<?php echo $special_type->name; ?>」一覧（<?php echo $wp_query->found_posts; ?>）</h3>
                <!-- </div> -->

                <!-- カード型コンテンツ -->
                <div class="card__2col">

                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>

                            <!-- カード型を読み込む -->
                            <?php get_template_part('template-parts/loop', 'card_tax-special'); ?>

                        <?php endwhile; ?>
                    <?php endif; ?>

                    <?php if (function_exists("wp_pagenavi")) {
                        wp_pagenavi();
                    } ?>

                </div>

            </div>

            <!-- aside カテゴリー一覧 -->
            <?php get_sidebar("special"); ?>

        </div>
    </div>
</main>

<!-- footer.phpを読み込む -->
<?php get_footer(); ?>
