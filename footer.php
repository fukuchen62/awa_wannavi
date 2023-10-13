    <!-- footer開始 -->
    <footer>
        <!-- js -->
        <script>
        // 豆知識の配列を生成

        let mames = [];

        //console.log("確認表示");

        // 豆知識を配列$mamesから取り出す
        mames[0] = "土佐犬みたいに徳島にも阿波犬っていたって知ってるワン？";
        mames[1] = "祖谷のかずら橋は3年ごとに架け替えられてるワン";
        mames[2] = "鳴門のうずしおは発生する時間が違うワン";
        mames[3] = "日本一低い山は徳島県にある「弁天山」だワン！";
        mames[4] = "実は電車は走っていなくて、全て汽車だワン！";
        mames[5] = "電車が無いから、駅に自動改札が一台もないワン";
        mames[6] = "スダチだけじゃなくて柚子もたくさん取れるワン";
        mames[7] = "徳島県は、スポーツ射撃がすごく強いワン";
        mames[8] = "「日本一入館料が高い」と言われる美術館があるワン";
        mames[9] = "かずら橋は「祖谷のかずら橋」と「奥祖谷二重かずら橋」の２箇所あるワン";
        mames[10] = "日本百名山にも名を連ねている「剣山」は西日本2位だワン";
        mames[11] = "あわまるの阿波弁講座<br>　「せこい」は「お腹いっぱい」だワン";
        mames[12] = "あわまるの阿波弁講座<br>　「ごっつい」は「すごい」だワン！ごっついワン";
        mames[13] = "あわまるの阿波弁講座<br>　「おとろしい」は「恐ろしい」だワン";
        mames[14] = "あわまるの阿波弁講座<br>　「もんてきぃ」は「帰っておいで」だワン";
        mames[15] = "あわまるの阿波弁講座<br>　「いける？」は「大丈夫？」だワン!どこにも行かないワン";
        mames[16] = "あわまるの阿波弁講座<br>　「かんまん」は「かまわない」だワン";
        mames[17] = "あわまるの阿波弁講座<br>　「あるでないで」は「あるじゃないか」だワン";
        mames[18] = "あわまるの阿波弁講座<br>　「えっとぶりで～」は「久しぶりだね～」だワン";
        mames[19] = "あわまるの阿波弁講座<br>　「おもっしょい」は「おもしろい」だワン";
        mames[20] = "あわまるの阿波弁講座<br>　「こんまいワンちゃん」は「小さいワンちゃん」だワン";
        mames[21] = "あわまるの阿波弁講座<br>　「しわしわいきよ～」は「ゆっくり行きなよ～」だワン";


        // ランダムに豆知識を表示させる

        function msgOutput() {
            // 変数mameに配列を代入
            //変数ｒに、0以上1以下のランダムな数字とmameのlength(35）を掛けた結果（小数点を切り捨てた数字）を代入
            let r = Math.floor(Math.random() * mames.length);

            document.getElementById("awamaru_comment").innerHTML = mames[r]; //上の式で出た結果をHTMLで"awamaru_comment"に表示する
            return false;
        }
        </script>
        <div class="awamaru_trivia foot_scroll">
            <div class="awamaru_commentset fukidashi_animation" style="display: block;">
                <img class="awamaru_commentbox" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/hukidasi.png" alt="あわまる吹き出し">

                <p id="awamaru_comment" class="awamaru_comment">高知の土佐犬みたいに徳島にも阿波犬っていたって知ってるワン？</p>
            </div>
        </div>
        <input class="awamaru" type="image" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/awamaru.png" value="豆知識" onclick="msgOutput()" alt="あわまる" onsubmit="return false" style="margin-left: -45px; rotate: 45deg;">

        <!-- トップへ戻る -->
        <div id="scroll">
            <img class="top-btn01" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/topbtn.png" alt="トップボタン">
        </div>

        <div class="image-container">
            <!-- 初めに表示される2枚の画像 -->
            <img class="f-dog-img1 initial-image katakata" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/footer_imgdog02.svg" alt="Image 1">
            <img class="f-dog-img2 initial-image katakata" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/footer_imgdog05.svg" alt="Image 2">

            <!-- 後から表示させる5枚の画像 -->
            <img class="large-screen katakata" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/footer_imgdog01.svg" alt="Image 3">
            <img class="large-screen poyooon" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/footer_imgdog02.svg" alt="Image 4">
            <img class="large-screen katakata" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/footer_imgdog03.svg" alt="Image 5">
            <img class="large-screen poyon" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/footer_imgdog04.svg" alt="Image 6">
            <img class="large-screen katakata" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/footer_imgdog05.svg" alt="Image 7">
        </div>

        <img class="siba-sp" id="responsive-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/footer_imgshiba_sp.svg" alt="Responsive Image">

        <div class="footercolor footer-menu">
            <div class="footer-text">
                <ul>
                    <li><a href="#">マイページ</a></li>
                    <li><a href="<?php echo home_url('/hospital/'); ?>">動物病院</a></li>
                    <li><a href="<?php echo home_url('/rental_car/'); ?>">レンタカー（犬OK）</a></li>
                    <li><a href="#">掲載施設一覧</a></li>
                    <li><a href="<?php echo home_url('/about/'); ?>">このサイトについて</a></li>
                    <li><a href="<?php echo home_url('/privacy-policy/'); ?>">プライバシーポリシー・<br>免責事項</a></li>
                </ul>
            </div>
            <div class="footer-largetext">
                <ul class="large-menu">遊ぶ
                    <li><a href="<?php echo home_url('/enjoy_type/park/'); ?>">公園</a></li>
                    <li><a href="<?php echo home_url('/enjoy_type/dogrun/'); ?>">ドッグラン</a></li>
                    <li><a href="<?php echo home_url('/enjoy_type/outdoor/'); ?>">自然・観光</a></li>
                    <li><a href="<?php echo home_url('/enjoy_type/indoor/'); ?>">屋内施設</a></li>
                </ul>
                <ul class="large-menu">泊まる
                    <li><a href="<?php echo home_url('/stay_type/pethotel/'); ?>">ペットホテル</a></li>
                    <li><a href="<?php echo home_url('/stay_type/hotel/'); ?>">ペットと宿泊</a></li>
                    <li><a href="<?php echo home_url('/stay_type/camp/'); ?>">キャンプ</a></li>
                </ul>
                <ul class="large-menu">食べる
                    <li><a href="<?php echo home_url('/eat_type/cafe/'); ?>">ドッグカフェ</a></li>
                    <li><a href="<?php echo home_url('/eat_type/restaurant/'); ?>">ペットと食事</a></li>
                </ul>
                <ul class="large-menu">モデルコース
                    <li><a href="<?php echo home_url('/course/co01/'); ?>">海コース</a></li>
                    <li><a href="<?php echo home_url('/course/co02/'); ?>">川コース</a></li>
                    <li><a href="<?php echo home_url('/course/co03/'); ?>">山コース</a></li>
                </ul>
                <ul class="large-menu">特集記事
                    <li><a href="#">マナー</a></li>
                    <li><a href="#">犬の豆知識</a></li>
                    <li><a href="#">お出かけ情報</a></li>
                    <li><a href="#">インタビュー</a></li>
                    <li><a href="#">その他</a></li>
                </ul>
                <ul class="large-menu">検索
                    <li><a href="#">条件検索</a></li>
                </ul>
                <ul class="large-menu">新着記事
                    <li><a href="#">イベント情報</a></li>
                    <li><a href="#">お知らせ</a></li>
                    <li><a href="#">更新情報</a></li>
                </ul>
                <ul class="large-menu">
                    <li><a href="#">マイページ</a></li>
                    <li><a href="<?php echo home_url('/hospital/'); ?>">動物病院</a></li>
                    <li><a href="<?php echo home_url('/rental_car/'); ?>">レンタカー（犬OK）</a></li>
                    <li><a href="#">掲載施設一覧</a></li>
                    <li><a href="<?php echo home_url('/about/'); ?>">このサイトについて</a></li>
                    <li><a href="<?php echo home_url('/privacy-policy/'); ?>">プライバシーポリシー・<br>免責事項</a></li>
                </ul>
            </div>
        </div>
        <div class="copyright"><small>copyright©AwAワン!Navi All Rights Reserved.</small></div>
        </div>
    </footer>
    <!-- footer修了 -->

    <!-- wp_footer()を呼び出す -->
    <?php wp_footer(); ?>
    </body>

    </html>
