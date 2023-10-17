<!-- header.phpを読み込む -->
<?php get_header(); ?>

<div class="container">
    <div class="bnr__head bg__course">
        <h2 class=" page__title">モデルコース</h2>
    </div>

    <!-- いったんコンテナーに格納 -->

    <!-- パンくずリスト -->
    <div class="Breadcrumb mb20">
        <?php get_template_part("template-parts/breadcrumb"); ?>
    </div>
    <!-- 県別検索ボタン -->
    <!-- 各ボタンをラップでハサミ、ホバーすると色が変わるギミック -->

    <div class="tab__wrapper mb40">
        <div class="tab__block bgYL">
            <a href="<?php echo home_url('/course/co01/'); ?>">
                <h3 class="tab__title">川コース</h3>
            </a>
        </div>

        <div class="tab__block bgYL">
            <a href="<?php echo home_url('/course/co02/'); ?>">
                <h3 class="tab__title">海コース</h3>
            </a>
        </div>

        <div class="tab__block bgYL">
            <a href="<?php echo home_url('/course/co03/'); ?>">
                <h3 class="tab__title">山コース</h3>
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
    <h2 class="h2__title bgYL"><?php the_title(); ?></h2>

    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/model-cource.png" alt="">

    <div class="start-born">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/course_ill_01.svg" alt="">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/course_ill_02.svg" alt="">
    </div>
    <div class="kakoi">
        <!-- スマホ版のモデルコースのイメージ -->
        <div class="none">
            <div class="asobu-img">
                <img class="asobu-img" src="<?php if (get_post_type(get_field('spot1')) == "enjoy") {
                                                echo get_template_directory_uri() . '/assets/img/course/course_ill_14_asobu.svg';
                                            } elseif (get_post_type(get_field('spot1')) == "stay") {
                                                echo get_template_directory_uri() . '/assets/img/course/course_ill_16_tomaru.svg';
                                            } elseif (get_post_type(get_field('spot1')) == "eat") {
                                                echo get_template_directory_uri() . '/assets/img/course/course_ill_15_taberu.svg';
                                            } ?>" alt="">
            </div>
            <div class="course-img">
                <img src="<?php
                            $val = get_post_custom_values('pic1', get_field('spot1'));
                            $img_url = wp_get_attachment_url($val[0]);
                            echo $img_url;
                            ?>" alt="">
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
                <img class="asobu-img" src="<?php if (get_post_type(get_field('spot1')) == "enjoy") {
                                                echo get_template_directory_uri() . '/assets/img/course/course_ill_14_asobu.svg';
                                            } elseif (get_post_type(get_field('spot1')) == "stay") {
                                                echo get_template_directory_uri() . '/assets/img/course/course_ill_16_tomaru.svg';
                                            } elseif (get_post_type(get_field('spot1')) == "eat") {
                                                echo get_template_directory_uri() . '/assets/img/course/course_ill_15_taberu.svg';
                                            } ?>" alt="">

                <img class=" course-img" src="
                    <?php
                    $val = get_post_custom_values('pic1', get_field('spot1'));
                    $img_url = wp_get_attachment_url($val[0]);
                    echo $img_url;
                    ?>
                " alt="">

                <!-- 施設名、施設情報 PC版 -->
                <a href="<?php echo get_permalink(get_field('spot1')); ?>">
                    <div class="model-main-pc">
                        <h2>
                            <?php
                            $val = get_post_custom_values('facility', get_field('spot1'));
                            echo $val[0];
                            ?>
                        </h2>
                        <div class="dotted-line"></div>
                        <div>
                            <p><a href="
                                <?php
                                $val = get_post_custom_values('url', get_field('spot1'));
                                echo $val[0];
                                ?>
                                " target="_blank">
                                    <?php
                                    $val = get_post_custom_values('url', get_field('spot1'));
                                    echo $val[0];
                                    ?>
                                </a>
                            </p>
                            <p>
                                <?php
                                $val = get_post_custom_values('address', get_field('spot1'));
                                echo $val[0];
                                ?>
                            </p>

                        </div>
                    </div>
                </a>
            </div>

            <img class="rightside-img1" src="<?php echo get_template_directory_uri(); ?>/assets/img/course/course_ill_11.svg" alt="">
        </div>
        <!-- 施設名、施設情報 SP版 -->
        <a href="<?php echo get_permalink(get_field('spot1')); ?>">
            <div class="model-main-sp">
                <h2><?php
                    $val = get_post_custom_values('facility', get_field('spot1'));
                    echo $val[0];
                    ?></h2>
                <div class="dotted-line"></div>
                <div>
                    <p>
                        <a href="
                                <?php
                                $val = get_post_custom_values('url', get_field('spot1'));
                                echo $val[0];
                                ?>
                                " target="_blank">
                            <?php
                            $val = get_post_custom_values('url', get_field('spot1'));
                            echo $val[0];
                            ?>
                        </a>
                    </p>
                    <p>
                        <?php
                        $val = get_post_custom_values('address', get_field('spot1'));
                        echo $val[0];
                        ?></p>
                </div>
            </div>
        </a>

        <?php if (get_field('spot2') !== "") : ?>

        <!-- スマホ版のアンダーイメージ -->
        <div class="course-under-img">
            <p><?php the_field('time1'); ?></p>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/course_ill_05.svg" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/course_ill_03.svg" alt="">
        </div>
    </div>

    <!-- スマホ版のモデルコースのイメージ -->
    <div class="none">
        <div class="asobu-img">
            <img class="asobu-img" src="<?php if (get_post_type(get_field('spot2')) == "enjoy") {
                                            echo get_template_directory_uri() . '/assets/img/course/course_ill_14_asobu.svg';
                                        } elseif (get_post_type(get_field('spot2')) == "stay") {
                                            echo get_template_directory_uri() . '/assets/img/course/course_ill_16_tomaru.svg';
                                        } elseif (get_post_type(get_field('spot2')) == "eat") {
                                            echo get_template_directory_uri() . '/assets/img/course/course_ill_15_taberu.svg';
                                        } ?>" alt="">
        </div>
        <div class="course-img">
            <img src="<?php
                        $val = get_post_custom_values('pic1', get_field('spot2'));
                        $img_url = wp_get_attachment_url($val[0]);
                        echo $img_url;
                        ?>" alt="">
        </div>
    </div>
    <!-- デスクトップ版のモデルコースイメージ -->
    <div class="side-img1">
        <div class="leftside-img1">
            <p><?php the_field('time1'); ?></p>
            <img class="fukidashi" src="<?php echo get_template_directory_uri(); ?>/assets/img/course/course_ill_05.svg" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/course_ill_22.svg" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/course_ill_07.svg" alt="">
        </div>

        <div class="center">
            <img class="asobu-img" src="<?php if (get_post_type(get_field('spot2')) == "enjoy") {
                                            echo get_template_directory_uri() . '/assets/img/course/course_ill_14_asobu.svg';
                                        } elseif (get_post_type(get_field('spot2')) == "stay") {
                                            echo get_template_directory_uri() . '/assets/img/course/course_ill_16_tomaru.svg';
                                        } elseif (get_post_type(get_field('spot2')) == "eat") {
                                            echo get_template_directory_uri() . '/assets/img/course/course_ill_15_taberu.svg';
                                        } ?>" alt="">
            <img class="course-img" src="<?php
                                            $val = get_post_custom_values('pic1', get_field('spot2'));
                                            $img_url = wp_get_attachment_url($val[0]);
                                            echo $img_url;
                                            ?>" alt="">

            <!-- 施設名、施設情報 PC版 -->
            <a href="<?php echo get_permalink(get_field('spot2')); ?>">

                <div class="model-main-pc">
                    <h2><?php
                        $val = get_post_custom_values('facility', get_field('spot2'));
                        echo $val[0];
                        ?></h2>
                    <div class="dotted-line"></div>
                    <div>
                        <p><a href="
                                <?php
                                $val = get_post_custom_values('url', get_field('spot2'));
                                echo $val[0];
                                ?>
                                " target="_blank">
                                <?php
                                $val = get_post_custom_values('url', get_field('spot2'));
                                echo $val[0];
                                ?>
                            </a></p>
                        <p><?php
                            $val = get_post_custom_values('address', get_field('spot2'));
                            echo $val[0];
                            ?></p>
                    </div>
                </div>

            </a>
        </div>
        <img class="rightside-img1" src="<?php echo get_template_directory_uri(); ?>/assets/img/course/course_ill_12.svg" alt="">
    </div>
    <!-- 施設名、施設情報 SP版 -->
    <a href="<?php echo get_permalink(get_field('spot2')); ?>">

        <div class="model-main-sp">
            <h2><?php
                $val = get_post_custom_values('facility', get_field('spot2'));
                echo $val[0];
                ?></h2>
            <div class="dotted-line"></div>
            <div>
                <p><a href="
                                <?php
                                $val = get_post_custom_values('url', get_field('spot2'));
                                echo $val[0];
                                ?>
                                " target="_blank">
                        <?php
                        $val = get_post_custom_values('url', get_field('spot2'));
                        echo $val[0];
                        ?>
                    </a></p>
                <p><?php
                    $val = get_post_custom_values('address', get_field('spot2'));
                    echo $val[0];
                    ?></p>
            </div>
        </div>
    </a>
    <?php endif; ?>

    <!-- スマホ版のアンダーイメージ -->
    <div class="course-under-img">
        <p><?php the_field('time3'); ?></p>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/course_ill_05.svg" alt="">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/course_ill_07.svg" alt="">
    </div>


    <?php if (get_field('spot3') !== "") : ?>

    <!-- スマホ版のモデルコースのイメージ -->
    <div class="none">
        <div class="asobu-img">
            <img class="asobu-img" src="<?php if (get_post_type(get_field('spot3')) == "enjoy") {
                                            echo get_template_directory_uri() . '/assets/img/course/course_ill_14_asobu.svg';
                                        } elseif (get_post_type(get_field('spot3')) == "stay") {
                                            echo get_template_directory_uri() . '/assets/img/course/course_ill_16_tomaru.svg';
                                        } elseif (get_post_type(get_field('spot3')) == "eat") {
                                            echo get_template_directory_uri() . '/assets/img/course/course_ill_15_taberu.svg';
                                        } ?>" alt="">
        </div>
        <div class="course-img">
            <img src="<?php
                        $val = get_post_custom_values('pic1', get_field('spot3'));
                        $img_url = wp_get_attachment_url($val[0]);
                        echo $img_url;
                        ?>" alt="">
        </div>
    </div>
    <!-- デスクトップ版のモデルコースイメージ -->
    <div class="side-img1">
        <div class="leftside-img1">
            <p><?php the_field('time2'); ?></p>
            <img class="fukidashi" src="<?php echo get_template_directory_uri(); ?>/assets/img/course/course_ill_05.svg" alt="">
            <img class="flower" src="<?php echo get_template_directory_uri(); ?>/assets/img/course/course_ill_17.svg" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/course_ill_22.svg" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/course_ill_09.svg" alt="">
            <img class="dogfood" src="<?php echo get_template_directory_uri(); ?>/assets/img/course/course_ill_10.svg" alt="">
        </div>

        <div class="center">
            <img class="asobu-img" src="<?php if (get_post_type(get_field('spot3')) == "enjoy") {
                                            echo get_template_directory_uri() . '/assets/img/course/course_ill_14_asobu.svg';
                                        } elseif (get_post_type(get_field('spot3')) == "stay") {
                                            echo get_template_directory_uri() . '/assets/img/course/course_ill_16_tomaru.svg';
                                        } elseif (get_post_type(get_field('spot3')) == "eat") {
                                            echo get_template_directory_uri() . '/assets/img/course/course_ill_15_taberu.svg';
                                        } ?>" alt="">
            <img class="course-img" src="<?php
                                            $val = get_post_custom_values('pic1', get_field('spot3'));
                                            $img_url = wp_get_attachment_url($val[0]);
                                            echo $img_url;
                                            ?>" alt="">

            <!-- 施設名、施設情報 PC版 -->
            <a href="<?php echo get_permalink(get_field('spot3')); ?>">

                <div class="model-main-pc">
                    <h2><?php
                        $val = get_post_custom_values('facility', get_field('spot3'));
                        echo $val[0];
                        ?></h2>
                    <div class="dotted-line"></div>
                    <div>
                        <p><a href="
                                <?php
                                $val = get_post_custom_values('url', get_field('spot3'));
                                echo $val[0];
                                ?>
                                " target="_blank">
                                <?php
                                $val = get_post_custom_values('url', get_field('spot3'));
                                echo $val[0];
                                ?>
                            </a></p>
                        <p><?php
                            $val = get_post_custom_values('address', get_field('spot3'));
                            echo $val[0];
                            ?></p>
                    </div>
                </div>
            </a>
        </div>
        <img class="rightside-img1" src="<?php echo get_template_directory_uri(); ?>/assets/img/course/course_ill_13.svg" alt="">
    </div>
    <!-- 施設名、施設情報 SP版 -->
    <a href="<?php echo get_permalink(get_field('spot3')); ?>">

        <div class="model-main-sp">
            <h2><?php
                $val = get_post_custom_values('facility', get_field('spot3'));
                echo $val[0];
                ?></h2>
            <div class="dotted-line"></div>
            <div>
                <p><a href="
                                <?php
                                $val = get_post_custom_values('url', get_field('spot3'));
                                echo $val[0];
                                ?>
                                " target="_blank">
                        <?php
                        $val = get_post_custom_values('url', get_field('spot3'));
                        echo $val[0];
                        ?>
                    </a></p>
                <p><?php
                    $val = get_post_custom_values('address', get_field('spot3'));
                    echo $val[0];
                    ?></p>
            </div>
        </div>
    </a>

    <?php endif; ?>

    <div class="kakoi">
        <!-- スマホ版のモデルコースのイメージ -->
        <div class="none">
            <div class="asobu-img">
                <img class="asobu-img" src="<?php if (get_post_type(get_field('spot4')) == "enjoy") {
                                            echo get_template_directory_uri() . '/assets/img/course/course_ill_14_asobu.svg';
                                        } elseif (get_post_type(get_field('spot4')) == "stay") {
                                            echo get_template_directory_uri() . '/assets/img/course/course_ill_16_tomaru.svg';
                                        } elseif (get_post_type(get_field('spot4')) == "eat") {
                                            echo get_template_directory_uri() . '/assets/img/course/course_ill_15_taberu.svg';
                                        } ?>" alt="">
            </div>
            <div class="course-img">
                <img src="<?php
                        $val = get_post_custom_values('pic1', get_field('spot4'));
                        $img_url = wp_get_attachment_url($val[0]);
                        echo $img_url;
                        ?>" alt="">
            </div>
        </div>
        <!-- デスクトップ版のモデルコースイメージ -->
        <div class="side-img1">
            <div class="leftside-img2">
                <p><?php the_field('time3'); ?></p>
                <img class="fukidashi" src="<?php echo get_template_directory_uri(); ?>/assets/img/course/course_ill_05.svg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/course_ill_22.svg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/course_ill_18.svg" alt="">
                <img class="flower" src="<?php echo get_template_directory_uri(); ?>/assets/img/course/course_ill_17.svg" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/course/course_ill_19.svg" alt="">
            </div>

            <div class="center">
                <img class="asobu-img" src="<?php if (get_post_type(get_field('spot4')) == "enjoy") {
                                            echo get_template_directory_uri() . '/assets/img/course/course_ill_14_asobu.svg';
                                        } elseif (get_post_type(get_field('spot4')) == "stay") {
                                            echo get_template_directory_uri() . '/assets/img/course/course_ill_16_tomaru.svg';
                                        } elseif (get_post_type(get_field('spot4')) == "eat") {
                                            echo get_template_directory_uri() . '/assets/img/course/course_ill_15_taberu.svg';
                                        } ?>" alt="">
                <img class="course-img" src="<?php
                                            $val = get_post_custom_values('pic1', get_field('spot4'));
                                            $img_url = wp_get_attachment_url($val[0]);
                                            echo $img_url;
                                            ?>" alt="">

                <!-- 施設名、施設情報 PC版 -->
                <a href="<?php echo get_permalink(get_field('spot4')); ?>">

                    <div class="model-main-pc">
                        <h2><?php
                        $val = get_post_custom_values('facility', get_field('spot4'));
                        echo $val[0];
                        ?></h2>
                        <div class="dotted-line"></div>
                        <div>
                            <p><a href="
                                <?php
                                $val = get_post_custom_values('url', get_field('spot4'));
                                echo $val[0];
                                ?>
                                " target="_blank">
                                <?php
                                $val = get_post_custom_values('url', get_field('spot4'));
                                echo $val[0];
                                ?>
                            </a></p>
                            <p><?php
                            $val = get_post_custom_values('address', get_field('spot4'));
                            echo $val[0];
                            ?></p>
                        </div>
                    </div>
                </a>
            </div>
            <img class="rightside-img1" src="<?php echo get_template_directory_uri(); ?>/assets/img/course/course_ill_20.svg" alt="">
        </div>
        <!-- 施設名、施設情報 SP版 -->
        <a href="<?php echo get_permalink(get_field('spot4')); ?>">

            <div class="model-main-sp">
                <h2><?php
                $val = get_post_custom_values('facility', get_field('spot4'));
                echo $val[0];
                ?></h2>
                <div class="dotted-line"></div>
                <div>
                    <p><a href="
                                <?php
                                $val = get_post_custom_values('url', get_field('spot4'));
                                echo $val[0];
                                ?>
                                " target="_blank">
                        <?php
                        $val = get_post_custom_values('url', get_field('spot4'));
                        echo $val[0];
                        ?>
                    </a></p>
                    <p><?php
                    $val = get_post_custom_values('address', get_field('spot4'));
                    echo $val[0];
                    ?></p>
                </div>
            </div>
        </a>

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