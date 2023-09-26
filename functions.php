<?php

/**
 * テーマの初期化処理
 */
if (!function_exists('bitro_calme_setup')) {

    function bitro_calme_setup()
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
         * カスタムメニューを使用可能にする
         */
        add_theme_support('menus');
    }
}
add_action('after_setup_theme', 'bitro_calme_setup');

/**
 * スクリプトファイルを読み込む
 *
 * @return void
 */
function bitro_calme_scripts()
{
    // header.phpで定義したもの
    // fontawesomeのスタイルシートを読み込む
    wp_enqueue_style(
        'font-awesome',
        'https://use.fontawesome.com/releases/v5.6.1/css/all.css',
    );

    // 独自のCSSファイルを読み込む
    wp_enqueue_style(
        'styles-min',
        get_template_directory_uri() . '/assets/css/styles.min.css',
    );

    // jQueryを読み込む
    wp_enqueue_script('jquery');

    // JavaScriptファイルを読み込む
    wp_enqueue_script(
        'bistro-calme-main',
        get_template_directory_uri() . '/assets/js/main.js',
        '',
        '1.0',
        false
    );

    // footer.phpで定義したもの
    // トップページ専用のスライドショー用のもの
    if (is_home()) {
        wp_enqueue_style(
            'slick-carousel',
            'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css',
        );
        wp_enqueue_script(
            'slick-carousel',
            'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js',
        );
        wp_enqueue_script(
            'bistro-calme-home',
            get_template_directory_uri() . '/assets/js/home.js',
        );
    }
}
add_action('wp_enqueue_scripts', 'bitro_calme_scripts');


/**
 * bitro_calme_document_title_separator function
 * タイトルのセパレータを変更する
 *
 * @param string $separator
 * @return void
 */
function bitro_calme_document_title_separator($separator)
{
    $separator = '★';
    return $separator;
}
add_filter(
    'document_title_separator',
    'bitro_calme_document_title_separator'
);

/**
 * bitro_calme_document_title_parts function
 * タイトルを変更する
 *
 * @param [type] $title
 * @return void
 */
function bitro_calme_document_title_parts($title)
{
    if (is_home()) {
        // タイトルを削除
        unset($title['tagline']);
        $title['title'] = "Bistro calmeは、カジュアルワインバーよりビストロです。";
    }
    return $title;
}
add_filter(
    'document_title_parts',
    'bitro_calme_document_title_parts'
);


/**
 * bitro_calme_comment_form_default_fields function
 * コメントの名前、Email、サイトの入力を非表示
 * @param [type] $args
 * @return void
 */
function bitro_calme_comment_form_default_fields($args)
{
    $args['url'] = '';          //サイトを削除
    $args['author'] = '';       //名前を削除
    $args['email'] = '';        //Emailを削除

    return $args;
}
add_filter(
    'comment_form_default_fields',
    'bitro_calme_comment_form_default_fields'
);

/**
 * bitro_calme_pre_get_posts function
 *
 * @param [type] $query
 * @return void
 */
function bitro_calme_pre_get_posts($query)
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
    'bitro_calme_pre_get_posts'
);
