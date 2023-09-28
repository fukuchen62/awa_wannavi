"use strict";

$(function () {
    // ボタンがクリックされたら発動
    $(".hamburger-menu-btn").on("click", function () {
        // ドロワーメニュー部分のアニメーション
        $(".hamburger-menu-content").toggleClass("is-active");
        // ボタン部分のアニメーション
        $(".hamburger-menu-btn").toggleClass("is-active");
    });
});

// リンクをクリックするとメニューが閉じる
$(function () {
    $(".globalnavi a").click(function () {
        if (
            // もし.menu-btnと.menuの要素が.is-activeを持っていたら
            $(".hamburger-menu-btn").hasClass("is-active") &&
            $(".hamburger-menu-content").hasClass("is-active")
        ) {
            // .menu-btnと.menuの要素から.is-activeを外す
            $(".hamburger-menu-btn").removeClass("is-active");
            $(".hamburger-menu-content").removeClass("is-active");
        }
    });
});

$(function () {
    let headerHeight = $('nav').outerHeight(); // ヘッダーについているID、クラス名など、余白を開けたい場合は + 10を追記する。
    let urlHash = location.hash; // ハッシュ値があればページ内スクロール
    if (urlHash) { // 外部リンクからのクリック時
        $('body,html').stop().scrollTop(); // スクロールを0に戻す
        setTimeout(function () { // ロード時の処理を待ち、時間差でスクロール実行
            var target = $(urlHash);
            var position = target.offset().top - headerHeight;
            $('body,html').stop().animate({ scrollTop: position }, 500); // スクロール速度ミリ秒
        }, 100);
    }
    $('a[href^="#"]').click(function () { // 通常のクリック時
        let href = $(this).attr("href"); // ページ内リンク先を取得
        let target = $(href);
        let position = target.offset().top - headerHeight;
        $('body,html').stop().animate({ scrollTop: position }, 500); // スクロール速度ミリ秒
        return false; // #付与なし、付与したい場合は、true
    });
});

window.addEventListener('scroll', () => {
    const y = window.scrollY;
});
// 動きのきっかけとなるアニメーションの名前を定義
function fadeAnime() {

    // ふわっ
    $('.fadeUpTrigger').each(function () { //fadeUpTriggerというクラス名が
        var elemPos = $(this).offset().top - 50;//要素より、50px上の
        var scroll = $(window).scrollTop();
        var windowHeight = $(window).height();
        if (scroll >= elemPos - windowHeight) {
            $(this).addClass('fadeUp');// 画面内に入ったらfadeUpというクラス名を追記
        } else {
            // $(this).removeClass('fadeUp');// 画面外に出たらfadeUpというクラス名を外す
        }
    });
}

// 画面をスクロールをしたら動かしたい場合の記述
$(window).scroll(function () {
    fadeAnime();/* アニメーション用の関数を呼ぶ*/
});// ここまで画面をスクロールをしたら動かしたい場合の記述

// 画面が読み込まれたらすぐに動かしたい場合の記述
$(window).on('load', function () {
    fadeAnime();/* アニメーション用の関数を呼ぶ*/
});// ここまで画面が読み込まれたらすぐに動かしたい場合の記述


/***************************
to top scroll
***************************/
$('.toTop').click(function () {
    $('body,html').stop(true, true).animate({
        scrollTop: 0
    }, 400);
    return false;
});
