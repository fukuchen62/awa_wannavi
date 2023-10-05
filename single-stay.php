<!-- header.phpを読み込む -->
<?php get_header(); ?>

<h2 class="pageTitle"><?php the_field("stay_type"); ?></h2>

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
                            <td><?php the_title(); ?></td>
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
                            <th>泊まる</th>
                            <td><?php the_field("stay_type"); ?></td>
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
                            <th>予約</th>
                            <td><?php the_field("reservation"); ?></td>
                        </tr>
                        <tr>
                            <th>客室数</th>
                            <td><?php the_field("rooms"); ?></td>
                        </tr>
                        <tr>
                            <th>入室可能頭数</th>
                            <td><?php the_field("dogs"); ?></td>
                        </tr>
                        <tr>
                            <th>ペット同伴で食事</th>
                            <td><?php the_field("with"); ?></td>
                        </tr>
                        <tr>
                            <th>分煙</th>
                            <td><?php the_field("separate smoking"); ?></td>
                        </tr>
                        <tr>
                            <th>喫煙所</th>
                            <td><?php the_field("smoking"); ?></td>
                        </tr>
                        <tr>
                            <th>駐車場</th>
                            <td><?php the_field("parking"); ?></td>
                        </tr>
                        <tr>
                            <th>乗り入れ可能車種</th>
                            <td><?php the_field("car"); ?></td>
                        </tr>
                        <tr>
                            <th>共用施設</th>
                            <td><?php the_field("share"); ?></td>
                        </tr>
                        <tr>
                            <th>レンタル可能施設</th>
                            <td><?php the_field("rental"); ?></td>
                        </tr>
                        <tr>
                            <th>ICからの距離</th>
                            <td><?php the_field("ic"); ?></td>
                        </tr>
                        <tr>
                            <th>ルール</th>
                            <td><?php the_field("rule"); ?></td>
                        </tr>
                        <tr>
                            <th>決済方法</th>
                            <td><?php the_field("payment"); ?></td>
                        </tr>
                        <tr>
                            <th>犬用アメニティ</th>
                            <td><?php the_field("amenities"); ?></td>
                        </tr>
                        <tr>
                            <th>犬が利用できる施設</th>
                            <td><?php the_field("use"); ?></td>
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
