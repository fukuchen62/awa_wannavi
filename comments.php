<section class="comments">
    <?php
    // コメント欄を表示
    $args = [
        "title_reply" => "<h2 class='comment'>【コメント投稿フォーム】</h2>"
    ];
    comment_form($args);

    // コメントの履歴を表示
    if (have_comments()) :
    ?>
    <p><?php comments_number("コメントはありません。", "コメントが1件あります。", "コメントが%件あります。"); ?></p>
    <ol class="commentlist">
        <?php $wp_list_comments_args = array(
                "avatar_size" => "50"
            );
            wp_list_comments($wp_list_comments_args);
            ?>
    </ol>
    <?php
        // ページネーション
        $paginate_comments_links_args = array(
            "prev_text" => "←前のコメントページ",
            "next_textt" => "次のコメントページ"
        );
        paginate_comments_links($paginate_comments_links_args);
    endif;
    ?>
</section>
