<!-- header.phpを読み込む -->
<?php get_header(); ?>

<!-- ページタイトル -->
<h2 class="pageTitle">最新情報<span>NEWS</span></h2>

<!-- パンくずリスト出力 -->
<?php get_template_part("template-parts/breadcrumb"); ?>

<main class="main">
    <div class="container">
        <div class="row">
            <!-- 左半分メインコンテンツ -->
            <div class="col-12 col-md-9">

                <!-- メインループの開始 -->
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : ?>
                        <?php the_post(); ?>

                        <!-- コンテンツの詳細 -->
                        <article id="post-<?php the_ID(); ?>" <?php post_class("article"); ?>>
                            <header class="article_header">
                                <h2 class="article_title"><?php the_title(); ?></h2>
                                <div class="article_meta">
                                    <!-- <ul class="post-categories">
                                        <li><a href="#">お知らせ</a></li>
                                    </ul> -->
                                    <?php the_category(); ?>
                                    <time datetime="Y-m-d"><?php the_time("Y年m月d日 H:i"); ?></time>
                                </div>
                            </header>

                            <div class="article_body">
                                <div class="content">
                                    <!-- <p>BISTRO CALME では、新しいメニューを開発中です。</p>
                            <p>
                                        新しいメニューを提供するために、開店後に練習中です。スタッフから大好評のメニューもできてきました。<br>
                                        来月にはご提供できると思います。お楽しみに。
                                    </p> -->
                                    <?php the_content(); ?>
                                </div>
                                <!-- コメント入力欄 -->
                                <?php comments_template(); ?>
                            </div>

                            <!-- 関連リンク -->
                            <div class="postLinks">
                                <div class="postLink postLink-prev">
                                    <?php previous_post_link('<i class="fas fa-chevron-left"></i>%link'); ?>
                                </div>
                                <div class="postLink postLink-next">
                                    <?php next_post_link('%link<i class="fas fa-chevron-right"></i>'); ?>
                                </div>
                            </div>
                        </article>

                        <!-- メインループの終了 -->
                    <?php endwhile; ?>
                <?php endif; ?>

            </div>

            <!-- 右半身サイドバー -->
            <div class="col-12 col-md-3">
                <?php get_sidebar("latests"); ?>
                <!-- カテゴリで絞りこむ -->
                <?php get_sidebar("categories"); ?>

                <!-- 月別で絞りこむ -->
                <?php get_sidebar("archives"); ?>

            </div>
        </div>
    </div>
</main>



<!-- footer.phpを読み込む -->
<?php get_footer(); ?>
