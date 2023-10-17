"use strict";

// // ウィンドウの幅に応じて画像を切り替える関数
// function updateImage() {
//     const windowWidth = window.innerWidth;
//     const imgElement = document.getElementById("responsive-image");

//     if (windowWidth < 768) {
//         imgElement.src = "<?php echo get_template_directory_uri(); ?>/assets/img/common/footer_imgshiba_sp.svg";
//     } else {
//         imgElement.src = "<?php echo get_template_directory_uri(); ?>/assets/img/common/footer_imgshiba_pc.svg";

//     }
// }

// // 初期表示とウィンドウのリサイズ時に画像を更新
// window.addEventListener("DOMContentLoaded", updateImage);
// window.addEventListener("resize", updateImage);


// ウィンドウの幅に応じて画像を表示または非表示にする関数
function updateImages() {
    const windowWidth = window.innerWidth;
    const imageContainer = document.querySelector(".image-container");
    const initialImages = imageContainer.querySelectorAll(".initial-image");
    const largeScreenImages = imageContainer.querySelectorAll(".large-screen");

    // ウィンドウの幅によって初めに表示される画像と後から表示される5枚の画像の表示/非表示を切り替える
    if (windowWidth >= 768) {
        initialImages.forEach(img => {
            img.style.display = "none"; // 768px以上の場合は初めの画像を非表示
        });
        largeScreenImages.forEach(img => {
            img.style.display = "flex"; // 768px以上の場合は後から表示される画像を表示
        });
    } else {
        initialImages.forEach(img => {
            img.style.display = "block"; // 768px未満の場合は初めの画像を表示
        });
        largeScreenImages.forEach(img => {
            img.style.display = "none"; // 768px未満の場合は後から表示される画像を非表示
        });
    }
}

// ウィンドウの読み込み完了とウィンドウのリサイズ時に画像を更新
window.addEventListener("DOMContentLoaded", updateImages);
window.addEventListener("resize", updateImages);

// 最初の表示時にも実行
updateImages();

// ウィンドウの幅に応じてテキストを表示または非表示にする関数
function updateText() {
    const windowWidth = window.innerWidth;
    const textContainer = document.querySelector(".footercolor");
    const initialText = textContainer.querySelector(".footer-text");
    const largeScreenText = textContainer.querySelector(".footer-largetext");

    // ウィンドウの幅によって追加のテキストの表示/非表示を切り替える
    if (windowWidth >= 768) {
        initialText.style.display = "none"; // 768px以上の場合は初期のテキストを非表示
        largeScreenText.style.display = "flex"; // 768px以上の場合は追加のテキストを表示
    } else {
        initialText.style.display = "block"; // 768px未満の場合は初期のテキストを表示
        largeScreenText.style.display = "none"; // 768px未満の場合は追加のテキストを非表示
    }
}

// ウィンドウの読み込み完了とウィンドウのリサイズ時にテキストを更新
window.addEventListener("DOMContentLoaded", updateText);
window.addEventListener("resize", updateText);

// 最初の表示時にも実行
updateText();

// ＝＝＝フッター＝＝＝

// あわまるを、スクロールしたら表示させる

// $(function () {
//     var topBtn = $('.foot_scroll');
//     topBtn.hide();
//     //スクロールが1000に達したらボタン表示
//     $(window).scroll(function () {
//         if ($(this).scrollTop() > 1000) {
//             topBtn.fadeIn();
//         } else {
//             topBtn.fadeOut();
//         }
//     });
// });

// あわまる
$(document).ready(function () {
    $(".awamaru").hide(); // 初期状態で非表示にします

    $(window).scroll(function () {
        var scrollTop = $(window).scrollTop(),
            docHeight = $(document).height(),
            winHeight = $(window).height(),
            scrollPercent = (scrollTop) / (docHeight - winHeight),
            scrollPercentRounded = Math.round(scrollPercent * 100);

        if (scrollPercentRounded > 90) {
            $(".awamaru").show(); // 90%以上で要素を表示
            $(".awamaru_commentbox").show(); // 90%以上で要素を表示
            $(".awamaru_comment").show(); // 90%以上で要素を表示
        } else {
            $(".awamaru").hide(); // 90%未満で要素を非表示
            $(".awamaru_commentbox").hide(); // 90%未満で要素を非表示
            $(".awamaru_comment").hide(); // 90%未満で要素を非表示
        }
    });
});

// あわまるを押すと吹き出しが出て、もう一度押すと２秒かけて消える

$(function () {

    // ボタンをクリックしたら発動
    $('.awamaru').click(function () {

        // 連打で暴走しないようにstop()も設定
        $('.awamaru_commentset').stop().slideToggle(-100);
        // あわまるにクラス追加
        $(".awamaru").toggleClass("is-active")
        $(".awamaru_commentset").toggleClass("is-active")
        // alert("クリックされました");
        $('awamaru_trivia').css({
            'display': 'block',
        });

    });
});
// あわまるをクリックする度に「現れてしゃべる」と「隠れる」を交互に繰り返す

$.fn.clickToggle = function (a, b) {
    return this.each(function () {
        var clicked = false;
        $(this).on('click', function () {
            clicked = !clicked;
            if (clicked) {
                return b.apply(this, arguments);
            }
            return a.apply(this, arguments);
        });
    });
};


