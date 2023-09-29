<!-- header.phpを読み込む -->
<?php get_header(); ?>

<!-- 新着情報 -->
<section class="sec">
    <div class="container">
        <header class="sec_header">
            <h2 class="title">最新情報<span>NEWS</span></h2>
        </header>

        <p class="sec_btn">
            <a href="<?php echo home_url("/special/"); ?>" class="btn btn-default">設立3周年記念セールへ<i class="fas fa-angle-right"></i></a>
        </p>

        <div class="row">

            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : ?>
                    <?php the_post(); ?>
                    <!-- 新着ニュースの1つのカード型 -->
                    <div class="col-md-4">
                        <!-- 共通のニュースカード型を読み込む -->
                        <?php get_template_part("template-parts/loop", "news"); ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>

        <p class="sec_btn">
            <?php
            $news = get_term_by("slug", "news", "category");
            $news_link = get_term_link($news, "category");
            ?>
            <a href="<?php echo $news_link; ?>" class="btn btn-default">最新情報の一覧<i class="fas fa-angle-right"></i></a>
            <!-- よりシンプルなやり方 -->
            <!-- <a href="<?php echo home_url('category/news'); ?>" class="btn btn-default">最新情報の一覧<i class="fas fa-angle-right"></i></a> -->
        </p>
    </div>
</section>

<!-- google map ピン打ち -->
<section>
    <div class="container">
        <header class="sec_header">
            <h2 class="title">MAP</h2>
        </header>
    </div>
</section>

<!-- pick up -->
<section>
    <div class="container">
        <header class="sec_header">
            <h2 class="title">pick up</h2>
        </header>
    </div>
</section>

<!-- インスタ連携 -->
<section>
    <div class="container">
        <header class="sec_header">
            <h2 class="title">インスタグラム</h2>
        </header>
    </div>
</section>

<!-- footer.phpを読み込む -->
<?php get_footer(); ?>
