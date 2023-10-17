<!-- header.phpを読み込む -->
<?php get_header(); ?>

<body>
    <h2 class="pagetitle">お探しのページはみつかりませんでした。</h2>
    <div class="main">
        <div class="container">
            <p>申し訳ございませんが、<a href="<?php echo home_url("/") ?>">こちらのリンク</a>からトップページにお戻りください。</p>
        </div>
    </div>
</body>

<!-- footer.phpを読み込む -->
<?php get_footer(); ?>
