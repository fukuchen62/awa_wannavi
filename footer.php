<div class="pagetop js-pagetop"><i class="fas fa-angle-up"></i>PAGE TOP</div>

<footer class="footer">
    <div class="container">
        <div class="footer_inner">
            <nav>
                <?php
                $args = [
                    "menu" => "sitemap",
                    "menu_class" => "",
                    "container" => false
                ];
                wp_nav_menu($args);
                ?>
            </nav>
            <div class="footer_copyright">
                <small>&copy; BISTRO CALME All rights reserved.</small>
            </div>
        </div>
    </div>
</footer>

<!-- wp_footer()を呼び出す -->
<?php wp_footer(); ?>
</body>

</html>
