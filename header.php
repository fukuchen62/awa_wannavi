<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    // wp_head()を呼び出す
    wp_head();
    ?>
</head>

<body <?php body_class(); ?>>

    <!-- wp_body_open()を呼び出す -->
    <?php wp_body_open(); ?>

    <header class="header">
        <div class="header_inner">
            <div class="header_logo">
                <h1><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo@2x.png" alt="BISTRO CALME"></a></h1>
            </div>

            <div class="header_desc">
                <p><?php bloginfo('description') ?></p>
            </div>

            <!-- 検索フォームを読み込む -->
            <?php get_search_form(); ?>
        </div>

        <div class="header_links">
            <!-- 自身のマークアップを活用する -->
            <nav class="gnav">
                <ul class="">
                    <li><a href="<?php echo home_url('/enjoy/'); ?>">遊ぶ</a></li>
                    <li><a href="<?php echo home_url('/stay/hotel/'); ?>">泊まる</a></li>
                    <li><a href="<?php echo home_url('/eat/cafe/'); ?>">食べる</a></li>
                    <li><a href="<?php echo home_url('/course/'); ?>">モデルコース</a></li>
                    <li><a href="<?php echo home_url('/special/'); ?>">特集記事</a></li>
                    <li><a href="<?php echo home_url('/search/'); ?>">検索</a></li>
                </ul>
            </nav>

            <!-- <nav class="gnav">
                <?php
                $args = [
                    "menu" => "global-navigation",
                    "menu_class" => "",
                    "container" => false
                ];
                wp_nav_menu($args);
                ?>
            </nav> -->
        </div>

        <svg class="header_menu" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="30" viewBox="0 0 30 30">
            <defs>
                <clipPath id="clip-path">
                    <rect width="30" height="30" fill="none" />
                </clipPath>
            </defs>
            <g clip-path="url(#clip-path)">
                <rect class="header_border header_border-1" width="30" height="2" transform="translate(0 0)" />
                <rect class="header_border header_border-2" width="30" height="2" transform="translate(0 10)" />
                <rect class="header_border header_border-3" width="30" height="2" transform="translate(0 20)" />
            </g>
        </svg>

    </header>
