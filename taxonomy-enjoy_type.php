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

        <!-- <div class="Breadcrumb mb20">
            <?php get_template_part("template-parts/breadcrumb"); ?>
        </div> -->


        <!-- タクソノミー毎のリンクボタンを作成 -->
        <div class="tab__wrapper mb40">
            <?php
            $enjoy_types = get_terms(array('taxonomy' => 'enjoy_type'));
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
        <div class="next__info tr mb20"><a href="">>>一覧を見る</a></div>

        <!-- 地域ごとの一覧 -->
        <?php
        $areas = get_terms(array('taxonomy' => 'area'));
        if (!empty($areas)) : ?>

        <?php foreach ($areas as $area) : ?>

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

                <div class="card <?php echo $area->slug; ?>">

                    <!-- IDの追加 -->
                    <a id="post-<?php the_ID(); ?>" <?php post_class(); ?> href="<?php the_permalink(); ?>">
                        <!-- 背面 -->
                        <div class="card__back"></div>
                        <!-- 前面 -->
                        <div class="card__front">
                            <!-- カード内情報 -->
                            <!-- サムネイル画像を投稿画面からとってくる -->
                            <!-- 教科書79p -->
                            <div class="thumbnail__pic">
                                <a href="<?php the_permalink(); ?>">
                                    <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail("medium"); ?>
                                    <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/noimage_600x400.png" alt="">
                                    <?php endif; ?>
                                </a>
                            </div>

                            <!-- <ul class="taxonomis">
                                                <li class="card__tag bgGL">
                                                    <?php echo $area->name; ?></p>
                                                </li>
                                                <li class="card__tag bgGL">
                                                    <?php echo $enjoy_type->name; ?></p>
                                                </li>
                                            </ul> -->

                            <!-- タクソノミーを取得する -->
                            <?php
                                            $post_type = get_post_type(get_the_ID());
                                            $taxonomies = get_object_taxonomies($post_type);

                                            $taxonomy_names = wp_get_object_terms(get_the_ID(), $taxonomies,  array("fields" => "names", "orderby" => "count"));

                                            ?>
                            <!-- タクソノミーを出力 -->
                            <ul class="taxonomis">
                                <?php
                                                if (!empty($taxonomy_names)) :
                                                    foreach ($taxonomy_names as $tax_name) : ?>

                                <li class="card__tag bgGL"><?php echo $tax_name; ?> </li>

                                <?php endforeach;
                                                endif;  ?>
                            </ul>

                            <!-- カテゴリが引っ張ってこれません2023/10/10 記事のカテゴリ75p -->

                            <!-- 記事タイトル表示 76p -->
                            <h2 class="card__outline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <div class="card__line"></div>
                            <div class="card__textarea">

                                <p><i class="fa-solid fa-location-dot"></i>
                                                    <?php the_field("address"); ?>
                                                </p>


                                <p><i class="fa-solid fa-phone"></i>
                                                    <?php the_field("tel"); ?>
                                                </p>

                                <p>URL:
                                                    <a href="<?php the_field("url"); ?>" target="_blank">
                                                        <?php the_field("url"); ?>
                                                    </a>
                                                </p>

                            </div>
                        </div>
                    </a>
                </div>

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
