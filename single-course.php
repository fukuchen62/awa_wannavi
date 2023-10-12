<!-- header.phpを読み込む -->
<?php get_header(); ?>

<div class="container">
    <div class="banner__head">モデルコース</div>

    <!-- いったんコンテナーに格納 -->

    <!-- パンくずリスト -->
    <div class="Breadcrumb"><a href="">モデルコース</a>
    </div>
    <!-- 県別検索ボタン -->
    <!-- 各ボタンをラップでハサミ、ホバーすると色が変わるギミック -->

    <div class="tab__wrapper mb40">
        <div class="tab__block bgYL">
            <a href="">
                <h3 class="tab__title">ペットホテル</h3>
            </a>
        </div>

        <div class="tab__block bgYL">
            <a href="">
                <h3 class="tab__title">ペットと宿泊</h3>
            </a>
        </div>

        <div class="tab__block bgYL">
            <a href="">
                <h3 class="tab__title">キャンプ</h3>
            </a>
        </div>

    </div>

    <div class="txt__box">
        <p>徳島の豊かな自然の中で</p>
        <p>『川、海、山』をワンちゃんと一緒に楽しむコース</p>
        <p>をご紹介します。</p>
    </div>
    <!-- 県別検索終了 -->

    <!-- メインのタイトル -->
    <h2 class="h2__title bgYL">山コース</h2>

    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/model-cource.png" alt="">

    <div class="start-born">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/course_ill_01.svg" alt="">
        <h3 class="model-1">1日目</h3>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/course_ill_02.svg" alt="">
    </div>
    <div class="kakoi">
        <!-- スマホ版のモデルコースのイメージ -->
        <div class="none">
            <div class="asobu-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/course_ill_14_asobu.svg" alt="">
            </div>
            <div class="course-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/news_img-3@2x.jpg" alt="">
            </div>
        </div>
        <!-- デスクトップ版のモデルコースイメージ -->
        <div class="side-img1">
            <div class="leftside-img3">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/course_ill_01.svg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/course_ill_02.svg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/course_ill_22.svg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/course_ill_03.svg" alt="">
            </div>
            <div class="center">
                <img class="asobu-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/course/course_ill_14_asobu.svg" alt="">

                <img class="course-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/home/news_img-3@2x.jpg" alt="">

                <!-- 施設名、施設情報 PC版 -->
                <div class="model-main-pc">
                    <h2>太龍寺ロープウェイ</h2>
                    <div class="dotted-line"></div>
                    <div>
                        <p>http://www.shikoku-cable.co.jp/tairyuji/</p>
                        <p>太龍寺参拝</p>
                        <p>お土産/トイレ</p>
                        <p>道の駅鷲の里</p>
                    </div>
                </div>
            </div>

            <img class="rightside-img1" src="<?php echo get_template_directory_uri(); ?>/assets/img/course/course_ill_11.svg" alt="">
        </div>
        <!-- 施設名、施設情報 SP版 -->
        <div class="model-main-sp">
            <h2>太龍寺ロープウェイ</h2>
            <div class="dotted-line"></div>
            <div>
                <p>http://www.shikoku-cable.co.jp/tairyuji/</p>
                <p>太龍寺参拝</p>
                <p>お土産/トイレ</p>
                <p>道の駅鷲の里</p>
            </div>
        </div>
        <!-- スマホ版のアンダーイメージ -->
        <div class="course-under-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/course_ill_05.svg" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/course_ill_03.svg" alt="">
        </div>
    </div>


    <!-- スマホ版のモデルコースのイメージ -->
    <div class="none">
        <div class="asobu-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/course_ill_15_taberu.svg" alt="">
        </div>
        <div class="course-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/news_img-3@2x.jpg" alt="">
        </div>
    </div>
    <!-- デスクトップ版のモデルコースイメージ -->
    <div class="side-img1">
        <div class="leftside-img1">
            <img class="fukidashi" src="<?php echo get_template_directory_uri(); ?>/assets/img/course/course_ill_05.svg" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/course_ill_22.svg" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/course_ill_07.svg" alt="">
        </div>

        <div class="center">
            <img class="asobu-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/course/course_ill_15_taberu.svg" alt="">

            <img class="course-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/home/news_img-3@2x.jpg" alt="">

            <!-- 施設名、施設情報 PC版 -->
            <div class="model-main-pc">
                <h2>あかりカフェ</h2>
                <div class="dotted-line"></div>
                <div>
                    <p>http://www.acaricafe.com/archives/categorytairyuji/</p>
                    <p>阿南市新野町是国56</p>
                </div>
            </div>
        </div>
        <img class="rightside-img1" src="<?php echo get_template_directory_uri(); ?>/assets/img/course/course_ill_12.svg" alt="">
    </div>
    <!-- 施設名、施設情報 SP版 -->
    <div class="model-main-sp">
        <h2>あかりカフェ</h2>
        <div class="dotted-line"></div>
        <div>
            <p>http://www.acaricafe.com/archives/categorytairyuji/</p>
            <p>阿南市新野町是国56</p>
        </div>
    </div>
    <!-- スマホ版のアンダーイメージ -->
    <div class="course-under-img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/course_ill_05.svg" alt="">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/course_ill_07.svg" alt="">
    </div>


    <!-- スマホ版のモデルコースのイメージ -->
    <div class="none">
        <div class="asobu-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/course_ill_16_tomaru.svg" alt="">
        </div>
        <div class="course-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/news_img-3@2x.jpg" alt="">
        </div>
    </div>
    <!-- デスクトップ版のモデルコースイメージ -->
    <div class="side-img1">
        <div class="leftside-img1">
            <img class="fukidashi" src="<?php echo get_template_directory_uri(); ?>/assets/img/course/course_ill_05.svg" alt="">
            <img class="flower" src="<?php echo get_template_directory_uri(); ?>/assets/img/course/course_ill_17.svg" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/course_ill_22.svg" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/course_ill_09.svg" alt="">
            <img class="dogfood" src="<?php echo get_template_directory_uri(); ?>/assets/img/course/course_ill_10.svg" alt="">
        </div>

        <div class="center">
            <img class="asobu-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/course/course_ill_16_tomaru.svg" alt="">

            <img class="course-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/home/news_img-3@2x.jpg" alt="">

            <!-- 施設名、施設情報 PC版 -->
            <div class="model-main-pc">
                <h2>南阿波サンラインモビレージ</h2>
                <div class="dotted-line"></div>
                <div>
                    <p>http://www.acaricafe.com/archives/categorytairyuji/</p>
                    <p>徳島県海部郡美波町山河内明丸１−１</p>
                </div>
            </div>
        </div>
        <img class="rightside-img1" src="<?php echo get_template_directory_uri(); ?>/assets/img/course/course_ill_13.svg" alt="">
    </div>
    <!-- 施設名、施設情報 SP版 -->
    <div class="model-main-sp">
        <h2>南阿波サンラインモビレージ</h2>
        <div class="dotted-line"></div>
        <div>
            <p>http://www.acaricafe.com/archives/categorytairyuji/</p>
            <p>徳島県海部郡美波町山河内明丸１−１</p>
        </div>
    </div>



    <div class="start-born">
        <h3 class="model-1">2日目</h3>
    </div>
    <div class="kakoi">
        <!-- スマホ版のモデルコースのイメージ -->
        <div class="none">
            <div class="asobu-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/course_ill_15_taberu.svg" alt="">
            </div>
            <div class="course-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/news_img-3@2x.jpg" alt="">
            </div>
        </div>
        <!-- デスクトップ版のモデルコースイメージ -->
        <div class="side-img1">
            <div class="leftside-img2">
                <img class="fukidashi" src="<?php echo get_template_directory_uri(); ?>/assets/img/course/course_ill_05.svg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/course_ill_22.svg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/course_ill_18.svg" alt="">
                <img class="flower" src="<?php echo get_template_directory_uri(); ?>/assets/img/course/course_ill_17.svg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/course_ill_19.svg" alt="">
            </div>

            <div class="center">
                <img class="asobu-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/course/course_ill_15_taberu.svg" alt="">

                <img class="course-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/home/news_img-3@2x.jpg" alt="">

                <!-- 施設名、施設情報 PC版 -->
                <div class="model-main-pc">
                    <h2>オドリ キッチン</h2>
                    <div class="dotted-line"></div>
                    <div>
                        <p>https://odori.kitchen/</p>
                        <p>徳島県海部郡美波町山河内なか2-1</p>
                    </div>
                </div>
            </div>
            <img class="rightside-img1" src="<?php echo get_template_directory_uri(); ?>/assets/img/course/course_ill_20.svg" alt="">
        </div>
        <!-- 施設名、施設情報 SP版 -->
        <div class="model-main-sp">
            <h2>オドリ キッチン</h2>
            <div class="dotted-line"></div>
            <div>
                <p>https://odori.kitchen/</p>
                <p>徳島県海部郡美波町山河内なか2-1</p>
            </div>
        </div>

        <!-- スマホ版のアンダーイメージ -->
        <div class="course-under-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/course_ill_18.svg" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/course_ill_10.svg" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/course_ill_09.svg" alt="">
        </div>
    </div>

</div>

<!-- footer.phpを読み込む -->
<?php get_footer(); ?>
