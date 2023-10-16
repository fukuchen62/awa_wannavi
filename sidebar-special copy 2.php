<!-- aside カテゴリー一覧 -->

<div class="aside__col">
    <div class="category__tag yellow">カテゴリー一覧</div>

    <div class="category__innner">
        <ul>

            <!-- テンプレートパーツでliの指定をしてあげる -->
            <?php
            $args = array(
                // これが無いと(カテゴリー)というliタイトルがでます p90
                'title_li' => '',
                'echo'     => 0,
            );
            $categories = wp_list_categories($args);

            // wpではliをテンプレで引くとcat-itemを出力してしまいます
            // よって、ここからはクラス名を想定されるものに変更します
            $cat_serch   = array('"cat-item');             // 変換前の文字列.
            $cat_replace = array('"category__list'); // 変換後の文字列.
            $categories  = str_replace($cat_serch, $cat_replace, $categories);

            echo $categories;
            ?>
            <!-- <li class="category__list"><a href="#">マナー</a></li>
            <li class="category__list"><a href="#">犬の豆知識</a></li>
            <li class="category__list"><a href="#">お出かけ情報</a></li>
            <li class="category__list"><a href="#">特集</a></li> -->
        </ul>
    </div>

</div>
