"use strict";

/*****************************/
/* 自動スクロール文字列（PC） */
/*****************************/
$(function () {
    $(".slider__text").slick({
        autoplay: true,
        autoplaySpeed: 0,
        speed: 10000,
        cssEase: 'linear',
        slidesToShow: 1,
        swipe: false,
        pauseOnFocus: false,
        pauseOnHover: false,
        arrows: false,
        // variableWidth: true,
    });


    /***************************/
    /* 自動スクロール画像（PC） */
    /***************************/

    let screen_w = $(window).width();
    if (screen_w < 769) {
        $(".slider__img").slick({
            autoplay: true,
            autoplaySpeed: 0,
            speed: 5000,
            cssEase: 'linear',
            slidesToShow: 1,
            swipe: false,
            pauseOnFocus: false,
            pauseOnHover: false,
            arrows: false,
        });
    } else {
        $(".slider__img").slick({
            autoplay: true,
            autoplaySpeed: 0,
            speed: 5000,
            cssEase: 'linear',
            slidesToShow: 1.5,
            swipe: false,
            pauseOnFocus: false,
            pauseOnHover: false,
            arrows: false,
        });
    }


    /*************************/
    /* MAPモーダルウィンドウ */
    /*************************/

    // let open = $('.top-map__modal-open');
    // let close = $('.top-map__modal-close');
    // let container = $('.top-map__modal-container');

    // //開くボタンをクリックしたらモーダルを表示する
    // open.on('click', function () {
    //     container.addClass('active');
    //     return false;
    // });

    // //閉じるボタンをクリックしたらモーダルを閉じる
    // close.on('click', function () {
    //     container.removeClass('active');
    // });

    // //モーダルの外側をクリックしたらモーダルを閉じる
    // $(document).on('click', function (e) {
    //     if (!$(e.target).closest('.top-modal__modal-body').length) {
    //         container.removeClass('active');
    //     }
    // });

    // Get all modal buttons
    const modalButtons = document.querySelectorAll(".modal__button");

    // Attach click event to each modal button
    modalButtons.forEach((button) => {
        button.addEventListener("click", function () {
            const modalId = this.getAttribute("data-modal");
            const modal = document.getElementById(modalId);

            if (modal) {
                modal.style.display = "block";
            }
        });
    });

    // Close the modal when the close button or background is clicked
    document.addEventListener("click", function (event) {
        if (event.target.classList.contains("modal") || event.target.classList.contains("close")) {
            const modalId = event.target.getAttribute("data-modal");
            const modal = document.getElementById(modalId);

            if (modal) {
                modal.style.display = "none";
            }
        }
    });



    /*----------------------------
    * フェードインアニメーション
    *----------------------------*/

    // トップのセクションはロード後すぐにフェードイン
    $(".top-section").addClass("section--fadein");
    // コンテンツの100px奥までスクロールされたらフェードイン
    $(window).scroll(function () {
        let windowHeight = $(window).height();
        let scroll = $(window).scrollTop();

        $(".section").each(function () {
            let targetPosition = $(this).offset().top;
            if (scroll > targetPosition - windowHeight + 100) {
                $(this).addClass("section--fadein");
            }
        });
    });
});