$('.awamaru').clickToggle(function () {
    //   // １回目のクリック
    // $(".awamaru").animate({ "marginLeft": "+=60px", }, 500);
    // $(".awamaru").animate({ "rotate": "0deg", }, 500);


    // $(".awamaru").animate({ "marginLeft": "-=60px", }, 500);
    // $(".awamaru").animate({ "rotate": "45deg", }, 500);

}, function () {
    //   // ２回目のクリック
    // $(".awamaru").animate({ "marginLeft": "-=60px", }, 500);
    // $(".awamaru").animate({ "rotate": "45deg", }, 500);

    // $(".awamaru").animate({ "marginLeft": "+=60px", }, 500);
    // $(".awamaru").animate({ "rotate": "0deg", }, 500);
});

// トップへ戻る

// $(function () {
//     var topBtn = $('#scroll');
//     topBtn.hide();
//     //スクロールが5000に達したらボタン表示
//     $(window).scroll(function () {
//         if ($(this).scrollTop() > 4500) {
//             topBtn.fadeIn();
//         } else {
//             topBtn.fadeOut();
//         }
//     });
// });

$('#scroll').click(function () {
    $('body, html').animate({ scrollTop: 0 }, 500);
});

// // ページトップボタン
// $(function () {
//     const pageTop = $("#page-top");
//     pageTop.hide();
//     $(window).scroll(function () {
//         if ($(this).scrollTop() > 5500) {
//             pageTop.fadeIn();
//         } else {
//             pageTop.fadeOut();
//         }
//     });
//     pageTop.click(function () {
//         $("body,html").animate(
//             {
//                 scrollTop: 0,
//             },
//             100
//         );
//         return false;
//     });
//     // フッター手前でストップ
//     $("#page-top").hide();
//     $(window).on("scroll", function () {
//         let scrollHeight = $(document).height();
//         let scrollPosition = $(window).height() + $(window).scrollTop();
//         let footHeight = $("footer").innerHeight();
//         if (scrollHeight - scrollPosition <= footHeight) {
//             $("#page-top").css({
//                 position: "absolute",
//                 bottom: footHeight,
//             });
//         } else {
//             $("#page-top").css({
//                 position: "fixed",
//                 bottom: "0",
//             });
//         }
//     });
// });

// トップへ戻るボタン
$(document).ready(function () {
    $("#scroll").hide(); // 初期状態で非表示にします

    $(window).scroll(function () {
        var scrollTop = $(window).scrollTop(),
            docHeight = $(document).height(),
            winHeight = $(window).height(),
            scrollPercent = (scrollTop) / (docHeight - winHeight),
            scrollPercentRounded = Math.round(scrollPercent * 100);

        if (scrollPercentRounded > 90) {
            $("#scroll").show(); // 90%以上で要素を表示
        } else {
            $("#scroll").hide(); // 90%未満で要素を非表示
        }
    });
});

let mames = [
    "土佐犬みたいに徳島にも阿波犬っていたって知ってるワン？",
    "祖谷のかずら橋は3年ごとに架け替えられてるワン",
    "鳴門のうずしおは発生する時間が違うワン",
    "日本一低い山は徳島県にある「弁天山」だワン！",
    "実は電車は走っていなくて、全て汽車だワン！",
    "電車が無いから、駅に自動改札が一台もないワン",
    "スダチだけじゃなくて柚子もたくさん取れるワン",
    "徳島県は、スポーツ射撃がすごく強いワン",
    "「日本一入館料が高い」と言われる美術館があるワン",
    "かずら橋は「祖谷のかずら橋」と「奥祖谷二重かずら橋」の２箇所あるワン",
    "日本百名山にも名を連ねている「剣山」は西日本2位だワン",
    "あわまるの阿波弁講座<br>　「せこい」は「お腹いっぱい」だワン",
    "あわまるの阿波弁講座<br>　「ごっつい」は「すごい」だワン！ごっついワン",
    "あわまるの阿波弁講座<br>　「おとろしい」は「恐ろしい」だワン",
    "あわまるの阿波弁講座<br>　「もんてきぃ」は「帰っておいで」だワン",
    "あわまるの阿波弁講座<br>　「いける？」は「大丈夫？」だワン!どこにも行かないワン",
    "あわまるの阿波弁講座<br>　「かんまん」は「かまわない」だワン",
    "あわまるの阿波弁講座<br>　「あるでないで」は「あるじゃないか」だワン",
    "あわまるの阿波弁講座<br>　「えっとぶりで～」は「久しぶりだね～」だワン",
    "あわまるの阿波弁講座<br>　「おもっしょい」は「おもしろい」だワン",
    "あわまるの阿波弁講座<br>　「こんまいワンちゃん」は「小さいワンちゃん」だワン",
    "あわまるの阿波弁講座<br>　「しわしわいきよ～」は「ゆっくり行きなよ～」だワン",
];

function msgOutput() {
    let r = Math.floor(Math.random() * mames.length);
    document.getElementById("awamaru_comment").innerHTML = mames[r];
}

document.getElementById("awamaru").addEventListener("click", msgOutput);
