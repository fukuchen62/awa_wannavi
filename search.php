<!-- header.phpを読み込む -->
<?php get_header(); ?>

<main>
    <!-- 帯になるコンテナーのタイトル -->
    <div class="container">
        <h2 class="search__ttl">「<?php the_search_query(); ?>」の検索結果</h2>
    </div>

    <div class="container bg__img">
        <!-- パンくずリスト -->
        <?php get_template_part("template-parts/breadcrumb"); ?>

        <?php if (get_search_query() != '') : ?>

        <!-- 遊ぶタブ -->
        <?php
            // カスタム投稿タイプ
            $args = array(
                'post_type' => 'enjoy',
                's' => get_search_query(),
                'posts_per_page' => -1,             //全件表示
                'post_status'  => 'publish',
                'orderby'      => 'slug',
                'order'        => 'asc'
            );

            // サブクエリ実行
            $enjoy_query =  new WP_Query($args);
            ?>

        <div class="mt40">
            <div class="sub__title bgGL"><i class="fa-solid fa-paw"></i>遊ぶ (<?php echo $enjoy_query->post_count; ?>件)</div>
        </div>

        <!-- 結果を表示させる -->
        <div class="card__contents mw12 mb80">
            <?php if ($enjoy_query->have_posts()) : ?>
            <?php while ($enjoy_query->have_posts()) : ?>
            <?php $enjoy_query->the_post(); ?>

            <!-- カード型を読み込む -->
            <?php get_template_part('template-parts/loop', 'card'); ?>

            <?php endwhile; ?>
            <?php endif; ?>
        </div>

        <!-- ライン -->
        <div class="line__solid"></div>

        <!-- 泊まるの検索 -->
        <?php
            // カスタム投稿タイプ
            $args = array(
                'post_type' => 'stay',
                's' => get_search_query(),
                'posts_per_page' => -1,             //全件表示
                'post_status'  => 'publish',
                'orderby'      => 'slug',
                'order'        => 'asc'
            );

            // サブクエリ実行
            $stay_query =  new WP_Query($args);
            ?>

        <div class="mt40">
            <div class="sub__title bgGL"><i class="fa-solid fa-paw"></i>泊まる (<?php echo $stay_query->post_count; ?>件)</div>
        </div>

        <!-- 結果を表示させる -->
        <div class="card__contents mw12 mb80">
            <?php if ($stay_query->have_posts()) : ?>
            <?php while ($stay_query->have_posts()) : ?>
            <?php $stay_query->the_post(); ?>

            <!-- カード型を読み込む -->
            <?php get_template_part('template-parts/loop', 'card'); ?>

            <?php endwhile; ?>
            <?php endif; ?>
        </div>

        <!-- ライン -->
        <div class="line__solid"></div>

        <!-- 食べるの検索 -->
        <?php
            // カスタム投稿タイプ
            $args = array(
                'post_type' => 'eat',
                's' => get_search_query(),
                'posts_per_page' => -1,             //全件表示
                'post_status'  => 'publish',
                'orderby'      => 'slug',
                'order'        => 'asc'
            );

            // サブクエリ実行
            $eat_query =  new WP_Query($args);
            ?>

        <div class="mt40">
            <div class="sub__title bgGL"><i class="fa-solid fa-paw"></i>泊まる (<?php echo $eat_query->post_count; ?>件)</div>
        </div>

        <!-- 結果を表示させる -->
        <div class="card__contents mw12 mb80">
            <?php if ($eat_query->have_posts()) : ?>
            <?php while ($eat_query->have_posts()) : ?>
            <?php $eat_query->the_post(); ?>

            <!-- カード型を読み込む -->
            <?php get_template_part('template-parts/loop', 'card'); ?>

            <?php endwhile; ?>
            <?php endif; ?>
        </div>

        <!-- ライン -->
        <div class="line__solid"></div>

        <!-- おすすめ情報の検索 -->
        <?php
            // カスタム投稿タイプ
            $args = array(
                'post_type' => 'special',
                's' => get_search_query(),
                'posts_per_page' => -1,             //全件表示
                'post_status'  => 'publish',
                'orderby'      => 'slug',
                'order'        => 'asc'
            );

            // サブクエリ実行
            $special_query =  new WP_Query($args);
            ?>

        <div class="mt40">
            <div class="sub__title bgGL"><i class="fa-solid fa-paw"></i>おすすめ情報 (<?php echo $special_query->post_count; ?>件)</div>
        </div>

        <!-- 結果を表示させる -->
        <div class="card__contents mw12 mb80">
            <?php if ($special_query->have_posts()) : ?>
            <?php while ($special_query->have_posts()) : ?>
            <?php $special_query->the_post(); ?>

            <!-- カード型を読み込む -->
            <?php get_template_part('template-parts/loop', 'card_special'); ?>

            <?php endwhile; ?>
            <?php endif; ?>
        </div>

        <!-- ライン -->
        <div class="line__solid"></div>

        <?php else : ?>
        <p>検索ワードを入力してください。</p>
        <?php endif; ?>
    </div>

    <!-- リセット -->
    <?php wp_reset_postdata(); ?>
</main>

<!-- footer.phpを読み込む -->
<?php get_footer(); ?>