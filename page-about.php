<!-- header.phpを読み込む -->
<?php get_header(); ?>

<main class="container">

    <!-- コンテナーに格納 -->
    <div class="container">
        <!-- 帯になるコンテナーのタイトル -->
        <div class="container pd10 mb10">
            <!-- common.cssのsub__titleを利用しているが、タブの装飾と配色の変更の為、それぞれに名前を指定した-->
            <h2 class="article__title">このサイトについて</h2>

            <!-- 記事のリード文 -->
            <div class="body__lead">
                <p>このサイトは国の求職者支援制度に基づく、株式会社ＱＬＩＰ クリッププログラミングスクール・ＷＥＢプログラマー養成科第15期生、『縁（えん）』班が、２０２３年に制作したウェブサイトです。</p>

            </div>
            <!-- パンくずリスト -->
            <div class="Breadcrumb mb20">
                <?php get_template_part("template-parts/breadcrumb"); ?>
            </div>

            <!-- articleコンテナーに格納 -->
            <div class="container">


                <div class="body__main">
                    <h3>なぜ、このサイトを作ったのか？</h3>
                    <img class="body__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/about/about_img01.jpg" alt="なぜこのサイトを作ったのか考えるわんちゃん">

                    <div class="text__box">
                        <p>徳島県でわんちゃんと一緒にお出かけしようと思っても、どんなところで楽しめるのか情報を探さないといけませんでした。徳島県は多くの魅力ある自然があり、また食文化も他県にないものがたくさんあるので、観光地としてもっと魅力を伝えることができないかと考えました。そこでわんちゃんとのお出かけに必要な情報を集めて、徳島の魅力をアピールしながら犬と一緒に楽しめる情報サイトを作ろうと考えました。</p>
                        <h4><i class="fa-solid fa-paw"></i>観光で徳島を訪れた方へ</h4>
                        <p>徳島には、わんちゃんと一緒に出掛けられるスポットがたくさんあります。徳島の自然の中でわんちゃんが楽しむ姿を体感できるはずです。
                            これをきっかけに、徳島ならではの魅力が伝わればと考えています。</p>

                        <h4><i class="fa-solid fa-paw"></i>わんちゃんライフ初心者の方へ</h4>

                        <p>安心安全にお出かけをするには、準備が必要ですね。スポットの情報を確認するなど、ぜひこのサイトをご活用ください。</p>


                        <h4><i class="fa-solid fa-paw"></i>わんちゃんライフをお楽しみの方へ</h4>

                        <p>わんちゃんとお出かけする際に、まだ行ったことのないスポットを見つけて、徳島の魅力を再発見するお手伝いをしたいと考えています。</p>

                    </div>
                    <h3>このサイトの使い方</h3>

                    <div class="text__box">

                        <h4><i class="fa-solid fa-paw"></i>「遊ぶ」から探す</h4>
                        <p>公園・ドッグラン・自然観光・屋内施設から「遊ぶ」スポットを検索することができます。</p>

                        <h4><i class="fa-solid fa-paw"></i>「泊まる」から探す</h4>
                        <p>ペットホテル・ペットと宿泊・キャンプから「泊まる」スポットを検索することができます。</p>

                        <h4><i class="fa-solid fa-paw"></i>「食べる」から探す</h4>
                        <p>ドッグカフェ・ペットと食事から「食べる」スポットを検索することができます。</p>

                        <p>各カテゴリーは、エリア別に表示されるので近くの施設も確認することができます。エリアだけでなく、目的別・犬種や駐車場などの詳細な条件を設定でき、ご希望のスポットを絞り込んで探すことも可能です。また、気になるスポットをお気に入りに追加することで、マイページからいつでも確認することができます。</p>

                        <h4><i class="fa-solid fa-paw"></i>わんちゃんとお出かけの色々な楽しみ方を知りたい！</h4>
                        <p>おすすめ情報では、マナー・犬の豆知識・お出かけ情報などをわわんちゃんライフをお楽しみの方へんちゃんとお出かけする際の情報を記事としてまとめています。ぜひご活用ください。</p>
                    </div>

                    <h3>キャラクタープロフィール</h3>
                    <div class="body__lead">
                        <p>うずしおから生まれた犬の妖精。大きなおめめ、ぐるぐるのほっぺがチャームポイント。</p>
                    </div>
                    <div class="character_box">

                        <div class="text__box">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/about_img02.svg" alt="あわまる">
                            <h4><i class="fa-solid fa-paw"></i>なまえ：あわまる</h4>
                            <p>お誕生日：11月11日<br>
                                重さ：すだち2個分くらい<br>
                                特技：おしゃれをすること<br>
                                趣味：藍染め、お芋のスイーツ作り<br>
                                夢：お花屋さん<br>
                                ちょっぴりおませな女の子。可愛いものや、美味しいものが大好き。あわわんのお姉ちゃん。</p>

                        </div>

                        <div class="text__box">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/about_img03.svg" alt="あわわん">
                            <h4><i class="fa-solid fa-paw"></i>なまえ：あわわん</h4>
                            <p>お誕生日：10月11日<br>重さ：すだち1個とちょこっと<br>特技：かけっこ<br>趣味：サーフィン、阿波踊り<br>夢：うずしおの上を走ること<br>元気いっぱい！やんちゃな男の子。いつも、おむつを履いているよ。あわまるの弟。
                            </p>

                        </div>

                    </div>
                </div>



            </div>
            <!-- ライン -->
            <div class="line__solid"></div>

        </div>
</main>

<!-- footer.phpを読み込む -->
<?php get_footer(); ?>
