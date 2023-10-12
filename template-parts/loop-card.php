    <!-- カード型 -->
    <section class="card tokushima">
        <!-- IDの追加 -->
        <a id="post-<?php the_ID(); ?>" <?php post_class("tokushima") ?> href="#">
            <!-- 背面 -->
            <div class="card__back"></div>
            <!-- 前面 -->
            <div class="card__front">
                <!-- カード内情報 -->
                <!-- サムネイル画像を投稿画面からとってくる -->
                <!-- 教科書79p -->
                <div class="thumbnail__pic">
                    <a href="<?php the_permalink(); ?>">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail("medium"); ?>
                        <?php else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/noimage_600x400.png" alt="">
                        <?php endif; ?>
                    </a>
                </div>

                <div class="card__tag bgGL">
                    <p>遊ぶ</p>
                </div>

                <!-- カテゴリが引っ張ってこれません2023/10/10 記事のカテゴリ75p -->
                <?php the_category(); ?>
                <!-- 記事タイトル表示 76p -->
                <h2 class="card__outline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div class="card__line"></div>
                <div class="card__textarea">
                    <dl>
                        <dd>●住所：</dd>
                        <!-- getfieldからデータを抜き出す203p -->
                        <dd><?php
                            the_field("address");
                            ?></dd>
                    </dl>
                    <dl>
                        <dd>●お問い合わせ：</dd>
                        <dd><?php
                            the_field("tel");
                            ?></dd>
                    </dl>
                    <dl class="card__url">
                        <dd>●URL：</dd>
                        <dd><a href=""><?php
                                        the_field("url");
                                        ?></a></dd>
                    </dl>
                </div>
            </div>
        </a>
    </section>
