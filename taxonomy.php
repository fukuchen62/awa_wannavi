<!-- header.phpを読み込む -->
<?php get_header(); ?>

<h2 class="pageTitle">メニュー<span>MENU</span></h2>

<!-- パンくずリスト出力 -->
<?php get_template_part("template-parts/breadcrumb"); ?>

<main class="main">

	<?php
	$kind_slug = get_query_var("kind");
	$kind = get_term_by("slug", $kind_slug, "kind");
	print_r($kind);
	?>

	<section class="sec">
		<div class="container">
			<div class="sec_header">
				<h2 class="title title-jp"><?php echo $kind->name; ?></h2>
				<span class="title title-en"><?php echo strtoupper($kind->slug); ?></span>
			</div>
			<div class="row justify-content-center">

				<!-- メインループの開始 -->
				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : ?>
						<?php the_post(); ?>
						<div class="col-md-3">
							<?php get_template_part("template-parts/loop", "menu"); ?>
						</div>
						<!-- メインループの終了 -->
					<?php endwhile; ?>
				<?php endif; ?>

			</div>
		</div>
	</section>
</main>

<!-- footer.phpを読み込む -->
<?php get_footer(); ?>
