<div class="card <?php echo $args; ?>">

    <!-- IDの追加 -->
    <a id="post-<?php the_ID(); ?>" <?php post_class(); ?> href="<?php the_permalink(); ?>">
        <!-- 背面 -->
        <div class="card__back"></div>
        <!-- 前面 -->
        <div class="card__front">
            <!-- カード内情報 -->
            <!-- サムネイル画像を投稿画面からとってくる -->
            <div class="thumbnail__pic">
                <a href="<?php the_permalink(); ?>">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail("medium"); ?>
                    <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/noimage_600x400.png" alt="">
                    <?php endif; ?>
                </a>
            </div>

            <!-- タクソノミーを取得する -->
            <?php
            $post_type = get_post_type(get_the_ID());
            $taxonomies = get_object_taxonomies($post_type);

            $taxonomy_names = wp_get_object_terms(get_the_ID(), $taxonomies,  array("fields" => "names", "orderby" => "count"));

            ?>
            <!-- タクソノミーを出力 -->
            <ul class="taxonomis">
                <?php
                if (!empty($taxonomy_names)) :
                    foreach ($taxonomy_names as $tax_name) : ?>

                        <li class="card__tag"><?php echo $tax_name; ?> </li>

                <?php endforeach;
                endif;  ?>
            </ul>

            <!-- カテゴリが引っ張ってこれません2023/10/10 記事のカテゴリ75p -->

            <!-- 記事タイトル表示 76p -->
            <h2 class="card__outline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div class="card__line"></div>
            <div class="card__textarea">

                <p><i class="fa-solid fa-location-dot"></i>
                    <?php the_field("address"); ?>
                </p>

                <p><i class="fa-solid fa-phone"></i>
                    <?php the_field("tel"); ?>
                </p>

                <p>URL:<a href="<?php the_field("url"); ?>" target="_blank">
                        <?php the_field("url"); ?>
                    </a>
                </p>

            </div>
        </div>
    </a>
</div>
