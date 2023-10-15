<tr>
    <td><a href="<?php the_permalink(); ?>"><?php the_field('facility') ?></a></td>
    <td><?php the_field('address') ?></td>
    <td>
        <?php if (get_field('tel') == "") {
            echo "-";
        } else {
            the_field('tel');
        } ?>
    </td>
</tr>
<tr class="line__dashed">
</tr>
