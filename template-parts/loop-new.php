<li class="news__list flex <?php echo $area_slug; ?>">
    <a id="post-<?php the_ID(); ?>" <?php post_class(); ?> href="<?php the_permalink(); ?>">
        <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail("", ['class' => 'img__wrapper']); ?>
        <?php else : ?>
            <img class="img__wrapper" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/noimage_600x400.png" alt="">
        <?php endif; ?>

        <div class="news__right">
            <div class="flex">

                <!-- 新着情報カテゴリータグ -->
                <div class="flex">
                    <p class=" flex ctg__icon"><?php echo get_the_category()[0]->name; ?></p>
                </div>

                <!-- 日付 -->
                <time datetime="2019-00-00" class="news__date flex"><?php the_time("Y.m.d"); ?></time>
            </div>
            <a href="<?php the_permalink(); ?>" class="news__text"><?php the_excerpt(); ?></a>
        </div>
</li>
