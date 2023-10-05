"use strict";

let show = 3;                           //最初に表示する件数
let tokushima__contents = '.tokushima';      // 対象の記事 １つ目のカテゴリー
let east__contents = '.east';           // 対象の記事 １つ目のカテゴリー
let west__contents = '.west';           //対象の記事 2つ目のカテゴリー
let south__contents = '.south';         //対象の記事 3つ目のカテゴリー

let flag_show_tokushima = true;              //true:隠す項目ある状態、false：全表示状態
let flag_show_east = true;              //true:隠す項目ある状態、false：全表示状態
let flag_show_west = true;              //true:隠す項目ある状態、false：全表示状態
let flag_show_south = true;             //true:隠す項目ある状態、false：全表示状態

let num = 12;                            //clickごとに表示したい件数

// 各地域の数
let num_tokushima = 0;
let num_east = 0;
let num_west = 0;
let num_south = 0;

// 各地域の現在表示数 初期3とする
let show_tokushima = 3;
let show_east = 3;
let show_west = 3;
let show_south = 3;

$(document).ready(function () {

    // 徳島市の処理
    // 4つ目からのカード型を非表示させる
    jQuery(tokushima__contents + ':nth-child(n + ' + (show + 1) + ')').addClass('is-hidden');

    // 表示・隠すボタンのクリック処理
    jQuery('#btn__tokushima').on('click', function () {

        if (flag_show_tokushima) {
            // 隠すカードを表示させる
            jQuery(tokushima__contents + '.is-hidden').slice(0, num).removeClass('is-hidden');

            // 表示数＋num
            show_tokushima += num;
            // 全部表示済の場合は、状態を切り替える
            if (show_tokushima >= num_tokushima) {
                // ボタン名はもっと見るから閉じるに変更
                jQuery('#btn__tokushima').text('CLOSE');

                // 表示フラグを切り替える
                flag_show_tokushima = false;
            }

        } else {
            //４件目からを隠せる処理
            jQuery(tokushima__contents + ':nth-child(n + ' + (show + 1) + ')').addClass('is-hidden');

            // ボタン名はもっと見るから閉じるに変更
            jQuery('#btn__tokushima').text('MORE').removeClass('close');
            // 表示フラグを切り替える
            flag_show_tokushima = true;
            // 表示数リセット
            show_tokushima = 3;
        }
    });

    // 東部の処理
    // 4つ目からのカード型を非表示させる
    jQuery(east__contents + ':nth-child(n + ' + (show + 1) + ')').addClass('is-hidden');

    // 表示・隠すボタンのクリック処理
    jQuery('#btn__east').on('click', function () {

        if (flag_show_east) {
            // 隠すカードを表示させる
            jQuery(east__contents + '.is-hidden').slice(0, num).removeClass('is-hidden');

            // 表示数＋num
            show_east += num;
            // 全部表示済の場合は、状態を切り替える
            if (show_east >= num_east) {
                // ボタン名はもっと見るから閉じるに変更
                jQuery('#btn__east').text('CLOSE').addClass('close');

                // 表示フラグを切り替える
                flag_show_east = false;
            }

        } else {
            //４件目からを隠せる処理
            jQuery(east__contents + ':nth-child(n + ' + (show + 1) + ')').addClass('is-hidden');
            // ボタン名はもっと見るから閉じるに変更
            jQuery('#btn__east').text('MORE').removeClass('close');
            // 表示フラグを切り替える
            flag_show_east = true;
            // 表示数リセット
            show_east = 3;
        }
    });

    // 西部の処理
    // 4つ目からのカード型を非表示させる
    jQuery(west__contents + ':nth-child(n + ' + (show + 1) + ')').addClass('is-hidden');

    // 表示・隠すボタンのクリック処理
    jQuery('#btn__west').on('click', function () {
        console.log('#btn__west');
        if (flag_show_west) {
            // 隠すカードを表示させる
            jQuery(west__contents + '.is-hidden').slice(0, num).removeClass('is-hidden');

            // 表示数＋num
            show_west += num;
            if (show_west >= num_west) {
                // ボタン名はもっと見るから閉じるに変更
                jQuery('#btn__west').text('CLOSE').addClass('close');
                // 表示フラグを切り替える
                flag_show_west = false;
            }

        } else {
            //４件目からを隠せる処理
            jQuery(west__contents + ':nth-child(n + ' + (show + 1) + ')').addClass('is-hidden');
            // ボタン名はもっと見るから閉じるに変更
            jQuery('#btn__west').text('MORE').removeClass('close');
            // 表示フラグを切り替える
            flag_show_west = true;
            show_west = 3;
        }
    });

    // 東部の処理
    // 4つ目からのカード型を非表示させる
    jQuery(south__contents + ':nth-child(n + ' + (show + 1) + ')').addClass('is-hidden');

    // 表示・隠すボタンのクリック処理
    jQuery('#btn__south').on('click', function () {

        if (flag_show_south) {
            // 隠すカードを表示させる
            jQuery(south__contents + '.is-hidden').slice(0, num).removeClass('is-hidden');

            // 表示数＋num
            show_south += num;
            if (show_south >= num_south) {
                // ボタン名はopenからcloseに変更
                jQuery('#btn__south').text('CLOSE').addClass('close');
                // 表示フラグを切り替える
                flag_show_south = false;
            }

        } else {
            //４件目からを隠せる処理
            jQuery(south__contents + ':nth-child(n + ' + (show + 1) + ')').addClass('is-hidden');
            // ボタン名はもっと見るから閉じるに変更
            jQuery('#btn__south').text('MORE').removeClass('close');
            // 表示フラグを切り替える
            flag_show_south = true;
            show_south = 3;
        }
    });

    // それぞれの個数が3以下の場合はmoreボタンを非表示
    // let target = document.getElementById('east-area');
    // num_east = target.childElementCount;
    // // ボタンを隠す
    // if (num_east <= show) {
    //     $('#btn__east').addClass('is-hidden');
    // }
    // document.getElementById('east-title').textContent = '(' + num_east + '社)';

    // target = document.getElementById('west-area');
    // num_west = target.childElementCount;
    // // ボタンを隠す
    // if (num_west <= show) {
    //     $('#btn__west').addClass('is-hidden');
    // }
    // document.getElementById('west-title').textContent = '(' + num_west + '社)';

    // target = document.getElementById('south-area');
    // num_south = target.childElementCount;
    // // ボタンを隠す
    // if (num_south <= show) {
    //     $('#btn__south').addClass('is-hidden');
    // }
    // document.getElementById('south-title').textContent = '(' + num_south + '社)';
});
