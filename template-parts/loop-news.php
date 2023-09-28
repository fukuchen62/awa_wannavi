<!-- <article id="post-1" class="news"> -->
<article id="post-<?php the_ID(); ?>" <?php post_class("news"); ?>>
    <div class="news_pic">
        <a href="<?php the_permalink(); ?>">
            <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/news_img-1.jpg" alt=""> -->
            <?php if (has_post_thumbnail()) : ?>
                <!-- サムネイルがあればそれを表示 -->
                <?php the_post_thumbnail("medium") ?>
            <?php else : ?>
                <!-- サムネイルがなければ、代替画像を表示 -->
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/noimage_600x400.png" alt="">
            <?php endif; ?>
        </a>
    </div>
    <div class="news_meta">
        <!-- <ul class="post-categories">
                    <li><a href="#">お知らせ</a></li>
                </ul> -->
        <?php the_category(); ?>

        <!-- <time class="news_time" datetime="2019-00-00">2019年00月00日</time> -->
        <time class="news_time" datetime="2019-00-00"><?php the_time("Y年m月d日H:i"); ?></time>

    </div>
    <h2 class="news_title"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
    <div class="news_desc">
        <!-- <p>概要が入ります。概要が入ります。概要が入ります。概要が入ります。概要が入ります。概要が入ります。</p> -->
        <?php the_excerpt(); ?>
        <p><a href="<?php the_permalink(); ?>">[続きを読む]</a></p>
    </div>
</article>
