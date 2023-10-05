"use strict";

let show = 3;                           //最初に表示する件数
let first__contents = '.navi1';           // 対象の記事 １つ目のカテゴリー
let second__contents = '.west';           //対象の記事 2つ目のカテゴリー
let third__contents = '.south';         //対象の記事 3つ目のカテゴリー
let flag_show_first = true;              //true:隠す項目ある状態、false：全表示状態
let flag_show_second = true;              //true:隠す項目ある状態、false：全表示状態
let flag_show_third = true;             //true:隠す項目ある状態、false：全表示状態

let num = 12;                            //clickごとに表示したい件数

// 各地域の農家数
let num_first = 0;
let num_second = 0;
let num_third = 0;

// 各地域の現在表示数 初期3とする
let show_first = 3;
let show_second = 3;
let show_third = 3;

$(document).ready(function () {

    // 1つめの処理
    // 4つ目からのカード型を非表示させる
    jQuery(first__contents + ':nth-child(n + ' + (show + 1) + ')').addClass('is-hidden');

    // 表示・隠すボタンのクリック処理
    jQuery('#btn__txt1').on('click', function () {

        if (flag_show_first) {
            // 隠すカードを表示させる
            jQuery(first__contents + '.is-hidden').slice(0, num).removeClass('is-hidden');

            // 表示数＋num
            show_first += num;
            // 全部表示済の場合は、状態を切り替える
            if (show_first >= num_first) {
                // ボタン名はもっと見るから閉じるに変更
                jQuery('#btn__txt1').text('とじる').addClass('close');

                // 表示フラグを切り替える
                flag_show_first = false;
            }

        } else {
            //４件目からを隠せる処理
            jQuery(first__contents + ':nth-child(n + ' + (show + 1) + ')').addClass('is-hidden');
            // ボタン名はもっと見るから閉じるに変更
            jQuery('#btn__txt1').text('もっと見る').removeClass('close');
            // 表示フラグを切り替える
            flag_show_first = true;
            // 表示数リセット
            show_first = 3;
        }
    });

    // 西部の処理
    // 4つ目からのカード型を非表示させる
    jQuery(second__contents + ':nth-child(n + ' + (show + 1) + ')').addClass('is-hidden');

    // 表示・隠すボタンのクリック処理
    jQuery('#btn_west').on('click', function () {
        console.log('#btn_west');
        if (flag_show_second) {
            // 隠すカードを表示させる
            jQuery(second__contents + '.is-hidden').slice(0, num).removeClass('is-hidden');

            // 表示数＋num
            show_second += num;
            if (show_second >= num_second) {
                // ボタン名はもっと見るから閉じるに変更
                jQuery('#btn_west').text('とじる').addClass('close');
                // 表示フラグを切り替える
                flag_show_second = false;
            }

        } else {
            //４件目からを隠せる処理
            jQuery(second__contents + ':nth-child(n + ' + (show + 1) + ')').addClass('is-hidden');
            // ボタン名はもっと見るから閉じるに変更
            jQuery('#btn_west').text('もっと見る').removeClass('close');
            // 表示フラグを切り替える
            flag_show_second = true;
            show_second = 3;
        }
    });

    // 東部の処理
    // 4つ目からのカード型を非表示させる
    jQuery(third__contents + ':nth-child(n + ' + (show + 1) + ')').addClass('is-hidden');

    // 表示・隠すボタンのクリック処理
    jQuery('#btn_south').on('click', function () {

        if (flag_show_third) {
            // 隠すカードを表示させる
            jQuery(third__contents + '.is-hidden').slice(0, num).removeClass('is-hidden');

            // 表示数＋num
            show_third += num;
            if (show_third >= num_third) {
                // ボタン名はopenからcloseに変更
                jQuery('#btn_south').text('とじる').addClass('close');
                // 表示フラグを切り替える
                flag_show_third = false;
            }

        } else {
            //４件目からを隠せる処理
            jQuery(third__contents + ':nth-child(n + ' + (show + 1) + ')').addClass('is-hidden');
            // ボタン名はもっと見るから閉じるに変更
            jQuery('#btn_south').text('もっと見る').removeClass('close');
            // 表示フラグを切り替える
            flag_show_third = true;
            show_third = 3;
        }
    });

    // 農園の個数が3以下の場合はmoreボタンを非表示
    let target = document.getElementById('east-area');
    num_first = target.childElementCount;
    // ボタンを隠す
    if (num_first <= show) {
        $('#btn_east').addClass('is-hidden');
    }
    document.getElementById('east-title').textContent = '(' + num_first + '社)'; num_first

    target = document.getElementById('west-area');
    num_second = target.childElementCount;
    // ボタンを隠す
    if (num_second <= show) {
        $('#btn_west').addClass('is-hidden');
    }
    document.getElementById('west-title').textContent = '(' + num_second + '社)';

    target = document.getElementById('south-area');
    num_third = target.childElementCount;
    // ボタンを隠す
    if (num_third <= show) {
        $('#btn_south').addClass('is-hidden');
    }
    document.getElementById('south-title').textContent = '(' + num_third + '社)';
});
