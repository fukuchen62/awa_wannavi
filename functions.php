<?php

/**
 * テーマの初期化処理
 *
 * @return void
 */
function awa_wannavi_support()
{
    /**
     * <title>タグを出力する
     */
    add_theme_support('title-tag');

    /**
     * アイキャッチ画像を使用可能にする
     */
    add_theme_support('post-thumbnails');

    /**
     * カスタムメニュー機能を使用可能にする
     */
    add_theme_support('menus');
}
add_action('after_setup_theme', 'awa_wannavi_support');


/**
 * ファイルを読み込む
 *
 *  01.リセットCSSと共通のCSS，JSを読み込む
 *  02.ページごとのCSSとJSを読み込む
 */

// -------------------------------
// 01.共通のCSSやJS，外部ファイルを読み込む
// -------------------------------
add_action('wp_enqueue_scripts', 'awa_wannavi_add_common_scripts');
function awa_wannavi_add_common_scripts()
{
    // fontawesomeのスタイルシートを読み込む
    wp_enqueue_style(
        'awa_wannavi-fontawesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css',
    );

    // 共通のCSSを読み込む
    // 01.『リセットCSS（reset.css）』
    wp_enqueue_style(
        'awa_wannavi-reset',
        get_template_directory_uri() . '/assets/css/reset.css',
        array(),
        false
    );

    // 02.『common.css』
    wp_enqueue_style(
        'awa_wannavi-common-style',
        get_template_directory_uri() . '/assets/css/common.css',
        array(),
        false
    );

    // 03.『ヘッダーのCSS（header.css）』
    wp_enqueue_style(
        'awa_wannavi-header',
        get_template_directory_uri() . '/assets/css/header.css',
        array(),
        false
    );

    // 04.『フッターのCSS（footer.css）』
    wp_enqueue_style(
        'awa_wannavi-footer',
        get_template_directory_uri() . '/assets/css/footer.css',
        array(),
        false
    );


    // 共通のJavaScriptを読み込む
    // jQueryライブラリを読み込む
    // wp_enqueue_script('jquery');

    // 00.『jQuery』
    // WordPress本体のjquery.jsを読み込まない
    wp_deregister_script('jquery');

    // JavaScriptファイルを読み込む
    // wp_enqueue_script(
    //     'jquery-min.js',
    //     'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js'
    // );

    wp_enqueue_script(
        'jquery-min.js',
        get_template_directory_uri() . '/assets/js/jquery-3.7.0.min.js',
        '',
        '',
        false
    );

    // footer.phpで定義したもの
    // トップページ専用のスライドショー用のもの
    // if (is_home()) {
    //     wp_enqueue_style(
    //         'slick-carousel',
    //         'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css',
    //     );
    //     wp_enqueue_script(
    //         'slick-carousel',
    //         'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js',
    //     );
    //     wp_enqueue_script(
    //         'bistro-calme-home',
    //         get_template_directory_uri() . '/assets/js/home.js',
    //     );
    // }

    // トップページ専用のスライドショー用のもの
    if (is_home()) {
        wp_enqueue_style(
            'slick-carousel',
            'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css',
        );
        wp_enqueue_style(
            'slick-carousel-min',
            'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css',
        );
        wp_enqueue_script(
            'awa_wannavi-slick-script',
            'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js',
        );
        // トップページ用のJS（top.js）を読み込む
        wp_enqueue_script(
            'awa_wannavi-top-script',
            get_template_directory_uri() . '/assets/js/index.js',
            '',
            '',
            true
        );
    }

    // 01.『header.js』
    wp_enqueue_script(
        'awa_wannavi-header-script',
        get_template_directory_uri() . '/assets/js/header.js',
        '',
        '',
        true
    );

    // 02.『footer.js』
    wp_enqueue_script(
        'awa_wannavi-footer-script',
        get_template_directory_uri() . '/assets/js/footer.js',
        '',
        '',
        true
    );

    // 03.『button.js』
    wp_enqueue_script(
        'awa_wannavi-button-script',
        get_template_directory_uri() . '/assets/js/button.js',
        '',
        '',
        true
    );
}


/**
 * 02.ページごとに読み込むCSS・JSを変える
 *
 */


