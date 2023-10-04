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
