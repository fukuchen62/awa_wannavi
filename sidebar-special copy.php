<aside class="archive">
    <h2 class="archive_title">特集一覧</h2>
    <ul class="archive_list">
        <!-- カテゴリ一覧を作成 -->
        <?php
        // parameterの連想配列
        $args = [
            "title_li" => "", // 見出しを削除
            "taxonomy" => "special_type",
            "show_count" => false,   // 記事の件数を表示
            "orderby" => "count",   // カテゴリーの並び替え
            "order" => "desc",  //並び順
            "hide_empty" => true  //記事がなければ非表示
        ];
        // カテゴリーリンク一覧
        wp_list_categories($args); ?>
    </ul>
</aside>

<!-- aside カテゴリー一覧 -->

<div class="aside__col">
    <div class="category__tag yellow">カテゴリー一覧</div>

    <div class="category__innner">
        <ul>
            <li class="category__list"><a href="#">マナー</a></li>
            <li class="category__list"><a href="#">犬の豆知識</a></li>
            <li class="category__list"><a href="#">お出かけ情報</a></li>
            <li class="category__list"><a href="#">特集</a></li>
        </ul>
    </div>

</div>
