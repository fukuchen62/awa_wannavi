<div class="card <?php echo $area_slug; ?>">

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

            <!-- カテゴリ -->
            <!-- <?php the_category(); ?> -->

            <!-- 記事タイトル表示 76p -->
            <h2 class="card__outline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div class="card__line"></div>
            <div class="card__textarea">
                <div class="tr">
                    <time datetime="2019-00-00"><?php the_time("Y.m.d"); ?></time>
                </div>
                <p><?php the_excerpt(); ?></p>

            </div>
        </div>
    </a>
</div>
