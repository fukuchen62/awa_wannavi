<!-- header.phpを読み込む -->
<?php get_header(); ?>

<main>

    <!-- いったんコンテナーに格納 -->
    <div class="container">

        <!-- トップ -->
        <section class="top top-section">
            <!-- 枠線 -->
            <div class="top__border pc">
                <!-- トップテキスト（スマホ） -->
                <img class="top__text" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/top_font_sp.svg" alt="">
                <!-- 自動スクロール文字列（PC） -->
                <div class="slider slider__text">
                    <img class="top__scroll-text" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/top_font.svg" alt="">
                    <img class="top__scroll-text" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/top_font.svg" alt="">
                </div>
                <!-- 自動スクロール画像グループ -->
                <div class="top__key-visual">
                    <div class="slider__flame slider slider__img">
                        <div><img class="top__scroll-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/top_img01.jpg" alt=""></div>
                        <div><img class="top__scroll-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/top_img02.jpg" alt=""></div>
                        <div><img class="top__scroll-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/top_img03.jpg" alt=""></div>
                        <div><img class="top__scroll-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/top_img04.jpg" alt=""></div>
                        <div><img class="top__scroll-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/top_img05.jpg" alt=""></div>
                        <div><img class="top__scroll-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/top_img06.jpg" alt=""></div>
                        <div><img class="top__scroll-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/top_img07.jpg" alt=""></div>
                    </div>
                    <div class="top__asobu-button"><a href="<?php echo home_url('/enjoy_type/park/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/top_asobu.svg" alt=""></a></div>
                    <div class="top__tomaru-button"><a href="<?php echo home_url('/stay_type/hotel/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/top_tomaru.svg" alt=""></a></div>
                    <div class="top__taberu-button"><a href="<?php echo home_url('/eat_type/cafe/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/top_taberu.svg" alt=""></a></div>
                </div>
                <div class="top__awamaru"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/top_awawan.svg" alt=""></div>
            </div>
            <!-- sp -->
            <div class="top__border--sp">
                <img class="top__border__bg" src="<?php echo get_template_directory_uri(); ?>/assets/img/home/kv_bg.png" alt="">
                <div class="top__key-visual sp">
                    <div class="slider__flame slider slider__img">
                        <div><img class="top__scroll-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/top_img01.jpg" alt=""></div>
                        <div><img class="top__scroll-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/top_img02.jpg" alt=""></div>
                        <div><img class="top__scroll-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/top_img03.jpg" alt=""></div>
                        <div><img class="top__scroll-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/top_img04.jpg" alt=""></div>
                        <div><img class="top__scroll-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/top_img05.jpg" alt=""></div>
                        <div><img class="top__scroll-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/top_img06.jpg" alt=""></div>
                        <div><img class="top__scroll-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/top_img07.jpg" alt=""></div>
                    </div>

                </div>
                <div class="top__border__btn">
                    <div class="top__asobu-button"><a href="<?php echo home_url('/enjoy_type/park/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/top_asobu.svg" alt=""></a></div>
                    <div class="top__tomaru-button"><a href="<?php echo home_url('/stay_type/hotel/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/top_tomaru.svg" alt=""></a></div>
                    <div class="top__taberu-button"><a href="<?php echo home_url('/eat_type/cafe/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/top_taberu.svg" alt=""></a></div>
                </div>
            </div>
        </section>

        <!-- ごあいさつ -->
        <section class="section mt20">
            <!-- 見出し -->
            <div class="top__outline-area">
                <h2 class="top__outline">ごあいさつ</h2>
            </div>
            <!-- ごあいさつ内容 -->
            <div class="top-greeting">
                <!-- あいさつ文 -->
                <p class="top-greeting__text">
                    平和的で人に寄り添ってくれるわんちゃんは、家族の一員として身近な存在となっています。
                    私たちの育った徳島は、豊かな自然や土地が多く、様々な場所でお散歩中のわんちゃんに出会えます。また、飼い主さんも楽しめる美味しくてワクワクなお店がいっぱいある、魅力的な場所です。
                    このサイトは 「わんこと一緒！徳島の自然の中でのびのび楽しもう」 をテーマに、徳島県でわんちゃんと一緒に楽しめる場所をご紹介します！
                    週末は、家族揃って徳島へおでかけしてみてはいかがでしょうか。
                </p>
                <img class="greeting__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/top_ill_dog01.svg" alt="">
            </div>
        </section>

        <!-- ディスクリプション -->
        <section class="top-description section tc mt20">
            <div>
                <div class="top-description__foot-img">
                    <i class="fa-solid fa-paw"></i>
                </div>
                <p class="top-description__title">
                    <i class="fa-solid fa-paw top-description__title-foot"></i>
                    ワンちゃんとおでかけしてみよう！
                    <i class="fa-solid fa-paw top-description__title-foot"></i>
                </p>
            </div>
            <a href="<?php echo home_url('/enjoy_type/park/'); ?>">
                <div class="top-description__block tc">
                    <img class="top-description__logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/top_asobu.svg" alt="">
                    <div class="top-description__text-area">
                        <h2 class="top-description__outline">ワンちゃんと思いっきりのびのび遊んでみたい！</h2>
                        <p class="top-description__text">
                            普段は近所を軽くお散歩するだけだけど
                            たまにはドッグランで走ってみたり、
                            広い公園で気持ちよくお散歩したりしてみませんか？
                        </p>
                    </div>
                    <img class="top-description__dog" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/top_ill_dog02.svg" alt="">
                </div>
            </a>
            <a href="<?php echo home_url('/stay_type/hotel/'); ?>">
                <div class="top-description__block flex-r tc">
                    <img class="top-description__logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/top_tomaru.svg" alt="">
                    <div class="top-description__text-area">
                        <h2 class="top-description__outline">ワンちゃんと一緒に泊ってみたい!</h2>
                        <p class="top-description__text">
                            いつも一緒のかわいいワンちゃん。旅先でも一緒に寝たり、ゆっくり過ごしたいですよね。
                            ワンちゃんと一緒に宿泊できる施設をご紹介します！
                        </p>
                    </div>
                    <img class="top-description__dog" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/top_ill_dog03.svg" alt="">
                </div>
            </a>
            <a href="<?php echo home_url('/eat_type/cafe/'); ?>">
                <div class="top-description__block tc">
                    <img class="top-description__logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/top_taberu.svg" alt="">
                    <div class="top-description__text-area">
                        <h2 class="top-description__outline">ワンちゃんと一緒に楽しくお食事したい！</h2>
                        <p class="top-description__text">
                            愛犬と一緒に楽しい時間が過ごせるドッグカフェや
                            ワンちゃん専用のメニューが用意されているレストラン等を
                            ご紹介。記念日にいかがですか？
                        </p>
                    </div>
                    <img class="top-description__dog" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/top_ill_dog04.svg" alt="">
                </div>
            </a>
            <img class="top-description__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/top_ill_dog03.svg" alt="">
        </section>

        <!-- 新着情報 -->
        <section class="section mt20">
            <!-- 見出し -->
            <div class="top__outline-area">
                <h2 class="top__outline">新着情報</h2>
            </div>
            <a href="<?php echo home_url('/category/news/'); ?>">
                <p class="top-news__archive-link">>>>一覧表を見る</p>
            </a>
            <!-- カード3連 -->
            <div class="top-news__card-area">

                <?php query_posts('posts_per_page=3'); ?>
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : ?>
                <?php the_post(); ?>
                <?php get_template_part('template-parts/loop', 'news'); ?>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </section>

        <!-- map -->
        <section class="top-map tc">
            <!-- 見出し -->
            <div class="top__outline-area">
                <h2 class="top__outline">施設MAP</h2>
            </div>
            <div>
                <p class="top-map__title">ドッグランや公園など、わんちゃんと遊べる施設をエリアで検索します。</p>
            </div>
            <div>
                <div class="background__map"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/top_map.jpg" alt="map">
                    <a id="tokushima__btn" class="tokushima__btn top-map__modal-open" href="">徳島市</a>
                    <a id="east__btn" class="east__btn top-map__modal-open" href="">県東部</a>
                    <a id="west_btn" class="west_btn top-map__modal-open" href="">県西部</a>
                    <a id="south__btn" class="south__btn top-map__modal-open" href="">県南部</a>
                </div>
            </div>

            <!-- モーダル本体 -->
            <div class="top-map__modal-container">
                <h2 class="top__outline mb20">施設MAP</h2>
                <div class="top-map__header">

                    <div class="top-map__btns mb20">
                        <input type="button" value="徳島市" onclick="setTokushima()">
                        <input type="button" value="東部" onclick="setEast()">
                        <input type="button" value="南部" onclick="setSouth()">
                        <input type="button" value="西部" onclick="setWest()">
                    </div>
                </div>
                <!-- 閉じるボタン -->
                <div class="top-map__modal-close">
                    <p>×</p>
                </div>

                <div class="top-map__modal-body">
                    <!-- モーダル内のコンテンツ -->
                    <div id="map" style="width:100%; height:450px"></div>

                </div>
                <!-- マーカーの凡例 -->
                <div class="top-map__modal-sample">

                    <div>遊ぶ:<img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/map_ico_01asobu.svg" alt=""></div>

                    <div>泊まる:<img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/map_ico_02tomaru.svg" alt=""></div>

                    <div>食べる:<img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/map_ico_03taberu.svg" alt=""></div>
                </div>

            </div>
            <div class="top-map__dog">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/top_ill_dog05.svg" alt="">
            </div>
        </section>

        <!-- Pickup! -->
        <section class="section tc">
            <!-- 見出し -->
            <div class="top__outline-area">
                <h2 class="top__outline">Pickup!</h2>
            </div>
            <div class="top-pickup__card-area">

                <?php
                $nearby_query = new WP_Query(
                    array(
                        'post_type' => 'special',
                        'orderby' => 'rand',
                        'posts_per_page' => '3',
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

            <img class="top-pickup__dog" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/top_ill_dog06.svg" alt="">

        </section>


        <!-- instagram -->
        <section class="section">
            <!-- 見出し -->
            <div class="top__outline-area">
                <h2 class="top__outline">Instagram</h2>
            </div>
            <div class="top-insta__insta-area">
                <?php echo do_shortcode('[instagram-feed]'); ?>
            </div>
        </section>

        <div class="top__banner__btn__wrap">
            <a class="top__banner__btn" href="<?php echo home_url('/hospital/'); ?>">動物病院一覧</a>
            <a class="top__banner__btn" href="<?php echo home_url('/spots_list/'); ?>">掲載施設一覧</a>
        </div>
    </div>
    </div>
</main>

<!-- 遊ぶ、泊まる、食べるの施設の情報を取得 -->
<?php
$args = array(
    'post_type' => array(
        'enjoy',
        'stay',
        'eat',
    ),
    'posts_per_page' => -1,             //全件表示
    'post_status'  => 'publish',
    'orderby'      => 'slug',
    'order'        => 'asc'
);
$spots_query = new WP_Query($args);

$spots = [];
// イベント数カウント
$spot_count = 0;

if ($spots_query->have_posts()) {
    while ($spots_query->have_posts()) {
        $spots_query->the_post();

        $latitude = get_field('latitude'); // 緯度latitude
        $longitude = get_field('longitude'); // 経度longitude
        $facility = esc_html(get_field('facility')); // 施設名facility
        $url = esc_html(get_permalink()); // url

        $icon_url = '';

        $post_type = get_post_type($post->ID);
        // print_r($post_type);
        switch ($post_type) {
            case 'enjoy':
                $icon_url .= 'map_ico_01asobu.svg';
                break;
            case 'stay':
                $icon_url .= 'map_ico_02tomaru.svg';
                break;
            case 'eat':
                $icon_url .= 'map_ico_03taberu.svg';
                break;
            default:
                break;
        }

        $spots['lat'][] = $latitude;
        $spots['lng'][] = $longitude;
        $spots['facility'][] = $facility;
        $spots['url'][] = $url;
        $spots['icon_url'][] = $icon_url;

        $spot_count++;
    }
}
// print_r($spots);
wp_reset_postdata();

?>

<script type="text/javascript">
var map;
var tokushima;
var east;
var west;
var south;

function setTokushima() {
    map.setCenter(tokushima);
}

function setEast() {
    map.setCenter(east);
}

function setWest() {
    map.setCenter(west);
}

function setSouth() {
    map.setCenter(south);
}

// initMap() を使って地図を埋め込む記述
function initMap() {

    const color = "black"; // ラベルの色
    const font_family = 'Kosugi Maru' //ラベルのフォント
    const font_size = "14px" //ラベルのサイズ
    // 徳島全域が入るように

    latlng = new google.maps.LatLng(34.079798787522876, 134.55043661781215);
    tokushima = new google.maps.LatLng(34.079798787522876, 134.55043661781215);
    east = new google.maps.LatLng(33.98552415068177, 134.5941004190196);
    west = new google.maps.LatLng(34.04322081830907, 133.93799051471868);
    south = new google.maps.LatLng(33.92793998879676, 134.65708931868127);

    var opts = {
        zoom: 12, // 地図のズームを指定
        center: latlng, // 地図の中心を指定
        fullscreenControl: false,
        streetViewControl: false,
        mapTypeControl: false,
        mapTypeId: google.maps.MapTypeId.ROADMAP // マップタイプの設定 ROADMAPは道路や建物などが表示される地図
    };
    // マップ生成
    map = new google.maps.Map(document.getElementById("map"), opts); // #mapに地図を埋め込む

    //console.log("この文章をコンソールに表示します");

    // マーカー生成
    // フォント変えられる
    let markers = [];
    <?php
        for ($i = 0; $i < $spot_count; $i++) {
            echo "markers[$i]={lat:";
            echo $spots['lat'][$i];
            echo ', lng:';
            echo $spots['lng'][$i];
            echo ', url:"';
            echo $spots['url'][$i];
            echo '", icon_url:"';
            echo $spots['icon_url'][$i];
            echo '", text:"';
            echo $spots['facility'][$i];
            echo "\",
                color: \"#AD7000\",
                fontFamily: 'Kosugi Maru',
                fontSize: \"14px\",
                fontWeight: \"bold\",};";
            echo "\n";
        }
        ?>

    // マーカー生成
    // マーカー生成
    for (var i = 0; i < markers.length; i++) {
        createMarker(
            markers[i].text,
            markers[i].lat,
            markers[i].lng,
            markers[i].url,
            markers[i].icon_url,
            map
        );
    }
    // マーカー表示
    //marker.setMap(map);

}

// マーカーを設定
function createMarker(name, lat, lng, url, icon_url, map) {

    var latlng = new google.maps.LatLng(lat, lng);
    var pixelOffset = new google.maps.Size(0, -40);

    var marker = new google.maps.Marker({
        position: latlng,
        icon: {
            url: '<?php echo get_template_directory_uri(); ?>/assets/img/common/' + icon_url,
            scaledSize: new google.maps.Size(40, 40),
        },
        map: map
    });

    // マーカー表示
    marker.setMap(map);

    //クリックしたら指定したurlに遷移するイベント
    marker.addListener('click', (function(url) {
        return function() {
            location.href = url;
        };
    })(url));

    // マーカーにマウスを乗せたときのイベント
    marker.addListener('mouseover', function() {
        // infoの位置
        hoverinfo = new google.maps.InfoWindow({
            map: map,
            content: name,
            noSuppress: true,
            pixelOffset: pixelOffset
        });

        hoverinfo.setPosition(latlng); // マーカーからマウスを降ろしたときのイベント
        marker.addListener('mouseout', function() {
            if (hoverinfo) {
                hoverinfo.close();
            }
        });
    });
}
</script>

<!-- callback=initMap=APIが読み込み後にinitMap()を実行 -->
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJpkrA0wadpGsq26hNJcnFOoZiKpeOTfM&callback=initMap">
</script>


<!-- footer.phpを読み込む -->
<?php get_footer();
?>
