<!-- 自動整形機能を止める -->
<?php
if (is_page("contact")) {
    remove_filter("the_content", "wpautop");
} ?>

<!-- header.phpを読み込む -->
<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : ?>
        <?php the_post(); ?>

        <h2 class="pageTitle"><?php the_title(); ?><span><?php echo strtoupper($post->post_name); ?></span></h2>

        <main class="main">
            <div class="container">
                <div class="content">
                    <?php the_content(); ?>
                </div>
            </div>
        </main>

    <?php endwhile; ?>
<?php endif; ?>

<!-- footer.phpを読み込む -->
<?php get_footer(); ?>
