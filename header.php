<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Zen+Maru+Gothic&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cherry+Bomb+One&family=Zen+Maru+Gothic&display=swap" rel="stylesheet">

    <!-- <title>ヘッダー</title> -->

    <?php
    // wp_head()を呼び出す
    wp_head();
    ?>
</head>

<body <?php body_class(); ?>>

    <!-- wp_body_open()を呼び出す -->
    <?php wp_body_open(); ?>

    <!-- header開始 -->
    <header>
        <div class="wrapper">
            <div class="header__logo">
                <h1 class="js__title__logo">
                    <a href="<?php echo home_url(); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/AwAwanlogo.svg" alt="AwAワンNaviわんこと一緒徳島の自然の中でのびのびたのしもう">
                    </a>
                </h1>
            </div>
            <!-- headerナビゲーション -->
            <btn class="hamburger__menu__btn"><span></span></btn>
            <nav class="gnav__menu__content">
                <div class="gnav__menu__content__inner">
                    <!-- 検索フォーム -->
                    <div class="form__box">
                        <form action="" method="get" class="header__search">
                            <!---- name="s"サーチのs 決まっている文字 -->
                            <input class="form__input" type="text" name="s" value="" maxlength="20" placeholder="Search">
                            <button class="form__button lupe" value="">
                                <!-- <span></span>
                                <span></span> -->
                                <i class=" lupe fa-solid fa-magnifying-glass"></i>
                            </button>
                        </form>
                    </div>
                    <ul class="menu__wrap">
                        <li class="gnav"><a class="gnav__search__sp__title" href="">条件検索</a>
                            <div class="gnav__search__sp">
                                <span></span>
                                <span></span>
                            </div>
                            <ul class="menu__item__search__wrap__sp">
                                <a class="menu__item__search__sp" href="">
                                    <li>検索</li>
                                    <span></span>
                                </a>
                            </ul>
                        </li>
                    </ul>
                </div>
                <ul class="menu__wrap">
                    <li class="gnav">
                        <span class="gnav__title">遊ぶ</span>
                        <div class="gnav__icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/menu/sp_mega_asobu01.jpg" alt="犬">
                        </div>
                        <ul class="menu__item__wrap">
                            <li class="menu__item">
                                <a href="<?php echo home_url('/enjoy_type/park/'); ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/menu/img_mega_asobu01.jpg" alt="犬">
                                    <dl>
                                        <dt>公園</dt>
                                        <dd>わんちゃんと一緒に遊べる公園を紹介！</dd>
                                    </dl>
                                </a>
                            </li>
                            <li class="menu__item">
                                <a href="<?php echo home_url('/enjoy_type/dogrun/'); ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/menu/img_mega_asobu02.jpg" alt="犬">
                                    <dl>
                                        <dt>ドッグラン</dt>
                                        <dd>徳島県内のドッグランをご紹介します</dd>
                                    </dl>
                                </a>
                            </li>
                            <li class="menu__item">
                                <a href="<?php echo home_url('/enjoy_type/outdoor/'); ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/menu/img_mega_asobu03.jpg" alt="犬">
                                    <dl>
                                        <dt>自然・観光</dt>
                                        <dd>わんちゃんと遊べる大自然や観光スポットのご紹介</dd>
                                    </dl>
                                </a>
                            </li>
                            <li class="menu__item">
                                <a href="<?php echo home_url('/enjoy_type/indoor/'); ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/menu/img_mega_asobu04.jpg" alt="犬">
                                    <dl>
                                        <dt>屋内施設</dt>
                                        <dd>屋内ドッグランやペットショップ等の商業施設をご紹介</dd>
                                    </dl>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="menu__wrap">
                    <li class="gnav">
                        <span class="gnav__title">泊まる</span>
                        <div class="gnav__icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/menu/sp_mega_tomaru01.jpg" alt="犬">
                        </div>
                        <ul class="menu__item__wrap stay__wrap">
                            <li class="menu__item">
                                <a href="<?php echo home_url('/stay_type/pethotel/'); ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/menu/img_mega_tomaru01.jpg" alt="犬">
                                    <dl>
                                        <dt>ホテル</dt>
                                        <dd>かわいいわんちゃんを安心して預けられるホテルをご紹介</dd>
                                    </dl>
                                </a>
                            </li>
                            <li class="menu__item">
                                <a href="<?php echo home_url('/stay_type/hotel/'); ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/menu/img_mega_tomaru02.jpg" alt="犬">
                                    <dl>
                                        <dt>ペットと宿泊</dt>
                                        <dd>わんちゃんと一緒に泊まれる宿泊施設をご紹介</dd>
                                    </dl>
                                </a>
                            </li>
                            <li class="menu__item">
                                <a href="<?php echo home_url('/stay_type/camp/'); ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/menu/img_mega_tomaru03.jpg" alt="犬">
                                    <dl>
                                        <dt>キャンプ</dt>
                                        <dd>大自然の中でわんちゃんと楽しもう！</dd>
                                    </dl>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="menu__wrap">
                    <li class="gnav">
                        <span class="gnav__title">食べる</span>
                        <div class="gnav__icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/menu/sp_mega_taberu01.jpg" alt="犬">
                        </div>
                        <ul class="menu__item__wrap eat__wrap">
                            <li class="menu__item">
                                <a href="<?php echo home_url('/eat_type/cafe/'); ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/menu/img_mega_taberu01.jpg" alt="犬">
                                    <dl>
                                        <dt>ドッグカフェ</dt>
                                        <dd>わんちゃん専用メニューをご用意！</dd>
                                    </dl>
                                </a>
                            </li>
                            <li class="menu__item">
                                <a href="<?php echo home_url('/eat_type/restaurant/'); ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/menu/img_mega_taberu02.jpg" alt="犬">
                                    <dl>
                                        <dt>ペットと食事</dt>
                                        <dd>わんちゃんと一緒においしく食べよう！</dd>
                                    </dl>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="menu__wrap">
                    <li class="gnav"><span class="gnav__title">モデルコース</span>
                        <div class="gnav__icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/menu/sp_mega_model01.jpg" alt="犬">
                        </div>
                        <ul class="menu__item__wrap model__course__wrap">
                            <li class="menu__item">
                                <a href="<?php echo home_url('/course/co01/'); ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/menu/img_mega_model01.jpg" alt="犬">
                                    <dl>
                                        <dt>川コース</dt>
                                        <dd>徳島の川の魅力を一緒に楽しもう</dd>
                                    </dl>
                                </a>
                            </li>
                            <li class="menu__item">
                                <a href="<?php echo home_url('/course/co02/'); ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/menu/img_mega_model02.jpg" alt="犬">
                                    <dl>
                                        <dt>海コース</dt>
                                        <dd>徳島の海の魅力を一緒に楽しもう</dd>
                                    </dl>
                                </a>
                            </li>
                            <li class="menu__item">
                                <a href="<?php echo home_url('/course/co03/'); ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/menu/img_mega_model03.jpg" alt="犬">
                                    <dl>
                                        <dt>山コース</dt>
                                        <dd>徳島の山の魅力を一緒に楽しもう</dd>
                                    </dl>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="menu__wrap">
                    <li class="gnav">
                        <span class="gnav__title" href="">おすすめ情報</span>
                        <div class="gnav__icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/menu/sp_mega_osusume01.jpg" alt="犬">
                        </div>
                        <ul class="menu__item__wrap">
                            <li class="menu__item">
                                <a href="<?php echo home_url('/special_type/manner/'); ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/menu/img_mega_osusume01.jpg" alt="犬">
                                    <dl>
                                        <dt>マナー</dt>
                                        <dd>マナーを守って、楽しくお散歩しよう！</dd>
                                    </dl>
                                </a>
                            </li>
                            <li class="menu__item">
                                <a href="<?php echo home_url('/special_type/dog-trivia/'); ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/menu/img_mega_osusume02.jpg" alt="犬">
                                    <dl>
                                        <dt>犬の豆知識</dt>
                                        <dd>わんちゃんに関する豆知識をお届けします</dd>
                                    </dl>
                                </a>
                            </li>
                            <li class="menu__item">
                                <a href="<?php echo home_url('/special_type/info/'); ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/menu/img_mega_osusume03.jpg" alt="犬">
                                    <dl>
                                        <dt>お出かけ情報</dt>
                                        <dd>わんちゃんと一緒にお出かけ！</dd>
                                    </dl>
                                </a>
                            </li>
                            <li class="menu__item">
                                <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/menu/img_mega_osusume04.jpg" alt="犬">
                                    <dl>
                                        <dt>特集</dt>
                                        <dd>インタビューやわんちゃん情報をお届けます</dd>
                                    </dl>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="menu__wrap">
                    <li class="gnav"><a class="gnav__title" href="<?php echo home_url('/search/'); ?>">検索</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- header修了 -->