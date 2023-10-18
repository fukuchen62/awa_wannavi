<!-- header.phpを読み込む -->
<?php get_header(); ?>

<main class="container">

    <h2 class="mypage_title">マイページ</h2>
    <!-- パンくずリスト -->
    <?php get_template_part("template-parts/breadcrumb"); ?>



    <div class="explanation explanation2">
        <p>1. 本マイページはこのサイトにてご紹介した『遊ぶ』『泊る』『食べる』の施設等を ブックマークし参照することができます。</p>
        <p> 2. 訪れた場所をgoogleマップで参照できます。</p>
        <p>3.ブックマークにはCookieを使用しています。</p>
        <p>4.Cookieの削除に伴いブックマークした情報も削除されます。</p>
    </div>

    <!-- 一つ目のカテゴリのカード群 -->
    <!-- コンテンツのサブタイトル -->
    <h2 class="sub__title2 mb20 bgGL">
        <i class="fa-solid fa-paw"></i> お気に入りした<br>
        遊ぶの施設
    </h2>
    <!-- <div class="next__info tr2 ">
        <a href="">>>〇〇件</a>
    </div> -->
    <!-- カード型コンテンツまとめ -->
    <div class="card__contents mw12">

        <?php
        if (function_exists('get_user_favorites')) :
            // code...
            $favorites = get_user_favorites();
            krsort($favorites);

            // print_r($favorites);

            if ($favorites) :
                $the_query = new WP_Query([
                    'post_type' => 'enjoy',
                    'posts_per_page' => -1,
                    'ignore_sticky_posts' => true,
                    'post__in' => $favorites,
                    'orderby' => 'post__in',
                ]);
                if ($the_query->have_posts()) :
                    while ($the_query->have_posts()) :
                        $the_query->the_post();

                        // マップ用
                        // $latitude = SCF::get('latitude'); // 緯度のフィールド名latitude
                        // $longitude = SCF::get('longitude'); // 経度のフィールド名longitude
                        // $text = esc_html(SCF::get('event_name')); // 体験の名前のフィールド名event_name

                        // $latitude = get_field('latitude'); // 緯度のフィールド名latitude
                        // $longitude = get_field('longitude'); // 経度のフィールド名longitude
                        // $text = esc_html(get_field('event_name')); // 体験の名前のフィールド名event_name

                        // $events['lat'][] = $latitude;
                        // $events['lng'][] = $longitude;
                        // $events['text'][] = $text;
        ?>

        <!-- カード型 -->
        <div class="card">
            <a href="#">
                <!-- 背面 -->
                <div class="card__back"></div>
                <!-- 前面 -->
                <div class="card__front">
                    <!-- カード内情報 -->
                    <!-- サムネイルの取得 -->
                    <a href="<?php the_permalink(); ?>">
                        <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail("medium"); ?>
                        <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/noimage_600x400.png" alt="">
                        <?php endif; ?>
                    </a>
                    <div class="card__tag bgGL">
                        <p>遊ぶ</p>
                    </div>
                    <h2 class="card__outline"><?php the_title(); ?></h2>
                    <div class="card__line"></div>
                    <div class="card__textarea">
                        <dl>
                            <dd>●住所：</dd>
                            <dd><?php the_field("address"); ?></dd>
                        </dl>
                        <dl>
                            <dd>●お問い合わせ：</dd>
                            <dd><?php the_field("tel"); ?></dd>
                        </dl>
                        <!-- <dl class="card__url">
                                <dd>●URL：</dd>
                                <dd><a href="<?php the_field("url"); ?>"><?php the_field("url"); ?></a></dd>
                            </dl> -->
                    </div>
                </div>
            </a>
        </div>

        <?php
                    // $event_count++;
                    // end ループ while
                    endwhile;
                    wp_reset_postdata();
                    // else :
                    ?>


        <?php
                else :

                endif;
            endif;
        // end favorites
        endif;
        // print_r($events);
        // print_r($event_count);
        ?>
    </div>

    <!-- <button id="btn__tokushima" class="more-button">
        MORE
    </button> -->


    <!-- コンテンツのサブタイトル -->
    <h2 class="sub__title2 mb20 bgBL">
        <i class="fa-solid fa-paw"></i> お気に入りした<br>
        泊るの施設
    </h2>

    <!-- <div class="next__info tr2"><a href="">>>〇〇件</a></div> -->

    <!-- 2つめのカテゴリ -->

    <!-- カード型コンテンツまとめ -->
    <div class="card__contents mw12">

        <?php
        if (function_exists('get_user_favorites')) :
            // code...
            $favorites = get_user_favorites();
            krsort($favorites);

            // print_r($favorites);

            if ($favorites) :
                $the_query = new WP_Query([
                    'post_type' => 'stay',
                    'posts_per_page' => -1,
                    'ignore_sticky_posts' => true,
                    'post__in' => $favorites,
                    'orderby' => 'post__in',
                ]);
                if ($the_query->have_posts()) :
                    while ($the_query->have_posts()) :
                        $the_query->the_post();

                        // マップ用
                        // $latitude = SCF::get('latitude'); // 緯度のフィールド名latitude
                        // $longitude = SCF::get('longitude'); // 経度のフィールド名longitude
                        // $text = esc_html(SCF::get('event_name')); // 体験の名前のフィールド名event_name

                        // $latitude = get_field('latitude'); // 緯度のフィールド名latitude
                        // $longitude = get_field('longitude'); // 経度のフィールド名longitude
                        // $text = esc_html(get_field('event_name')); // 体験の名前のフィールド名event_name

                        // $events['lat'][] = $latitude;
                        // $events['lng'][] = $longitude;
                        // $events['text'][] = $text;
        ?>


        <!-- カード型 -->
        <div class="card">
            <a href="#">
                <!-- 背面 -->
                <div class="card__back"></div>
                <!-- 前面 -->
                <div class="card__front">
                    <!-- カード内情報 -->
                    <!-- サムネイルの取得 -->
                    <a href="<?php the_permalink(); ?>">
                        <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail("medium"); ?>
                        <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/noimage_600x400.png" alt="">
                        <?php endif; ?>
                    </a>
                    <div class="card__tag bgBL">
                        <p>泊まる</p>
                    </div>
                    <h2 class="card__outline"><?php the_title(); ?></h2>
                    <div class="card__line"></div>
                    <div class="card__textarea">
                        <dl>
                            <dd>●住所：</dd>
                            <dd><?php the_field("address"); ?></dd>
                        </dl>
                        <dl>
                            <dd>●お問い合わせ：</dd>
                            <dd><?php the_field("tel"); ?></dd>
                        </dl>
                        <!-- <dl class="card__url">
                                <dd>●URL：</dd>
                                <dd><a href="<?php the_field("url"); ?>"><?php the_field("url"); ?></a></dd> -->
                        </dl>
                    </div>
                </div>
            </a>
        </div>

        <?php
                    // $event_count++;
                    // end ループ while
                    endwhile;
                    wp_reset_postdata();
                    // else :
                    ?>

        <?php
                else :

                endif;
            endif;
        // end favorites
        endif;
        // print_r($events);
        // print_r($event_count);
        ?>
    </div>

    <!-- <button id="btn__east" class="more-button">
        MORE
    </button> -->

    <!-- コンテンツのサブタイトル -->
    <h2 class="sub__title2 mb20 bgPK"><i class="fa-solid fa-paw"></i> お気に入りした<br>食べるの施設</h2>

    <!-- <div class="next__info tr2"><a href="">>>〇〇件</a></div> -->

    <!-- ３つめのカテゴリ -->

    <!-- カード型コンテンツまとめ -->
    <div class="card__contents mw12">

        <?php
        if (function_exists('get_user_favorites')) :
            // code...
            $favorites = get_user_favorites();
            krsort($favorites);

            // print_r($favorites);

            if ($favorites) :
                $the_query = new WP_Query([
                    'post_type' => 'eat',
                    'posts_per_page' => -1,
                    'ignore_sticky_posts' => true,
                    'post__in' => $favorites,
                    'orderby' => 'post__in',
                ]);
                if ($the_query->have_posts()) :
                    while ($the_query->have_posts()) :
                        $the_query->the_post();

                        // マップ用
                        // $latitude = SCF::get('latitude'); // 緯度のフィールド名latitude
                        // $longitude = SCF::get('longitude'); // 経度のフィールド名longitude
                        // $text = esc_html(SCF::get('event_name')); // 体験の名前のフィールド名event_name

                        // $latitude = get_field('latitude'); // 緯度のフィールド名latitude
                        // $longitude = get_field('longitude'); // 経度のフィールド名longitude
                        // $text = esc_html(get_field('event_name')); // 体験の名前のフィールド名event_name

                        // $events['lat'][] = $latitude;
                        // $events['lng'][] = $longitude;
                        // $events['text'][] = $text;
        ?>


        <!-- カード型 -->
        <div class="card">
            <a href="#">
                <!-- 背面 -->
                <div class="card__back"></div>
                <!-- 前面 -->
                <div class="card__front">
                    <!-- カード内情報 -->
                    <!-- サムネイルの取得 -->
                    <a href="<?php the_permalink(); ?>">
                        <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail("medium"); ?>
                        <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/noimage_600x400.png" alt="">
                        <?php endif; ?>
                    </a>
                    <div class="card__tag bgPK">
                        <p>食べる</p>
                    </div>
                    <h2 class="card__outline"><?php the_title(); ?></h2>
                    <div class="card__line"></div>
                    <div class="card__textarea">
                        <dl>
                            <dd>●住所：</dd>
                            <dd><?php the_field("address"); ?></dd>
                        </dl>
                        <dl>
                            <dd>●お問い合わせ：</dd>
                            <dd><?php the_field("tel"); ?></dd>
                        </dl>
                        <!-- <dl class="card__url">
                                <dd>●URL：</dd>
                                <dd><a href="<?php the_field("url"); ?>"><?php the_field("url"); ?></a></dd>
                                </dl> -->
                    </div>
                </div>
            </a>
        </div>

        <?php
                    // $event_count++;
                    // end ループ while
                    endwhile;
                    wp_reset_postdata();
                    // else :
                    ?>


        <?php
                else :

                endif;
            endif;
        // end favorites
        endif;
        // print_r($events);
        // print_r($event_count);
        ?>

    </div>

    <!-- <button id="btn__west" class="more-button">
        MORE
    </button> -->

    <!-- コンテンツのサブタイトル -->
    <!-- <h2 class="sub__title bgBL mb20"><i class="fa-solid fa-paw"></i>MAP表示</h2>

    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d128516.40393760444!2d134.45463388956426!3d34.074890831171494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sja!2sjp!4v1696859548408!5m2!1sja!2sjp"></iframe>" frameborder="0"></iframe>
    </div>
</main> -->

    <!-- footer.phpを読み込む -->
    <?php get_footer(); ?>