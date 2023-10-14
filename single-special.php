<!-- header.phpを読み込む -->
<?php get_header(); ?>

<!-- パンくずリスト出力 -->
<?php get_template_part("template-parts/breadcrumb"); ?>


<!-- 帯になるコンテナーのタイトル -->
<div class="container pd20">
    <h2 class="article__title">初心者マナー</h2>
</div>


<!-- メインループの開始 -->
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : ?>
        <?php the_post(); ?>

        <main class="main">
            <section class="sec">
                <div class="container">
                    <table>
                        <tr>
                            <th>タイトル</th>
                            <td><?php the_field("title"); ?></td>
                        </tr>
                        <tr>
                            <th>概要</th>
                            <td><?php the_field("outline"); ?></td>
                        </tr>
                        <tr>
                            <th>内容</th>
                            <td><?php the_field("content"); ?></td>
                        </tr>
                        <tr>
                            <th>特集記事</th>
                            <td><?php the_field("special_type"); ?></td>
                        </tr>
                        <tr>
                            <th>郵便番号</th>
                            <td><?php the_field("post_code"); ?></td>
                        </tr>
                        <tr>
                            <th>住所</th>
                            <td><?php the_field("address"); ?></td>
                        </tr>
                        <tr>
                            <th>電話番号</th>
                            <td><?php the_field("tel"); ?></td>
                        </tr>
                        <tr>
                            <th>FAX</th>
                            <td><?php the_field("fax"); ?></td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td><?php the_field("email"); ?></td>
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
