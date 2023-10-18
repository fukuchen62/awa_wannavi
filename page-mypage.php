<!-- header.phpを読み込む -->
<?php get_header();

//マップ表示するための情報保存用
// lat:緯度, lng:経度, text:表示名

$spots = [];
// ブックマーク数カウント
$spot_count = 0;

?>

<main class="container">
    <div class="container pd20">
        <h2 class="mypage_title">マイページ</h2>
    </div>
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

                        $latitude = get_field('latitude'); // 緯度のフィールド名latitude
                        $longitude = get_field('longitude'); // 経度のフィールド名longitude
                        $text = esc_html(get_field('facility')); // 体験の名前のフィールド名facility

                        $spots['lat'][] = $latitude;
                        $spots['lng'][] = $longitude;
                        $spots['text'][] = $text;
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
                        $spot_count++;
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

        ?>
    </div>

    <!-- <button id="btn__tokushima" class="more-button">
        MORE
    </button> -->


    <!-- コンテンツのサブタイトル -->
    <h2 class="sub__title2 mb20 bgBL">
        <i class="fa-solid fa-paw"></i> お気に入りした<br>
        泊まるの施設
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

                        $latitude = get_field('latitude'); // 緯度のフィールド名latitude
                        $longitude = get_field('longitude'); // 経度のフィールド名longitude
                        $text = esc_html(get_field('facility')); // 体験の名前のフィールド名facility

                        $spots['lat'][] = $latitude;
                        $spots['lng'][] = $longitude;
                        $spots['text'][] = $text;
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
                        $spot_count++;
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

                        $latitude = get_field('latitude'); // 緯度のフィールド名latitude
                        $longitude = get_field('longitude'); // 経度のフィールド名longitude
                        $text = esc_html(get_field('facility')); // 体験の名前のフィールド名facility

                        $spots['lat'][] = $latitude;
                        $spots['lng'][] = $longitude;
                        $spots['text'][] = $text;
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
                        $spot_count++;
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

        ?>

    </div>

    <!-- <button id="btn__west" class="more-button">
        MORE
    </button> -->

    <!-- コンテンツのサブタイトル -->
    <h2 class="sub__title bgBL mb20"><i class="fa-solid fa-paw"></i>MAP表示</h2>

    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d128516.40393760444!2d134.45463388956426!3d34.074890831171494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sja!2sjp!4v1696859548408!5m2!1sja!2sjp"></iframe>" frameborder="0"></iframe> -->

    <section class="map mw-1200" style="margin-bottom:200px">
        <div id="map" style="width:100%; height:450px"></div>
    </section>

</main>

<script type="text/javascript">
// initMap() を使って地図を埋め込む記述
function initMap() {
    //alert("lkjfks");
    const color = "black"; // ラベルの色
    const font_family = 'Kosugi Maru' //ラベルのフォント
    const font_size = "14px" //ラベルのサイズ
    // 徳島全域が入るように
    var latlng = new google.maps.LatLng(33.9220334, 134.2203203);
    var opts = {
        zoom: 9.4, // 地図のズームを指定
        center: latlng, // 地図の中心を指定
        mapTypeId: google.maps.MapTypeId.ROADMAP // マップタイプの設定 ROADMAPは道路や建物などが表示される地図
    };
    // マップ生成
    var map = new google.maps.Map(document.getElementById("map"), opts); // #mapに地図を埋め込む

    //console.log("この文章をコンソールに表示します");

    // マーカー生成
    // フォント変えられる
    let spots = [];
    <?php
        for ($i = 0; $i < $spot_count; $i++) {
            echo "spots[${i}]={lat:";
            echo $spots['lat'][$i];
            echo ', lng:';
            echo $spots['lng'][$i];
            echo ', text:"';
            echo $spots['text'][$i];
            echo "\",
                color: \"#AD7000\",
                fontFamily: 'Kosugi Maru',
                fontSize: \"14px\",
                fontWeight: \"bold\",};";

            echo "\n";
        }
        ?>


    //コンソールテスト
    // console.log('Hello World');

    var marker = new google.maps.Marker();
    for (let i = 0; i < spots.length; i++) {
        marker = new google.maps.Marker({
            position: spots[i], // マーカーを立てる位置を指定
            label: spots[i],
            map: map, // マーカーを立てる地図を指定
        });
    }
    // マーカー表示
    marker.setMap(map);
}
</script>

<!-- callback=initMap=APIが読み込み後にinitMap()を実行 -->
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJpkrA0wadpGsq26hNJcnFOoZiKpeOTfM&callback=initMap">
</script>

<!-- footer.phpを読み込む -->
<?php get_footer(); ?>