<!-- header.phpを読み込む -->
<?php get_header(); ?>

<h2 class="pageTitle">食べる<span>eat</span></h2>

<!-- パンくずリスト出力 -->
<?php get_template_part("template-parts/breadcrumb"); ?>

<!-- メインループの開始 -->
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : ?>
        <?php the_post(); ?>

        <main class="main">
            <section class="sec">
                <div class="container">
                    <table>
                        <tr>
                            <th>施設名</th>
                            <td><?php the_field("facility"); ?></td>
                        </tr>
                    </table>
                </div>
            </section>
        </main>

        <!-- メインループの終了 -->
    <?php endwhile; ?>
<?php endif; ?>

<!-- footer.phpを読み込む -->
<?php get_footer(); ?>
