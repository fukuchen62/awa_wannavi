<!-- header.phpを読み込む -->
<?php get_header(); ?>

<main>

    <div class="container">
        <!-- 帯の部分 -->
        <h2 class="h2__title mb20 fs35"><?php the_field("enjoy_type"); ?></h2>
        <!-- パンくずリスト -->
        <div class="Breadcrumb mb20">
            <?php get_template_part("template-parts/breadcrumb"); ?>
        </div>

        <div class="flex__c mb20">
            <div class="facility__name mr20"><?php the_title(); ?></div>

            <!-- お気に入り登録ボタン -->
            <?php echo do_shortcode('[favorite_button post_id="" site_id=""]'); ?>

            <!-- <svg xmlns="http://www.w3.org/2000/svg" width="48" height="54" viewBox="0 0 48 54" fill="none">
                <g clip-path="url(#clip0_823_6329)">
                    <path d="M45.6354 0H0.5V48.9968C0.5 50.7869 1.46342 52.4368 3.02067 53.3318C3.79723 53.7773 4.66929 54 5.5372 54C6.40511 54 7.28132 53.7731 8.06202 53.3277L21.7576 45.4496C22.451 45.0495 23.2276 44.8515 24.0042 44.8515C24.7807 44.8515 25.5531 45.0495 26.2507 45.4496L39.9463 53.3277C40.727 53.7773 41.599 54 42.4711 54C43.3432 54 44.2069 53.7773 44.9876 53.3318C46.5449 52.4409 47.5083 50.7869 47.5083 48.9968V0H45.6438H45.6354ZM43.1148 50.1228C42.9113 50.2383 42.687 50.2961 42.4628 50.2961C42.2386 50.2961 42.0102 50.2383 41.8067 50.1187L41.6904 50.0527L28.1153 42.2406C26.8446 41.5064 25.4202 41.1434 24 41.1434C22.5798 41.1434 21.1554 41.5105 19.8847 42.2406L6.18917 50.1187C5.98569 50.2342 5.76144 50.2919 5.53304 50.2919C5.30465 50.2919 5.08456 50.2342 4.88107 50.1187C4.47411 49.8877 4.22495 49.4588 4.22495 48.9927V3.70394H43.7667V48.9968C43.7667 49.4629 43.5176 49.8877 43.1106 50.1228H43.1148Z" fill="black" />
                    <path d="M23.8173 18.5898C23.6844 19.7654 22.7833 21.0894 21.6164 21.4936C19.3615 22.269 17.6381 18.9116 18.2112 16.8657C18.6348 15.3561 20.2585 14.127 21.8157 14.7209C23.5474 15.385 23.9543 17.3937 23.8173 18.5898ZM29.4899 15.6407C28.7175 14.4074 26.7906 13.8259 25.7151 14.9684C24.3779 16.3873 24.5108 18.7466 25.4161 20.1902C27.4509 23.4404 31.7946 19.3282 29.494 15.6407H29.4899ZM14.9098 23.7498C15.1922 26.4226 17.8873 27.1031 18.9047 26.0225C20.5824 24.2406 20.2169 20.5779 17.1149 20.6315C15.5618 20.6563 14.806 22.8176 14.9098 23.7498ZM30.5986 20.9244C29.1078 20.8213 28.161 22.4711 28.2316 23.8735C28.4475 28.4106 34.444 26.4184 32.8162 22.7516C32.5753 22.2072 31.8154 21.011 30.6028 20.9326H30.5986V20.9244ZM21.7327 24.7645C21.4544 25.28 20.736 26.0183 20.2543 26.3978C19.4196 27.0454 18.5974 27.6765 18.7012 28.8685C18.9254 31.5619 22.804 29.9698 24.245 30.0234C25.3413 30.0605 27.5464 31.1577 28.7299 30.4482C29.2905 30.1141 30.1377 29.2356 29.411 28.0766C28.9292 27.3094 28.0779 26.3277 27.671 25.7709C26.7615 24.5252 26.3255 22.5206 24.6437 22.335C22.6172 22.1123 22.2642 23.7869 21.741 24.7686H21.7368L21.7327 24.7645Z" fill="black" />
                </g>
                <defs>
                    <clipPath id="clip0_823_6329">
                        <rect width="47" height="54" fill="white" transform="translate(0.5)" />
                    </clipPath>
                </defs>
            </svg> -->
        </div>

        <!-- ここからリスト画像 -->
        <div class="column__flex">

            <ul class="gallery top__photo">
                <li><img src="<?php the_field("pic1"); ?>" alt=""></li>
                <li><img src="<?php the_field("pic2"); ?>" alt=""></li>
                <li><img src="<?php the_field("pic3"); ?>" alt=""></li>
                <li><img src="<?php the_field("pic4"); ?>" alt=""></li>

            </ul>
        </div>
        <div class="column__flex">
            <div class="flex__sb2 photo__container2">
                <ul class="choice-btn">
                    <li><img src="<?php the_field("pic1"); ?>" alt=""></li>
                    <li><img src="<?php the_field("pic2"); ?>" alt=""></li>
                    <li><img src="<?php the_field("pic3"); ?>" alt=""></li>
                    <li><img src="<?php the_field("pic4"); ?>" alt=""></li>

                </ul>
            </div>
        </div>
        <!-- ここからリスト画像終わり -->


        <!-- タクソノミーを取得する -->
        <?php
        $post_type = get_post_type(get_the_ID());
        $taxonomies = get_object_taxonomies($post_type);

        $taxonomy_names = wp_get_object_terms(get_the_ID(), $taxonomies,  array("fields" => "names", "orderby" => "count"));

        ?>
        <!-- タクソノミーを出力 -->
        <ul class="taxonomis">
            <?php
            if (!empty($taxonomy_names)) :
                foreach ($taxonomy_names as $tax_name) : ?>

            <li class="card__tag single-tag"><?php echo $tax_name; ?> </li>

            <?php endforeach;
            endif;  ?>
            <?php if (get_field("note") !== "") : ?>
            <li class="card__tag single-tag">特記事項あり</li>
            <?php endif; ?>
        </ul>

        <div class="w80per__responsive mb20">
            <p class="paddinglr20"><?php the_field("company_info"); ?></p>
        </div>

        <!-- コンテンツのサブタイトル -->
        <div class="info__wrap">
            <h2 class="mb20 info">information</h2>

            <div>
                <!-- information -->
                <div class="information">
                    <!-- 公園 -->
                    <?php if (in_array('公園', $taxonomy_names)) : ?>
                    <dl>
                        <dt>住所</dt>
                        <dd><?php the_field("address"); ?></dd>
                    </dl>
                    <dl>
                        <dt>利用時間</dt>
                        <dd><?php the_field("business_hours"); ?></dd>
                    </dl>
                    <dl>
                        <dt>敷地面積</dt>
                        <dd><?php the_field("breadth"); ?></dd>
                    </dl>
                    <dl>
                        <dt>管理会社</dt>
                        <dd><?php the_field("company"); ?></dd>
                    </dl>
                    <dl>
                        <dt>電話番号</dt>
                        <dd><?php the_field("tel"); ?></dd>
                    </dl>
                    <dl>
                        <dt>メール</dt>
                        <dd><?php the_field("email"); ?></dd>
                    </dl>
                    <dl>
                        <dt>ホームページ</dt>
                        <dd><a href="<?php the_field("url"); ?>" target="_blank"><?php the_field("url"); ?></a></dd>
                    </dl>
                    <dl>
                        <dt>トイレ</dt>
                        <dd><?php if (get_field("toilet")) {
                                    echo "有り";
                                } else {
                                    echo "なし";
                                } ?></dd>
                    </dl>
                    <dl>
                        <dt>喫煙所</dt>
                        <dd><?php if (get_field("smoking")) {
                                    echo "有り";
                                } else {
                                    echo "なし";
                                } ?></dd>
                    </dl>
                    <dl>
                        <dt>駐車場（車）</dt>
                        <dd><?php if (get_field("parking")) : ?>
                            <span><?php the_field("parking_area"); ?></span>
                            <?php else : ?>
                            <span>なし</span>
                            <?php endif; ?>
                        </dd>
                    </dl>
                    <dl>
                        <dt>駐輪場（自転車）</dt>
                        <dd><?php if (get_field("bicycle")) {
                                    echo "有り";
                                } else {
                                    echo "なし";
                                } ?></dd>
                    </dl>
                    <dl>
                        <dt>芝生エリア</dt>
                        <dd><?php if (get_field("grass")) {
                                    echo "有り";
                                } else {
                                    echo "なし";
                                } ?></dd>
                    </dl>
                    <dl>
                        <dt>自動販売機</dt>
                        <dd><?php if (get_field("vending_machine")) {
                                    echo "有り";
                                } else {
                                    echo "なし";
                                } ?></dd>
                    </dl>
                    <dl>
                        <dt>屋根付き休憩室</dt>
                        <dd><?php if (get_field("roof")) {
                                    echo "有り";
                                } else {
                                    echo "なし";
                                } ?></dd>
                    </dl>
                    <dl>
                        <dt>禁止事項</dt>
                        <dd><?php the_field("ban"); ?></dd>
                    </dl>
                    <dl class="note">
                        <dt>【特記事項】</dt>
                        <dd>
                            <?php the_field("note"); ?>
                        </dd>
                    </dl>
                    <!-- ドッグラン -->
                    <?php elseif ((in_array('ドッグラン', $taxonomy_names))) : ?>
                    <dl>
                        <dt>住所</dt>
                        <dd><?php the_field("address"); ?></dd>
                    </dl>
                    <dl>
                        <dt>電話番号</dt>
                        <dd><?php the_field("tel"); ?></dd>
                    </dl>
                    <dl>
                        <dt>受付時間</dt>
                        <dd><?php the_field("reception"); ?></dd>
                    </dl>
                    <dl>
                        <dt>利用時間</dt>
                        <dd><?php the_field("business_hours"); ?></dd>
                    </dl>
                    <dl>
                        <dt>定休日</dt>
                        <dd><?php the_field("close"); ?></dd>
                    </dl>
                    <dl>
                        <dt>ホームページ</dt>
                        <dd><a href="<?php the_field("url"); ?>" target="_blank"><?php the_field("url"); ?></a></dd>
                    </dl>
                    <?php if (get_field("instagram") !== "") : ?>
                    <dl>
                        <dt>Instagram</dt>
                        <dd>
                            <a href="<?php the_field("instagram"); ?>" target="_blank"><?php the_field("instagram"); ?></a>
                        </dd>
                    </dl>
                    <?php endif; ?>
                    <?php if (get_field("facebook") !== "") : ?>
                    <dl>
                        <dt>Facebook</dt>
                        <dd>
                            <a href="<?php the_field("facebook"); ?>" target="_blank"><?php the_field("facebook"); ?></a>
                        </dd>
                    </dl>
                    <?php endif; ?>
                    <?php if (get_field("x") !== "") : ?>
                    <dl>
                        <dt>x</dt>
                        <dd>
                            <a href="<?php the_field("x"); ?>" target="_blank"><?php the_field("x"); ?></a>
                        </dd>
                    </dl>
                    <?php endif; ?>
                    <?php if (get_field("sns") !== "") : ?>
                    <dl>
                        <dt>SNS</dt>
                        <dd>
                            <a href="<?php the_field("sns"); ?>" target="_blank"><?php the_field("sns"); ?></a>
                        </dd>
                    </dl>
                    <?php endif; ?>
                    <dl>
                        <dt>登録</dt>
                        <dd><?php if (get_field("register")) {
                                    echo "必要";
                                } else {
                                    echo "不要";
                                } ?></dd>
                    </dl>
                    <dl>
                        <dt>駐車場（車）</dt>
                        <dd><?php if (get_field("parking")) : ?>
                            <span><?php the_field("parking_area"); ?></span>
                            <?php else : ?>
                            <span>なし</span>
                            <?php endif; ?>
                        </dd>
                    </dl>
                    <dl>
                        <dt>常駐管理者</dt>
                        <dd><?php if (get_field("on_site")) {
                                    echo "在中";
                                } else {
                                    echo "不在";
                                } ?></dd>
                    </dl>
                    <dl>
                        <dt>フィールド</dt>
                        <dd><?php the_field("field"); ?></dd>
                    </dl>
                    <dl>
                        <dt>フェンスの高さ</dt>
                        <dd><?php the_field("fence"); ?></dd>
                    </dl>
                    <dl>
                        <dt>ダストボックス</dt>
                        <dd><?php if (get_field("dust")) {
                                    echo "有り";
                                } else {
                                    echo "なし";
                                } ?></dd>
                    </dl>
                    <dl>
                        <dt>足洗い場</dt>
                        <dd><?php if (get_field("washing")) {
                                    echo "有り";
                                } else {
                                    echo "なし";
                                } ?></dd>
                    </dl>
                    <dl>
                        <dt>対応犬種</dt>
                        <dd><?php the_field("dog_size"); ?></dd>
                    </dl>
                    <dl>
                        <dt>小型犬と中・大型犬を分けている</dt>
                        <dd><?php if (get_field("divide")) {
                                    echo "分けている";
                                } else {
                                    echo "分かれていない";
                                } ?></dd>
                    </dl>
                    <dl>
                        <dt>入場ルール</dt>
                        <dd><?php the_field("rule"); ?></dd>
                    </dl>
                    <dl>
                        <dt>決済方法</dt>
                        <dd>
                            <?php the_field("payment"); ?>
                            <?php if (get_field("payment_text" !== "")) {
                                    echo ",";
                                    the_field("payment_text");
                                } else {
                                    the_field("payment_text");
                                } ?>
                        </dd>
                    </dl>
                    <dl class="note">
                        <dt>【特記事項】</dt>
                        <dd>
                            <?php the_field("note"); ?>
                        </dd>
                    </dl>
                    <!-- 自然・観光 -->
                    <?php elseif ((in_array('自然・観光', $taxonomy_names))) : ?>
                    <dl>
                        <dt>住所</dt>
                        <dd><?php the_field("address"); ?></dd>
                    </dl>
                    <dl>
                        <dt>利用時間</dt>
                        <dd><?php the_field("business_hours"); ?></dd>
                    </dl>
                    <dl>
                        <dt>管理会社</dt>
                        <dd><?php the_field("company"); ?></dd>
                    </dl>
                    <dl>
                        <dt>電話番号</dt>
                        <dd><?php the_field("tel"); ?></dd>
                    </dl>
                    <dl>
                        <dt>ホームページ</dt>
                        <dd><a href="<?php the_field("url"); ?>" target="_blank"><?php the_field("url"); ?></a></dd>
                    </dl>
                    <dl>
                        <dt>トイレ</dt>
                        <dd><?php if (get_field("toilet")) {
                                    echo "有り";
                                } else {
                                    echo "なし";
                                } ?></dd>
                    </dl>
                    <dl>
                        <dt>喫煙所</dt>
                        <dd><?php if (get_field("smoking")) {
                                    echo "有り";
                                } else {
                                    echo "なし";
                                } ?></dd>
                    </dl>
                    <dl>
                        <dt>駐車場（車）</dt>
                        <dd><?php if (get_field("parking")) : ?>
                            <span><?php the_field("parking_area"); ?></span>
                            <?php else : ?>
                            <span>なし</span>
                            <?php endif; ?>
                        </dd>
                    </dl>
                    <dl>
                        <dt>駐輪場（自転車）</dt>
                        <dd><?php if (get_field("bicycle")) {
                                    echo "有り";
                                } else {
                                    echo "なし";
                                } ?></dd>
                    </dl>
                    <dl>
                        <dt>自動販売機</dt>
                        <dd><?php if (get_field("vending_machine")) {
                                    echo "有り";
                                } else {
                                    echo "なし";
                                } ?></dd>
                    </dl>
                    <dl>
                        <dt>屋根付き休憩室</dt>
                        <dd><?php if (get_field("roof")) {
                                    echo "有り";
                                } else {
                                    echo "なし";
                                } ?></dd>
                    </dl>
                    <dl class="note">
                        <dt>禁止事項</dt>
                        <dd>
                            <?php the_field("ban"); ?>
                        </dd>
                    </dl>
                    <dl class="note">
                        <dt>【特記事項】</dt>
                        <dd>
                            <?php the_field("note"); ?>
                        </dd>
                    </dl>
                    <!-- 屋内施設 -->
                    <?php else : ?>
                    <dl>
                        <dt>住所</dt>
                        <dd><?php the_field("address"); ?></dd>
                    </dl>
                    <dl>
                        <dt>電話番号</dt>
                        <dd><?php the_field("tel"); ?></dd>
                    </dl>
                    <dl>
                        <dt>営業時間</dt>
                        <dd><?php the_field("business_hours"); ?></dd>
                    </dl>
                    <dl>
                        <dt>定休日</dt>
                        <dd><?php the_field("close"); ?></dd>
                    </dl>
                    <dl>
                        <dt>ホームページ</dt>
                        <dd><a href="<?php the_field("url"); ?>" target="_blank"><?php the_field("url"); ?></a></dd>
                    </dl>
                    <dl>
                        <dt>駐車場（車）</dt>
                        <dd><?php if (get_field("parking")) : ?>
                            <span><?php the_field("parking_area"); ?></span>
                            <?php else : ?>
                            <span>なし</span>
                            <?php endif; ?>
                        </dd>
                    </dl>
                    <dl>
                        <dt>駐輪場（自転車）</dt>
                        <dd><?php if (get_field("bicycle")) {
                                    echo "有り";
                                } else {
                                    echo "なし";
                                } ?></dd>
                    </dl>
                    <dl>
                        <dt>対応犬種</dt>
                        <dd><?php the_field("dog_size"); ?></dd>
                    </dl>
                    <dl>
                        <dt>入店ルール</dt>
                        <dd><?php the_field("rule"); ?></dd>
                    </dl>
                    <dl>
                        <dt>決済方法</dt>
                        <dd>
                            <?php the_field("payment"); ?>
                            <?php if (get_field("payment_text" !== "")) {
                                    echo ",";
                                    the_field("payment_text");
                                } else {
                                    the_field("payment_text");
                                } ?>
                        </dd>
                    </dl>
                    <dl class="note">
                        <dt>【特記事項】</dt>
                        <dd>
                            <?php the_field("note"); ?>
                        </dd>
                    </dl>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <!-- 地図 -->
        <div class="iframe">
            <?php the_field("iframe"); ?>
        </div>

        <!-- リンク -->
        <div class="link__area flex mt100">
            <div class="headline flex">
                <h2 class="fs24to30"><i class="fa-solid fa-paw"></i>その他おすすめ</h2>
            </div>
        </div>

        <!-- カード型コンテンツまとめ -->
        <div class="card__contents mw12">

            <?php
            $nearby_query = new WP_Query(
                array(
                    'post_type' => 'enjoy',
                    'orderby' => 'rand',
                    'posts_per_page' => '3',
                    'post__not_in' => array($post->ID),
                )
            );
            ?>

            <?php if ($nearby_query->have_posts()) : ?>
            <?php while ($nearby_query->have_posts()) : ?>
            <?php $nearby_query->the_post(); ?>

            <!-- カード型 -->
            <div class="card tokushima">
                <a href="#">
                    <!-- 背面 -->
                    <div class="card__back"></div>
                    <!-- 前面 -->
                    <div class="card__front">
                        <!-- カード内情報 -->
                        <!-- サムネイルの取得 -->
                        <a href="<?php the_permalink(); ?>">
                            <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail("medium"); ?>
                            <?php else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/noimage_600x400.png" alt="">
                            <?php endif; ?>
                        </a>
                        <div class="card__tag bgGL">
                            <p>遊ぶ</p>
                        </div>
                        <h2 class="card__outline"><?php the_title(); ?></h2>
                        <div class="card__line"></div>
                        <div class="card__textarea">
                            <dl>
                                <dd>●住所：</dd>
                                <dd><?php the_field("address"); ?></dd>
                            </dl>
                            <dl>
                                <dd>●お問い合わせ：</dd>
                                <dd><?php the_field("tel"); ?></dd>
                            </dl>
                            <!-- <dl class="card__url">
                                <dd>●URL：</dd>
                                <dd><a href="<?php the_field("url"); ?>"><?php the_field("url"); ?></a></dd>
                            </dl> -->
                        </div>
                    </div>
                </a>
            </div>

            <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>

            <!-- 記事が4以上ならmoreボタンを出す。 -->

        </div>

        <!-- <button id="btn__tokushima" class="more-button">
            MORE
        </button> -->

        <!-- 特集記事リンク -->
        <?php if (get_field('url_article') !== "") : ?>
        <div class="link__area flex mt100">
            <div class="headline flex">
                <h2 class="fs24to30"><i class="fa-solid fa-paw"></i>関連記事</h2>
            </div>
            <a class="special__article flex mt40">
                <p class="fs24">特集記事</p>
            </a>
        </div>
        <div class="line mt100"></div>
        <?php endif; ?>

        <!-- 口コミフォーム -->
        <div class="comments flex mt100">
            <div class="headline flex">
                <h2 class="fs24to30"><i class="fa-solid fa-paw"></i>口コミ</h2>
            </div>

            <?php comments_template(); ?>

            <!-- 口コミ一覧 -->
            <div class="comments__area tc mt40">
                <div class="pd40">
                    <h2 class="fs24"><?php the_title(); ?>の口コミ一覧</h2>
                    <ul class="mt40">
                        <li class="comments__archive mt20">
                            <p>口コミのテキストが入ります。</p>
                        </li>
                        <li class="comments__archive mt20">
                            <p>口コミのテキストが入ります。</p>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- 口コミ投稿する -->
            <div class="comments__area tc mt60">
                <div class="pd40">
                    <h2 class="fs24">口コミ投稿する</h2>
                    <p class="comments__attention tl mt20 fw500">
                        送信時には口コミ投稿欄利用規約に同意したとみなしますので必ずご確認お願いします。 サイト管理者により、口コミ内容を確認し、掲載いたします。確認するまで数日かかる場合がございますがご了承ください。
                    </p>
                    <form action="" method="">
                        <label>
                            <h3 class="comments__underline pd10 fs20">口コミ</h3>
                            <textarea class="input mt20 fs16" name="" cols="30" rows="10" maxlength="400" placeholder="400文字以内で入力してください。"></textarea>
                        </label>
                        <label>
                            <h3 class="comments__underline pd10 fs20">お名前</h3>
                            <input type="text" class="input mt20 fs24">
                        </label>
                        <input type="submit" class="submit__button mt20 fs24 fwb" value="送信">
                    </form>
                </div>
            </div>
        </div>

    </div>
</main>

<!-- footer.phpを読み込む -->
<?php get_footer(); ?>
