<!-- header.phpを読み込む -->
<?php get_header(); ?>

<main>
    <!-- いったんコンテナーに格納 -->
    <div class="container ">

        <?php
        //URLからタクソノミーのslugを取得
        $enjoy_type_slug = get_query_var('enjoy_type');
        // タクソノミーの情報を取得
        $enjoy_type = get_term_by('slug', $enjoy_type_slug, 'enjoy_type');
        // print_r($enjoy_type);
        ?>

        <div class="banner__head">遊ぶ</div>
        <!-- パンくずリスト -->
        <?php get_template_part('template-parts/breadcrumb'); ?>

        <!-- タクソノミー毎のリンクボタンを作成 -->
        <div class="tab__wrapper mb40">
            <?php
            $args = [
                'taxonomy' => 'enjoy_type',
                'orderby' => 'count',
                'order' => 'desc',
            ];
            $enjoy_types = get_terms($args);

            if (!empty($enjoy_types)) :
            ?>
            <?php foreach ($enjoy_types as $item) : ?>

            <?php if ($enjoy_type->name == $item->name) : ?>
            <div class="tab__block bgGL">
                <a href="<?php echo get_term_link($item); ?>">
                    <h3 class="tab__title"><?php echo $item->name; ?></h3>
                </a>
            </div>
            <?php else : ?>
            <div class="tab__block">
                <a href="<?php echo get_term_link($item); ?>">
                    <h3 class="tab__title"><?php echo $item->name; ?></h3>
                </a>
            </div>
            <?php endif; ?>

            <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <!-- メインのタイトル -->
        <h2 class="h2__title bgGL mb20"><?php echo $enjoy_type->name; ?></h2>

        <!-- 一覧まで飛んでいくリンク -->
        <div class="next__info tr mb20"><a href="<?php echo home_url('/enjoy/'); ?>">>>一覧を見る</a></div>

        <!-- 地域ごとの一覧 -->
        <?php
        $args = [
            'taxonomy' => 'area',
            'orderby' => 'slug',
        ];
        $areas = get_terms($args);
        if (!empty($areas)) :
        ?>

        <?php foreach ($areas as $area) : ?>

        <?php $area_slug = $area->slug; ?>

        <section class="card-box">

            <!-- 地域名 -->
            <h2 class="sub__title bgGL mb20"><i class="fa-solid fa-paw"></i><?php echo $area->name; ?>エリア&nbsp;&nbsp;<span id="<?php echo $area->slug; ?>-title" class="show_num"></span></h2>


            <!-- カード型コンテンツまとめ -->

            <div id="<?php echo $area->slug; ?>-area" class="card__contents mw12">
                <?php
                        // カスタム投稿タイプ
                        $args = array(
                            'post_type' => 'enjoy',
                            'posts_per_page' => -1,             //全件表示
                            'orderby' => 'rand',                //ランダムで表示する
                        );
                        // タクソノミーの種類を指定
                        $taxquerysp = array('relation' => 'AND');
                        $taxquerysp[] = array(
                            'taxonomy' => 'enjoy_type',
                            'terms' => $enjoy_type->slug,
                            'field' => 'slug',
                        );
                        // 地域を指定
                        $taxquerysp[] = array(
                            'taxonomy' => 'area',           //タクソノミー：『エリア』
                            'terms' => $area->slug,          //スラッグ名
                            'field' => 'slug',              //スラッグ指定
                        );
                        $args['tax_query'] = $taxquerysp;

                        // print_r($args);
                        // サブクエリ実行
                        $the_query =  new WP_Query($args);
                        ?>

                <!-- 結果を表示させる -->
                <?php if ($the_query->have_posts()) : ?>
                <?php while ($the_query->have_posts()) : ?>
                <?php $the_query->the_post(); ?>

                <!-- カード型を読み込む -->
                <?php get_template_part('template-parts/loop', 'card'); ?>

                <?php endwhile; ?>
                <?php endif; ?>

            </div>

            <!-- Moreボタン -->
            <button id="btn__<?php echo $area->slug; ?>" class="more-button">
                MORE
            </button>

        </section>

        <?php endforeach; ?>
        <?php endif; ?>

        <!-- サブクエリをリセットする -->
        <?php wp_reset_postdata(); ?>
    </div>
</main>

<!-- footer.phpを読み込む -->
<?php get_footer(); ?>