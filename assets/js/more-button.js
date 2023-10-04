/**
 * 阿波キャンのjsファイルをそのまま参考にしています
 * class名を変更しそのまま流用します
 */

let show = 3;                           //最初に表示する件数
let first__contents = '.c-more1';       // 対象の記事 １つ目のカテゴリー
let num = 50;                           //clickごとに表示したい件数
let secound__contents = '.c-more2';     //対象の記事 2つ目のカテゴリー
let third__contents = '.c-more3';       //対象の記事 3つ目のカテゴリー
let flag_show = true;                   //true:隠す項目ある状態、false：全表示状態

let target;
let count = 0;


jQuery(document).ready(function () {
    target = document.getElementById('navi1');
    count = target.childElementCount;
    // alert(count);

    // for (let index = 3; index < count; index++) {
    //     let child = taget.children[index];
    //     child.addClass('is-hidden');
    // }

    // ボタンを隠す
    // naviの個数をカウントして4以下ならbtn-txt1(画像)にhideのクラスを追加しボタンを隠します
    if (count < 4) {
        // alert("kjfslkfjlsdk");
        document.getElementById('btn-txt1').classList.add('hide');
    }

    //４件目から隠す処理
    // 冒頭にshow=3と定義しているので、show+1以上のコンテンツは全てhiddenで隠す
    jQuery(first__contents + ':nth-child(n + ' + (show + 1) + ')').addClass('is-hidden');

    // 表示・隠すボタンのクリック処理
    jQuery('.one').on('click', function () {

        if (flag_show) {
            // 隠すカードを表示させる
            // removeでhiddenを外す
            jQuery(first__contents + '.is-hidden').slice(0, num).removeClass('is-hidden');
            // ボタン名はopenからcloseに変更
            jQuery('.one').text('')
                // .addClass('close');
            // 表示フラグを切り替える
            flag_show = false;
        } else {
            //４件目からを隠せる処理
            // jQuery(first__contents + ':nth-child(n + ' + (show + 1) + ')').addClass('is-hidden');
            // ボタン名はopenからcloseに変更
            // jQuery('.one').text('more').addClass('open1');
            // 表示フラグを切り替える
            flag_show = true;
        }

    });



    jQuery(secound__contents + ':nth-child(n + ' + (show + 1) + ')').addClass('is-hidden');


// });

// jQuery(document).ready(function () {


    target = document.getElementById('navi2');
    count = target.childElementCount;
    // alert(count);

    // for (let index = 3; index < count; index++) {
    //     let child = taget.children[index];
    //     child.addClass('is-hidden');
    // }

    // ボタンを隠す
    if (count < 4) {
        // alert("kjfslkfjlsdk");
        document.getElementById('btn-txt2').classList.add('hide');
    }

// });



// 表示・隠すボタンのクリック処理
jQuery('.two').on('click', function () {

    if (flag_show) {
        // 隠すカードを表示させる
        jQuery(secound__contents + '.is-hidden').slice(0, num).removeClass('is-hidden');
        // ボタン名はopenからcloseに変更
        jQuery('.two').text('')
            // .addClass('close');
        // 表示フラグを切り替える
        flag_show = false;
    } else {
        //４件目からを隠せる処理
        // jQuery(secound__contents + ':nth-child(n + ' + (show + 1) + ')').addClass('is-hidden');
        // ボタン名はopenからcloseに変更
        // jQuery('.two').text('more').addClass('open2');
        // 表示フラグを切り替える
        flag_show = true;
    }

});


// jQuery(document).ready(function () {
    target = document.getElementById('camp3');
    count = target.childElementCount;
    // alert(count);

    // for (let index = 3; index < count; index++) {
    //     let child = taget.children[index];
    //     child.addClass('is-hidden');
    // }

    // ボタンを隠す
    if (count < 4) {
        // alert("kjfslkfjlsdk");
        document.getElementById('btn-txt3').classList.add('hide');
    }
// });

jQuery(third__contents + ':nth-child(n + ' + (show + 1) + ')').addClass('is-hidden');

// 表示・隠すボタンのクリック処理
jQuery('.three').on('click', function () {

    if (flag_show) {
        // 隠すカードを表示させる
        jQuery(third__contents + '.is-hidden').slice(0, num).removeClass('is-hidden');
        // ボタン名はopenからcloseに変更
        jQuery('.three').text('close').addClass('close');
        // 表示フラグを切り替える
        flag_show = false;
    } else {
        //４件目からを隠せる処理
        jQuery(third__contents + ':nth-child(n + ' + (show + 1) + ')').addClass('is-hidden');
        // ボタン名はopenからcloseに変更
        jQuery('.three').text('more').addClass('open3');
        // 表示フラグを切り替える
        flag_show = true;
    }

});

});
