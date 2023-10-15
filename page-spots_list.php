<!-- header.phpを読み込む -->
<?php get_header(); ?>

<main>

    <!-- いったんコンテナーに格納 -->
    <div class="container ">
        <!-- 帯になるコンテナーのタイトル -->
        <!-- <div class="container"> -->
        <!-- 帯の部分 -->
        <h2 class="h2__title mb20 bc_list">掲載施設一覧</h2>
        <!-- パンくずリスト -->
        <div class="Breadcrumb mb20">
            <?php get_template_part("template-parts/breadcrumb"); ?>
        </div>

        <!-- 帯の部分 -->
        <h2 class="h2__s_title bc__asobu mb20 fs35">遊ぶ</h2>

        <!-- テーブル部分 -->

        <div class="tbl__center">

            <div class="tbl__sp"></div>
            <div class="tbl__main">
                <!-- カテゴリー/公園一覧-->
                <h3 class="category bc__asobu"><i class="fa-solid fa-paw"></i>公園</h3>

                <table class="tbl__li">

                    <tr>
                        <th>名称</th>
                        <th>住所</th>
                        <th>お問い合わせ
                        </th>
                    </tr>
                    <tr class="line__solid">
                    </tr>

                    <?php
                    // カスタム投稿タイプ
                    $args = array(
                        'post_type' => 'enjoy',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'enjoy_type',
                                'field' => 'slug',
                                'terms' => 'park'
                            ),
                        ),
                        'posts_per_page' => -1,
                    );
                    // サブクエリ実行
                    $the_query =  new WP_Query($args);
                    ?>

                    <!-- 結果を表示させる -->
                    <?php if ($the_query->have_posts()) : ?>
                        <?php while ($the_query->have_posts()) : ?>
                            <?php $the_query->the_post(); ?>

                            <!-- ループ型spots適用 -->
                            <?php get_template_part('template-parts/loop', 'spots'); ?>

                        <?php endwhile; ?>
                    <?php endif; ?>

                </table>
            </div>
            <div class="list__sp"></div>
        </div>

        <!-- テーブル部分 -->

        <div class="tbl__center">

            <div class="tbl__sp"></div>
            <div class="tbl__main">
                <!-- カテゴリー/ドッグラン一覧-->
                <h3 class="category bc__asobu"><i class="fa-solid fa-paw"></i>ドッグラン</h3>

                <table class="tbl__li">
                    <tr>
                        <th>名称</th>
                        <th>住所</th>
                        <th>お問い合わせ
                        </th>
                    </tr>
                    <tr class="line__solid">
                    </tr>

                    <?php
                    // カスタム投稿タイプ
                    $args = array(
                        'post_type' => 'enjoy',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'enjoy_type',
                                'field' => 'slug',
                                'terms' => 'dogrun'
                            ),
                        ),
                        'posts_per_page' => -1,
                    );
                    // サブクエリ実行
                    $the_query =  new WP_Query($args);
                    ?>

                    <!-- 結果を表示させる -->
                    <?php if ($the_query->have_posts()) : ?>
                        <?php while ($the_query->have_posts()) : ?>
                            <?php $the_query->the_post(); ?>

                            <!-- ループ型spots適用 -->
                            <?php get_template_part('template-parts/loop', 'spots'); ?>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </table>
            </div>
            <div class="list__sp"></div>
        </div>

        <!-- テーブル部分 -->

        <div class="tbl__center">

            <div class="tbl__sp"></div>
            <div class="tbl__main">
                <!-- カテゴリー/自然観光一覧-->
                <h3 class="category bc__asobu"><i class="fa-solid fa-paw"></i>自然・観光</h3>

                <table class="tbl__li">
                    <tr>
                        <th>名称</th>
                        <th>住所</th>
                        <th>お問い合わせ
                        </th>
                    </tr>
                    <tr class="line__solid">
                    </tr>

                    <?php
                    // カスタム投稿タイプ
                    $args = array(
                        'post_type' => 'enjoy',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'enjoy_type',
                                'field' => 'slug',
                                'terms' => 'outdoor'
                            ),
                        ),
                        'posts_per_page' => -1,
                    );
                    // サブクエリ実行
                    $the_query =  new WP_Query($args);
                    ?>

                    <!-- 結果を表示させる -->
                    <?php if ($the_query->have_posts()) : ?>
                        <?php while ($the_query->have_posts()) : ?>
                            <?php $the_query->the_post(); ?>

                            <!-- ループ型spots適用 -->
                            <?php get_template_part('template-parts/loop', 'spots'); ?>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </table>
            </div>
            <div class="list__sp"></div>
        </div>

        <!-- テーブル部分 -->

        <div class="tbl__center">

            <div class="tbl__sp"></div>
            <div class="tbl__main">
                <!-- カテゴリー/屋内施設一覧-->
                <h3 class="category bc__asobu"><i class="fa-solid fa-paw"></i>屋内施設</h3>

                <table class="tbl__li">
                    <tr>
                        <th>名称</th>
                        <th>住所</th>
                        <th>お問い合わせ
                        </th>
                    </tr>
                    <tr class="line__solid">
                    </tr>

                    <?php
                    // カスタム投稿タイプ
                    $args = array(
                        'post_type' => 'enjoy',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'enjoy_type',
                                'field' => 'slug',
                                'terms' => 'indoor'
                            ),
                        ),
                        'posts_per_page' => -1,
                    );
                    // サブクエリ実行
                    $the_query =  new WP_Query($args);
                    ?>

                    <!-- 結果を表示させる -->
                    <?php if ($the_query->have_posts()) : ?>
                        <?php while ($the_query->have_posts()) : ?>
                            <?php $the_query->the_post(); ?>

                            <!-- ループ型spots適用 -->
                            <?php get_template_part('template-parts/loop', 'spots'); ?>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </table>
            </div>
            <div class="list__sp"></div>
        </div>


        <!-- 帯の部分 -->
        <h2 class="h2__s_title bc_tomaru mb20 fs35">泊まる</h2>

        <!-- テーブル部分 -->

        <div class="tbl__center">

            <div class="tbl__sp"></div>
            <div class="tbl__main">
                <!-- カテゴリー/ドッグホテル一覧-->
                <h3 class="category bc_tomaru"><i class="fa-solid fa-paw"></i>ドッグホテル</h3>

                <table class="tbl__li">
                    <tr>
                        <th>名称</th>
                        <th>住所</th>
                        <th>お問い合わせ
                        </th>
                    </tr>
                    <tr class="line__solid">
                    </tr>

                    <?php
                    // カスタム投稿タイプ
                    $args = array(
                        'post_type' => 'stay',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'stay_type',
                                'field' => 'slug',
                                'terms' => 'pethotel'
                            ),
                        ),
                        'posts_per_page' => -1,
                    );
                    // サブクエリ実行
                    $the_query =  new WP_Query($args);
                    ?>

                    <!-- 結果を表示させる -->
                    <?php if ($the_query->have_posts()) : ?>
                        <?php while ($the_query->have_posts()) : ?>
                            <?php $the_query->the_post(); ?>

                            <!-- ループ型spots適用 -->
                            <?php get_template_part('template-parts/loop', 'spots'); ?>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </table>
            </div>
            <div class="list__sp"></div>
        </div>

        <!-- テーブル部分 -->

        <div class="tbl__center">

            <div class="tbl__sp"></div>
            <div class="tbl__main">
                <!-- カテゴリー/ペットと宿泊一覧-->
                <h3 class="category bc_tomaru"><i class="fa-solid fa-paw"></i>ペットと宿泊</h3>

                <table class="tbl__li">
                    <tr>
                        <th>名称</th>
                        <th>住所</th>
                        <th>お問い合わせ
                        </th>
                    </tr>
                    <tr class="line__solid">
                    </tr>

                    <?php
                    // カスタム投稿タイプ
                    $args = array(
                        'post_type' => 'stay',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'stay_type',
                                'field' => 'slug',
                                'terms' => 'hotel'
                            ),
                        ),
                        'posts_per_page' => -1,
                    );
                    // サブクエリ実行
                    $the_query =  new WP_Query($args);
                    ?>

                    <!-- 結果を表示させる -->
                    <?php if ($the_query->have_posts()) : ?>
                        <?php while ($the_query->have_posts()) : ?>
                            <?php $the_query->the_post(); ?>

                            <!-- ループ型spots適用 -->
                            <?php get_template_part('template-parts/loop', 'spots'); ?>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </table>
            </div>
            <div class="list__sp"></div>
        </div>

        <!-- テーブル部分 -->

        <div class="tbl__center">

            <div class="tbl__sp"></div>
            <div class="tbl__main">
                <!-- カテゴリー/キャンプ一覧-->
                <h3 class="category bc_tomaru"><i class="fa-solid fa-paw"></i>キャンプ</h3>

                <table class="tbl__li">
                    <tr>
                        <th>名称</th>
                        <th>住所</th>
                        <th>お問い合わせ
                        </th>
                    </tr>
                    <tr class="line__solid">
                    </tr>

                    <?php
                    // カスタム投稿タイプ
                    $args = array(
                        'post_type' => 'stay',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'stay_type',
                                'field' => 'slug',
                                'terms' => 'camp'
                            ),
                        ),
                        'posts_per_page' => -1,
                    );
                    // サブクエリ実行
                    $the_query =  new WP_Query($args);
                    ?>

                    <!-- 結果を表示させる -->
                    <?php if ($the_query->have_posts()) : ?>
                        <?php while ($the_query->have_posts()) : ?>
                            <?php $the_query->the_post(); ?>

                            <!-- ループ型spots適用 -->
                            <?php get_template_part('template-parts/loop', 'spots'); ?>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </table>
            </div>
            <div class="list__sp"></div>
        </div>

        <!--  -->
        <!-- 帯の部分 -->
        <h2 class="h2__s_title bc_taberu mb20 fs35">食べる</h2>

        <!-- テーブル部分 -->

        <div class="tbl__center">

            <div class="tbl__sp"></div>
            <div class="tbl__main">
                <!-- カテゴリー/ドッグカフェ一覧-->
                <h3 class="category bc_taberu"><i class="fa-solid fa-paw"></i>ドッグカフェ</h3>

                <table class="tbl__li">
                    <tr>
                        <th>名称</th>
                        <th>住所</th>
                        <th>お問い合わせ
                        </th>
                    </tr>
                    <tr class="line__solid">
                    </tr>

                    <?php
                    // カスタム投稿タイプ
                    $args = array(
                        'post_type' => 'eat',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'eat_type',
                                'field' => 'slug',
                                'terms' => 'cafe'
                            ),
                        ),
                        'posts_per_page' => -1,
                    );
                    // サブクエリ実行
                    $the_query =  new WP_Query($args);
                    ?>

                    <!-- 結果を表示させる -->
                    <?php if ($the_query->have_posts()) : ?>
                        <?php while ($the_query->have_posts()) : ?>
                            <?php $the_query->the_post(); ?>

                            <!-- ループ型spots適用 -->
                            <?php get_template_part('template-parts/loop', 'spots'); ?>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </table>
            </div>
            <div class="list__sp"></div>
        </div>

        <!-- テーブル部分 -->

        <div class="tbl__center">

            <div class="tbl__sp"></div>
            <div class="tbl__main">
                <!-- カテゴリー/ペットと食事一覧-->
                <h3 class="category bc_taberu"><i class="fa-solid fa-paw"></i>ペットと食事</h3>

                <table class="tbl__li">
                    <tr>
                        <th>名称</th>
                        <th>住所</th>
                        <th>お問い合わせ
                        </th>
                    </tr>
                    <tr class="line__solid">
                    </tr>

                    <?php
                    // カスタム投稿タイプ
                    $args = array(
                        'post_type' => 'eat',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'eat_type',
                                'field' => 'slug',
                                'terms' => 'restaurant'
                            ),
                        ),
                        'posts_per_page' => -1,
                    );
                    // サブクエリ実行
                    $the_query =  new WP_Query($args);
                    ?>

                    <!-- 結果を表示させる -->
                    <?php if ($the_query->have_posts()) : ?>
                        <?php while ($the_query->have_posts()) : ?>
                            <?php $the_query->the_post(); ?>

                            <!-- ループ型spots適用 -->
                            <?php get_template_part('template-parts/loop', 'spots'); ?>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </table>
            </div>
            <div class="list__sp"></div>
        </div>

    </div>

</main>

<!-- footer.phpを読み込む -->
<?php get_footer(); ?>
