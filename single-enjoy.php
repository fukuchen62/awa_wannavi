<!-- header.phpを読み込む -->
<?php get_header(); ?>

<h2 class="pageTitle"><?php the_field("enjoy_type"); ?></h2>

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
                            <th>住所</th>
                            <td><?php the_field("address"); ?></td>
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
                            <th>遊ぶ</th>
                            <td><?php the_field("enjoy_type"); ?></td>
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
                            <th>おすすめポイント</th>
                            <td><?php the_field("recommend"); ?></td>
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
                            <th>受付時間</th>
                            <td><?php the_field("reception"); ?></td>
                        </tr>
                        <tr>
                            <th>営業時間</th>
                            <td><?php the_field("business_hours"); ?></td>
                        </tr>
                        <tr>
                            <th>敷地面積</th>
                            <td><?php the_field("breadth"); ?></td>
                        </tr>
                        <tr>
                            <th>管理会社</th>
                            <td><?php the_field("company"); ?></td>
                        </tr>
                        <tr>
                            <th>HP</th>
                            <td><?php the_field("url"); ?></td>
                        </tr>
                        <tr>
                            <th>トイレ</th>
                            <td><?php the_field("toilet"); ?></td>
                        </tr>
                        <tr>
                            <th>喫煙所</th>
                            <td><?php the_field("smoking"); ?></td>
                        </tr>
                        <tr>
                            <th>SNS</th>
                            <td><?php the_field("sns"); ?></td>
                        </tr>
                        <tr>
                            <th>登録</th>
                            <td><?php the_field("register"); ?></td>
                        </tr>
                        <tr>
                            <th>駐車場</th>
                            <td><?php the_field("parking"); ?></td>
                        </tr>
                        <tr>
                            <th>駐輪場</th>
                            <td><?php the_field("bicycle"); ?></td>
                        </tr>
                        <tr>
                            <th>芝生エリア</th>
                            <td><?php if (get_field("grass")) {
                                    echo "有";
                                } else {
                                    echo "無";
                                } ?></td>
                        </tr>
                        <tr>
                            <th>自動販売機</th>
                            <td><?php the_field("vending_machine"); ?></td>
                        </tr>
                        <tr>
                            <th>屋根付き休憩室</th>
                            <td><?php if (get_field("roof")) {
                                    echo "有";
                                } else {
                                    echo "無";
                                } ?></td>
                        </tr>
                        <tr>
                            <th>禁止事項</th>
                            <td><?php the_field("ban"); ?></td>
                        </tr>
                        <tr>
                            <th>常駐管理者</th>
                            <td><?php the_field("on_site"); ?></td>
                        </tr>
                        <tr>
                            <th>フィールド</th>
                            <td><?php if (get_field("field")) {
                                    echo "芝";
                                } else {
                                    echo "砂";
                                }; ?></td>
                        </tr>
                        <tr>
                            <th>フェンスの高さ</th>
                            <td><?php the_field("fence"); ?></td>
                        </tr>
                        <tr>
                            <th>ダストボックス</th>
                            <td><?php the_field("dust"); ?></td>
                        </tr>
                        <tr>
                            <th>足洗い場</th>
                            <td><?php the_field("washing"); ?></td>
                        </tr>
                        <tr>
                            <th>小型大型分け</th>
                            <td><?php the_field("divide"); ?></td>
                        </tr>
                        <tr>
                            <th>ルール</th>
                            <td><?php the_field("rule"); ?></td>
                        </tr>
                        <tr>
                            <th>料金</th>
                            <td><?php the_field("fee"); ?></td>
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
                    <?php the_field("iframe"); ?>
                </div>


            </section>
        </main>

        <!-- メインループの終了 -->
    <?php endwhile; ?>
<?php endif; ?>

<!-- footer.phpを読み込む -->
<?php get_footer(); ?>