add_action('wp_enqueue_scripts', 'awa_wannavi_add_individual_scripts');
function awa_wannavi_add_individual_scripts()
{

    //----------------------
    //  02-A:トップページ
    //----------------------
    if (is_home()) {

        //トップページのCSS（index.css）を読み込む
        wp_enqueue_style(
            'awa_wannavi-top',
            get_template_directory_uri() . '/assets/css/index.css',
            array(),
            false
        );

        //トップページのヘッダーのCSS（template_top_header.css）を読み込む
        // wp_enqueue_style('awa_nolife-template_top_header', get_template_directory_uri() . '/assets/css/template_top_header.css', array(), false);

        // //slickCSSを読み込む
        // wp_enqueue_style('slick', get_template_directory_uri() . '/assets/slick/slick.css', false);

        // //slick-themeCSSを読み込む
        // wp_enqueue_style('slick-theme', get_template_directory_uri() . '/assets/slick/slick-theme.css', false);




        // トップページ用のJS（template_top_footer.js）を読み込む
        // wp_enqueue_script('awa_nolife-template_top_footer', get_template_directory_uri() . '/assets/js/template_top_footer.js', '', '', true);

    } elseif (is_archive() || is_page('hospital') || is_page('rental_car')) {

        // 一覧ページのcss
        wp_enqueue_style(
            'awa_wannavi-list',
            get_template_directory_uri() . '/assets/css/list-type.css',
            array(),
            false
        );
    }

    //----------------------
    //  遊ぶ詳細ページ
    //----------------------
    elseif (is_singular('enjoy')) {

        //（single-enjoy.css）を読み込む
        wp_enqueue_style(
            'awa_wannavi-enjoy',
            get_template_directory_uri() . '/assets/css/single-enjoy.css',
            array(),
            false
        );
    }

    //----------------------
    //  泊まる詳細ページ
    //----------------------
    elseif (is_singular('stay')) {

        //（single-stay.css）を読み込む
        wp_enqueue_style(
            'awa_wannavi-stay',
            get_template_directory_uri() . '/assets/css/single-stay.css',
            array(),
            false
        );
    }

    //----------------------
    //  食べる詳細ページ
    //----------------------
    elseif (is_singular('eat')) {

        //（single-enjoy.css）を読み込む
        wp_enqueue_style(
            'awa_wannavi-eat',
            get_template_directory_uri() . '/assets/css/single-eat.css',
            array(),
            false
        );
    }

    //----------------------
    //  モデルコースのページ
    //----------------------
    elseif (is_singular('course')) {

        //（modelcource.css）を読み込む
        wp_enqueue_style(
            'awa_wannavi-course',
            get_template_directory_uri() . '/assets/css/modelcource.css',
            array(),
            false
        );
    }

    //----------------------
    //  プライバシーポリシー
    //----------------------
    elseif (is_page('privacy-policy')) {

        //（about.css）を読み込む
        wp_enqueue_style(
            'awa_wannavi-about',
            get_template_directory_uri() . '/assets/css/about.css',
            array(),
            false
        );
    }
}

/**
 * awa_wannavi_document_title_separator function
 * タイトルのセパレータを変更する
 *
 * @param string $separator
 * @return void
 */
function awa_wannavi_document_title_separator($separator)
{
    $separator = '|';
    return $separator;
}

add_filter(
    'document_title_separator',
    'awa_wannavi_document_title_separator'
);

/**
 * bitro_calme_document_title_parts function
 * タイトルを変更する
 *
 * @param [type] $title
 * @return void
 */
function awa_wannavi_document_title_parts($title)
{
    if (is_home()) {
        // タイトルを削除
        // unset($title['tagline']);
        // $title['title'] = "Bistro calmeは、カジュアルワインバーよりビストロです。";
    }
    return $title;
}
add_filter(
    'document_title_parts',
    'awa_wannavi_document_title_parts'
);


/**
 * awa_wannavi_comment_form_default_fields function
 * コメントの名前、Email、サイトの入力を非表示
 * @param [type] $args
 * @return void
 */
function awa_wannavi_comment_form_default_fields($args)
{
    $args['url'] = '';          //サイトを削除
    $args['author'] = '';       //名前を削除
    $args['email'] = '';        //Emailを削除

    return $args;
}
add_filter(
    'comment_form_default_fields',
    'awa_wannavi_comment_form_default_fields'
);

/**
 * awa_wannavi_pre_get_posts function
 *
 * @param [type] $query
 * @return void
 */
function awa_wannavi_pre_get_posts($query)
{
    // 管理画面、またはメインクエリ以外には　設定しない
    if (is_admin() || !$query->is_main_query()) {
        return;         //関数から抜ける
    }

    //トップページの場合は
    if ($query->is_home()) {
        $query->set('category_name', 'news');   //カテゴリ―はニュースにする
        $query->set('posts_per_page', 3);   //1ぺージに表示件数３とする
        return;         //関数から抜ける
    }
}
add_action(
    'pre_get_posts',
    'awa_wannavi_pre_get_posts'
);