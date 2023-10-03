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
                        <tr>
                            <th>地域</th>
                            <td><?php the_field("area"); ?></td>
                        </tr>
                        <tr>
                            <th>画像１</th>
                            <td><?php the_field("pic1"); ?></td>
                        </tr>
                        <tr>
                            <th>画像２</th>
                            <td><?php the_field("pic2"); ?></td>
                        </tr>
                        <tr>
                            <th>画像３</th>
                            <td><?php the_field("pic3"); ?></td>
                        </tr>
                        <tr>
                            <th>画像４</th>
                            <td><?php the_field("pic4"); ?></td>
                        </tr>
                        <tr>
                            <th>画像５</th>
                            <td><?php the_field("pic5"); ?></td>
                        </tr>
                        <tr>
                            <th>食べる</th>
                            <td><?php the_field("eat_type"); ?></td>
                        </tr>
                        <tr>
                            <th>犬のサイズ</th>
                            <td><?php the_field("dog_size"); ?></td>
                        </tr>
                        <tr>
                            <th>特記事項の有無</th>
                            <td><?php the_field("note_flag"); ?></td>
                        </tr>
                        <tr>
                            <th>概要</th>
                            <td><?php the_field("company_info"); ?></td>
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
                            <th>営業時間</th>
                            <td><?php the_field("business_hours"); ?></td>
                        </tr>
                        <tr>
                            <th>定休日</th>
                            <td><?php the_field("close"); ?></td>
                        </tr>
                        <tr>
                            <th>HP</th>
                            <td><?php the_field("url"); ?></td>
                        </tr>
                        <tr>
                            <th>SNS</th>
                            <td><?php the_field("sns"); ?></td>
                        </tr>
                        <tr>
                            <th>テイクアウト</th>
                            <td><?php the_field("takeout"); ?></td>
                        </tr>
                        <tr>
                            <th>予約</th>
                            <td><?php the_field("reservation"); ?></td>
                        </tr>
                        <tr>
                            <th>喫煙</th>
                            <td><?php the_field("smoking"); ?></td>
                        </tr>
                        <tr>
                            <th>駐車場</th>
                            <td><?php the_field("parking"); ?></td>
                        </tr>
                        <tr>
                            <th>入店ルール</th>
                            <td><?php the_field("rule"); ?></td>
                        </tr>
                        <tr>
                            <th>決済方法</th>
                            <td><?php the_field("payment"); ?></td>
                        </tr>
                        <tr>
                            <th>特記事項</th>
                            <td><?php the_field("note"); ?></td>
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
