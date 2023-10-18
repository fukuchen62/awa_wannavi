<!-- header.phpを読み込む -->
<?php get_header(); ?>

<main>
    <!-- いったんコンテナーに格納 -->
    <div class="container ">

        <?php
        //URLからタクソノミーのslugを取得
        $eat_type_slug = get_query_var('eat_type');
        // タクソノミーの情報を取得
        $eat_type = get_term_by('slug', $eat_type_slug, 'eat_type');
        // print_r($eat_type);
        ?>

        <div class="bnr__head bg__eat">
            <h2 class="page__title">食べる</h2>
        </div>


        <!-- パンくずリスト -->
        <?php get_template_part('template-parts/breadcrumb'); ?>

        <!-- タクソノミー毎のリンクボタンを作成 -->
        <div class="tab__wrapper mb40">
            <?php
            $args = [
                'taxonomy' => 'eat_type',
                'orderby' => 'count',
                'order' => 'desc',
            ];
            $eat_types = get_terms($args);

            if (!empty($eat_types)) :
            ?>
            <?php foreach ($eat_types as $item) : ?>

            <?php if ($eat_type->name == $item->name) : ?>
            <div class="tab__block bgPK">
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
        <h2 class="h2__title__thin bgPK "><?php echo $eat_type->name; ?></h2>

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
            <h2 class="sub__title bgPK mb20"><i class="fa-solid fa-paw"></i><?php echo $area->name; ?>エリア&nbsp;&nbsp;<span id="<?php echo $area->slug; ?>-title" class="show_num"></span></h2>


            <!-- カード型コンテンツまとめ -->

            <div id="<?php echo $area->slug; ?>-area" class="card__contents mw12">
                <?php
                        // カスタム投稿タイプ
                        $args = array(
                            'post_type' => 'eat',
                            'posts_per_page' => -1,             //全件表示
                            'orderby' => 'rand',                //ランダムで表示する
                        );
                        // タクソノミーの種類を指定
                        $taxquerysp = array('relation' => 'AND');
                        $taxquerysp[] = array(
                            'taxonomy' => 'eat_type',
                            'terms' => $eat_type->slug,
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
                <?php get_template_part('template-parts/loop', 'card', $area_slug); ?>

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
