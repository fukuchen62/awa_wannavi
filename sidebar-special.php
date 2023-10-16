<!-- aside カテゴリー一覧 -->

<div class="aside__col">
    <div class="category__tag yellow">カテゴリー一覧</div>

    <div class="category__innner">
        <ul>
            <!-- テンプレートパーツでliの指定をしてあげる -->
            <?php
            $args = array(
                'taxonomy' => 'special_type',
                'parent' => 0
            );
            $list_src = "";

            $the_query = new WP_Term_Query($args);
            foreach ($the_query->get_terms() as $term) :

                $list_src .= '<li class="category__list"><a href="' . get_term_link($term) . '">' . $term->name . ' (' . $term->count . ')</a></li>';

            endforeach;
            echo '<ul>' . $list_src . '</ul>';
            ?>
            <!-- <li class="category__list"><a href="#">マナー</a></li>
            <li class="category__list"><a href="#">犬の豆知識</a></li>
            <li class="category__list"><a href="#">お出かけ情報</a></li>
            <li class="category__list"><a href="#">特集</a></li> -->
        </ul>
    </div>

</div>
