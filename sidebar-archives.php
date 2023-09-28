<aside class="archive">
    <h2 class="archive_title">アーカイブ 一覧</h2>
    <ul class="archive_list">
        <!-- アーカイブ一覧を作成 -->
        <?php
        // parameterの連想配列
        $args = [
            "type" => "monthly",  // アーカイブタイプ
            "limit" => 6,   // アーカイブタイプの件数
            "show_post_count" => false,  // 投稿数を表示するか
            "echo" => true, // 表示
        ];
        // アーカイブリンク一覧
        wp_get_archives($args);
        ?>
    </ul>
</aside>
