<!-- header.phpを読み込む -->
<?php get_header(); ?>

<main>
    <h2 class="search__ttl">条件検索</h2>
    <!-- パンくずリスト -->
    <?php get_template_part("template-parts/breadcrumb"); ?>
    <div class="filtering__wrap">

        <!-- フォームを読み込む -->
        <!-- 農業体験を詳細に絞り込むためのフォーム -->
        <div class="form-wrap">
            <form class="inner" method="get" action="">
                <!--隠しフィールドとして記述する（これがないとフォームがうまく動作しません）-->
                <input type="hidden" name="s" value="">
                <!-- ここから本文 -->
                <div class="search-content">
                    <section class="choice-wrap area-wrap">

                        <h3 class="search-title area">エリアから探す<img src="<?php echo get_template_directory_uri(); ?>/assets/img/filtering/filtering_ill_01.svg" alt=""></h3>

                        <ul id="area" class="radio-box">
                            <li class="choice-item">
                                <input type="checkbox" name="area[]" value="tokushima" id="tokushima" class="checkbox_list" />
                                <label for="tokushima" class="s-search-btn">徳島市内</label>
                            </li>
                            <li class="choice-item">
                                <input type="checkbox" name="area[]" value="east" id="east" class="checkbox_list" />
                                <label for="east" class="s-search-btn">県内東部</label>
                            </li>
                            <li class="choice-item">
                                <input type="checkbox" name="area[]" value="west" id="west" class="checkbox_list" />
                                <label for="west" class="s-search-btn">県内西部</label>
                            </li>
                            <li class="choice-item">
                                <input type="checkbox" name="area[]" value="south" id="south" class="checkbox_list" />
                                <label for="south" class="s-search-btn">県内南部</label>
                            </li>
                        </ul>
                    </section>

                    <section class="choice-wrap event-type-wrap">
                        <h3 class="search-title event">目的から探す<img src="<?php echo get_template_directory_uri(); ?>/assets/img/filtering/filtering_ill_02.svg" alt=""></h3>

                        <ul class="area__subtitle">
                            <li class="flex__shrink">●遊　ぶ</li>
                            <li class="flex__shrink">●泊まる</li>
                            <li class="flex__shrink">●食べる</li>
                        </ul>

                        <div class="doing">
                            <ul id="area">
                                <li class="none flex__shrink">遊ぶ</li>
                                <li class="choice-item flex__shrink"><input type="checkbox" name="event_type[]" value="park" id="park" class="checkbox_list" />
                                    <label for="park" class="s-search-btn">公園</label>
                                </li>
                                <li class="choice-item flex__shrink">
                                    <input type="checkbox" name="event_type[]" value="dogrun" id="dogrun" class="checkbox_list" />
                                    <label for="dogrun" class="s-search-btn">ドッグラン</label>
                                </li>
                                <li class="choice-item flex__shrink">
                                    <input type="checkbox" name="event_type[]" value="farm_stay" id="farm_stay" class="checkbox_list" />
                                    <label for="farm_stay" class="s-search-btn">自然・観光</label>
                                </li>
                                <li class="choice-item flex__shrink">
                                    <input type="checkbox" name="event_type[]" value="farm_stay" id="farm_stay" class="checkbox_list" />
                                    <label for="farm_stay" class="s-search-btn">屋内施設</label>
                                </li>
                            </ul>
                            <ul id="area">
                                <li class="none flex__shrink">泊まる</li>
                                <li class="choice-item flex__shrink"><input type="checkbox" name="event_type[]" value="pethotel" id="pethotel" class="checkbox_list" />
                                    <label for="pethotel" class="s-search-btn">ペットホテル</label>
                                </li>
                                <li class="choice-item flex__shrink">
                                    <input type="checkbox" name="event_type[]" value="pet&stay" id="pet&stay" class="checkbox_list" />
                                    <label for="pet&stay" class="s-search-btn">ペットと宿泊</label>
                                </li>
                                <li class="choice-item flex__shrink">
                                    <input type="checkbox" name="event_type[]" value="camp" id="camp" class="checkbox_list" />
                                    <label for="camp" class="s-search-btn">キャンプ</label>
                                </li>
                                <li></li>
                            </ul>
                            <ul id="area">
                                <li class="none flex__shrink">食べる</li>
                                <li class="choice-item flex__shrink"><input type="checkbox" name="event_type[]" value="dogcafe" id="dogcafe" class="checkbox_list" />
                                    <label for="dogcafe" class="s-search-btn">ドッグカフェ</label>
                                </li>
                                <li class="choice-item flex__shrink">
                                    <input type="checkbox" name="event_type[]" value="pet&meal" id="pet&meal" class="checkbox_list" />
                                    <label for="pet&meal" class="s-search-btn">ペットと食事</label>
                                </li>
                            </ul>
                        </div>
                    </section>

                    <section class="choice-wrap type-wrap">
                        <h3 class="search-title type">条件から探す<img src="<?php echo get_template_directory_uri(); ?>/assets/img/filtering/filtering_ill_03.svg" alt=""></h3>

                        <ul class="area__subtitle">
                            <li>●犬　種</li>
                            <li>●駐車場</li>
                        </ul>

                        <div class="doing">
                            <ul id="area" class="checkbox_wrap none">
                                <li class="none">犬種</li>
                                <li class="choice-sub-item">
                                    <input type="checkbox" name="season[]" value="smalldog" id="smalldog" class="checkbox_list" />
                                    <label for="smalldog" class="s-search-btn">小型犬</label>
                                </li>
                                <li class="choice-sub-item">
                                    <input type="checkbox" name="season[]" value="mediumdog" id="mediumdog" class="checkbox_list" />
                                    <label for="mediumdog" class="s-search-btn">中型犬</label>
                                </li>
                                <li class="choice-sub-item">
                                    <input type="checkbox" name="season[]" value="largedog" id="largedog" class="checkbox_list" />
                                    <label for="largedog" class="s-search-btn">大型犬<label>
                                </li>
                            </ul>
                            <ul id="area" class="checkbox_wrap">
                                <li class="none">駐車場</li>
                                <li class="choice-sub-item">
                                    <input type="checkbox" name="season[]" value="yes" id="yes" class="checkbox_list" />
                                    <label for="yes" class="s-search-btn">有</label>
                                </li>
                                <li class="choice-sub-item">
                                    <input type="checkbox" name="season[]" value="nothing" id="nothing" class="checkbox_list" />
                                    <label for="nothing" class="s-search-btn">無</label>
                                </li>
                            </ul>
                        </div>
                    </section>
                    <!-- ボタン -->
                    <div class="searchbtn-restbtn-wrap">
                        <!-- リセットボタン -->
                        <div class="reset-btn-inner">
                            <input type="checkbox" value="リセット" id="reset-btn" /><label for="reset-btn" class="reset-btn">リセット</label>
                        </div>
                        <!-- 検索ボタン -->
                        <div class="search-btn-inner">
                            <input type="submit" value=" これでさがす " id="search-btn" />
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="container">
        <div class="pd40">
            <h2 class="search__ttl">〇〇〇の検索結果</h2>
        </div>
        <!-- 一つ目のカテゴリのカード群 -->
        <!-- コンテンツのサブタイトル -->
        <div class="mb40 mt40">
            <div class="sub__title bgGL"><i class="fa-solid fa-paw"></i>遊ぶの検索結果</div>
        </div>
        <div class="next__info tr2"><a href="">>>〇〇件</a></div>
        <!-- カード型コンテンツまとめ -->
        <div class="card__contents mw12">
            <!-- カード型 -->
            <div class="card tokushima">
                <a href="#">
                    <!-- 背面 -->
                    <div class="card__back"></div>
                    <!-- 前面 -->
                    <div class="card__front">
                        <!-- カード内情報 -->
                        <img src="../assets/img/cat.jpg" alt="">
                        <div class="card__tag">
                            <p>遊ぶ</p>
                        </div>
                        <h2 class="card__outline">徳島○○○公園</h2>
                        <div class="card__line"></div>
                        <div class="card__textarea">
                            <dl>
                                <dd>●住所：</dd>
                                <dd>徳島市○○○○○-○○</dd>
                            </dl>
                            <dl>
                                <dd>●お問い合わせ：</dd>
                                <dd>○○-○○-○○○</dd>
                            </dl>
                            <dl class="card__url">
                                <dd>●URL：</dd>
                                <dd><a href="">aaaaaaaaa.com</a></dd>
                            </dl>
                        </div>
                    </div>
                </a>
            </div>
            <!-- カード型 -->
            <div class="card tokushima">
                <a href="#">
                    <!-- 背面 -->
                    <div class="card__back"></div>
                    <!-- 前面 -->
                    <div class="card__front">
                        <!-- カード内情報 -->
                        <img src="../assets/img/cat.jpg" alt="">
                        <div class="card__tag">
                            <p>遊ぶ</p>
                        </div>
                        <h2 class="card__outline">徳島○○○公園</h2>
                        <div class="card__line"></div>
                        <div class="card__textarea">
                            <dl>
                                <dd>●住所：</dd>
                                <dd>徳島市○○○○○-○○</dd>
                            </dl>
                            <dl>
                                <dd>●お問い合わせ：</dd>
                                <dd>○○-○○-○○○</dd>
                            </dl>
                            <dl class="card__url">
                                <dd>●URL：</dd>
                                <dd><a href="">aaaaaaaaa.com</a></dd>
                            </dl>
                        </div>
                    </div>
                </a>
            </div>
            <!-- カード型 -->
            <div class="card tokushima">
                <a href="#">
                    <!-- 背面 -->
                    <div class="card__back"></div>
                    <!-- 前面 -->
                    <div class="card__front">
                        <!-- カード内情報 -->
                        <img src="../assets/img/cat.jpg" alt="">
                        <div class="card__tag">
                            <p>遊ぶ</p>
                        </div>
                        <h2 class="card__outline">徳島○○○公園</h2>
                        <div class="card__line"></div>
                        <div class="card__textarea">
                            <dl>
                                <dd>●住所：</dd>
                                <dd>徳島市○○○○○-○○</dd>
                            </dl>
                            <dl>
                                <dd>●お問い合わせ：</dd>
                                <dd>○○-○○-○○○</dd>
                            </dl>
                            <dl class="card__url">
                                <dd>●URL：</dd>
                                <dd><a href="">aaaaaaaaa.com</a></dd>
                            </dl>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <button id="btn__tokushima" class="more-button">
            MORE
        </button>
        <!-- ライン -->
        <div class="line__solid"></div>
        <!-- コンテンツのサブタイトル -->
        <div class="pb20 pd20">
            <div class="sub__title bgBL"><i class="fa-solid fa-paw"></i>泊まるの検索結果</div>
        </div>
        <div class="next__info tr2 mb20"><a href="">>>〇〇件</a></div>
        <!-- 2つめのカテゴリ -->
        <div class="card__contents mw12">
            <!-- カード型 -->
            <div class="card east">
                <a href="#">
                    <!-- 背面 -->
                    <div class="card__back"></div>
                    <!-- 前面 -->
                    <div class="card__front">
                        <!-- カード内情報 -->
                        <img src="../assets/img/cat.jpg" alt="">
                        <div class="card__tag">
                            <p>遊ぶ</p>
                        </div>
                        <h2 class="card__outline">徳島○○○公園</h2>
                        <div class="card__line"></div>
                        <div class="card__textarea">
                            <dl>
                                <dd>●住所：</dd>
                                <dd>徳島市○○○○○-○○</dd>
                            </dl>
                            <dl>
                                <dd>●お問い合わせ：</dd>
                                <dd>○○-○○-○○○</dd>
                            </dl>
                            <dl class="card__url">
                                <dd>●URL：</dd>
                                <dd><a href="">aaaaaaaaa.com</a></dd>
                            </dl>
                        </div>
                    </div>
                </a>
            </div>
            <!-- カード型 -->
            <div class="card east">
                <a href="#">
                    <!-- 背面 -->
                    <div class="card__back"></div>
                    <!-- 前面 -->
                    <div class="card__front">
                        <!-- カード内情報 -->
                        <img src="../assets/img/cat.jpg" alt="">
                        <div class="card__tag">
                            <p>遊ぶ</p>
                        </div>
                        <h2 class="card__outline">徳島○○○公園</h2>
                        <div class="card__line"></div>
                        <div class="card__textarea">
                            <dl>
                                <dd>●住所：</dd>
                                <dd>徳島市○○○○○-○○</dd>
                            </dl>
                            <dl>
                                <dd>●お問い合わせ：</dd>
                                <dd>○○-○○-○○○</dd>
                            </dl>
                            <dl class="card__url">
                                <dd>●URL：</dd>
                                <dd><a href="">aaaaaaaaa.com</a></dd>
                            </dl>
                        </div>
                    </div>
                </a>
            </div>
            <!-- カード型 -->
            <div class="card east">
                <a href="#">
                    <!-- 背面 -->
                    <div class="card__back"></div>
                    <!-- 前面 -->
                    <div class="card__front">
                        <!-- カード内情報 -->
                        <img src="../assets/img/cat.jpg" alt="">
                        <div class="card__tag">
                            <p>遊ぶ</p>
                        </div>
                        <h2 class="card__outline">徳島○○○公園</h2>
                        <div class="card__line"></div>
                        <div class="card__textarea">
                            <dl>
                                <dd>●住所：</dd>
                                <dd>徳島市○○○○○-○○</dd>
                            </dl>
                            <dl>
                                <dd>●お問い合わせ：</dd>
                                <dd>○○-○○-○○○</dd>
                            </dl>
                            <dl class="card__url">
                                <dd>●URL：</dd>
                                <dd><a href="">aaaaaaaaa.com</a></dd>
                            </dl>
                        </div>
                    </div>
                </a>
            </div>
            <!-- 記事が３以上ならmoreボタンを出す。 -->
        </div>
        <button id="btn__east" class="more-button">
            MORE
        </button>
        <!-- ライン -->
        <div class="line__solid"></div>
        <!-- コンテンツのサブタイトル -->
        <div class="mb20 md20">
            <div class="sub__title bgPK"><i class="fa-solid fa-paw"></i>食べるの検索結果</div>
        </div>
        <div class="next__info tr2 mb20"><a href="">>>〇〇件</a></div>
        <!-- ３つめのカテゴリ -->
        <div class="card__contents mw12">
            <!-- カード型 -->
            <div class="card west">
                <a href="#">
                    <!-- 背面 -->
                    <div class="card__back"></div>
                    <!-- 前面 -->
                    <div class="card__front">
                        <!-- カード内情報 -->
                        <img src="../assets/img/cat.jpg" alt="">
                        <div class="card__tag">
                            <p>遊ぶ</p>
                        </div>
                        <h2 class="card__outline">徳島○○○公園</h2>
                        <div class="card__line"></div>
                        <div class="card__textarea">
                            <dl>
                                <dd>●住所：</dd>
                                <dd>徳島市○○○○○-○○</dd>
                            </dl>
                            <dl>
                                <dd>●お問い合わせ：</dd>
                                <dd>○○-○○-○○○</dd>
                            </dl>
                            <dl class="card__url">
                                <dd>●URL：</dd>
                                <dd><a href="">aaaaaaaaa.com</a></dd>
                            </dl>
                        </div>
                    </div>
                </a>
            </div>
            <!-- カード型 -->
            <div class="card west">
                <a href="#">
                    <!-- 背面 -->
                    <div class="card__back"></div>
                    <!-- 前面 -->
                    <div class="card__front">
                        <!-- カード内情報 -->
                        <img src="../assets/img/cat.jpg" alt="">
                        <div class="card__tag">
                            <p>遊ぶ</p>
                        </div>
                        <h2 class="card__outline">徳島○○○公園</h2>
                        <div class="card__line"></div>
                        <div class="card__textarea">
                            <dl>
                                <dd>●住所：</dd>
                                <dd>徳島市○○○○○-○○</dd>
                            </dl>
                            <dl>
                                <dd>●お問い合わせ：</dd>
                                <dd>○○-○○-○○○</dd>
                            </dl>
                            <dl class="card__url">
                                <dd>●URL：</dd>
                                <dd><a href="">aaaaaaaaa.com</a></dd>
                            </dl>
                        </div>
                    </div>
                </a>
            </div>
            <!-- カード型 -->
            <div class="card west">
                <a href="#">
                    <!-- 背面 -->
                    <div class="card__back"></div>
                    <!-- 前面 -->
                    <div class="card__front">
                        <!-- カード内情報 -->
                        <img src="../assets/img/cat.jpg" alt="">
                        <div class="card__tag">
                            <p>遊ぶ</p>
                        </div>
                        <h2 class="card__outline">徳島○○○公園</h2>
                        <div class="card__line"></div>
                        <div class="card__textarea">
                            <dl>
                                <dd>●住所：</dd>
                                <dd>徳島市○○○○○-○○</dd>
                            </dl>
                            <dl>
                                <dd>●お問い合わせ：</dd>
                                <dd>○○-○○-○○○</dd>
                            </dl>
                            <dl class="card__url">
                                <dd>●URL：</dd>
                                <dd><a href="">aaaaaaaaa.com</a></dd>
                            </dl>
                        </div>
                    </div>
                </a>
            </div>
            <!-- 記事が4以上ならmoreボタンを出す。 -->
        </div>
        <button id="btn__west" class="more-button">
            MORE
        </button>
        <!-- ライン -->
        <div class="line__solid"></div>
        <!-- コンテンツのサブタイトル -->
        <div class="mb20 md20">
            <div class="sub__title bgYL"><i class="fa-solid fa-paw"></i>おすすめ情報の<br>検索結果</div>
        </div>
        <div class="next__info tr2 mb20"><a href="">>>〇〇件</a></div>
        <!-- ３つめのカテゴリ -->
        <div class="card__contents mw12">
            <!-- カード型 -->
            <div class="card west">
                <a href="#">
                    <!-- 背面 -->
                    <div class="card__back"></div>
                    <!-- 前面 -->
                    <div class="card__front">
                        <!-- カード内情報 -->
                        <img src="../assets/img/cat.jpg" alt="">
                        <div class="card__tag">
                            <p>遊ぶ</p>
                        </div>
                        <h2 class="card__outline">徳島○○○公園</h2>
                        <div class="card__line"></div>
                        <div class="card__textarea">
                            <dl>
                                <dd>●住所：</dd>
                                <dd>徳島市○○○○○-○○</dd>
                            </dl>
                            <dl>
                                <dd>●お問い合わせ：</dd>
                                <dd>○○-○○-○○○</dd>
                            </dl>
                            <dl class="card__url">
                                <dd>●URL：</dd>
                                <dd><a href="">aaaaaaaaa.com</a></dd>
                            </dl>
                        </div>
                    </div>
                </a>
            </div>
            <!-- カード型 -->
            <div class="card west">
                <a href="#">
                    <!-- 背面 -->
                    <div class="card__back"></div>
                    <!-- 前面 -->
                    <div class="card__front">
                        <!-- カード内情報 -->
                        <img src="../assets/img/cat.jpg" alt="">
                        <div class="card__tag">
                            <p>遊ぶ</p>
                        </div>
                        <h2 class="card__outline">徳島○○○公園</h2>
                        <div class="card__line"></div>
                        <div class="card__textarea">
                            <dl>
                                <dd>●住所：</dd>
                                <dd>徳島市○○○○○-○○</dd>
                            </dl>
                            <dl>
                                <dd>●お問い合わせ：</dd>
                                <dd>○○-○○-○○○</dd>
                            </dl>
                            <dl class="card__url">
                                <dd>●URL：</dd>
                                <dd><a href="">aaaaaaaaa.com</a></dd>
                            </dl>
                        </div>
                    </div>
                </a>
            </div>

            <!-- カード型 -->
            <div class="card west">
                <a href="#">
                    <!-- 背面 -->
                    <div class="card__back"></div>
                    <!-- 前面 -->
                    <div class="card__front">
                        <!-- カード内情報 -->
                        <img src="../assets/img/cat.jpg" alt="">
                        <div class="card__tag">
                            <p>遊ぶ</p>
                        </div>
                        <h2 class="card__outline">徳島○○○公園</h2>
                        <div class="card__line"></div>
                        <div class="card__textarea">
                            <dl>
                                <dd>●住所：</dd>
                                <dd>徳島市○○○○○-○○</dd>
                            </dl>
                            <dl>
                                <dd>●お問い合わせ：</dd>
                                <dd>○○-○○-○○○</dd>
                            </dl>
                            <dl class="card__url">
                                <dd>●URL：</dd>
                                <dd><a href="">aaaaaaaaa.com</a></dd>
                            </dl>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <button id="btn__west" class="more-button">
            MORE
        </button>
        <!-- ライン -->
        <div class="line__solid"></div>
    </div>
</main>


<!-- footer.phpを読み込む -->
<?php get_footer(); ?>
