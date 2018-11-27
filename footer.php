<?php
/**
 * Footer.php
 *
 * Diseñado para modificar el tema OnePress
 *
 * @package OnePress-Child
 */

$hide_footer = false;
$page_id = get_the_ID();

if ( is_page() ){
    $hide_footer = get_post_meta( $page_id, '_hide_footer', true );
}

if ( onepress_is_wc_active() ) {
    if ( is_shop() ) {
        $page_id =  wc_get_page_id('shop');
        $hide_footer = get_post_meta( $page_id, '_hide_footer', true );
    }
}



if ( ! $hide_footer ) {
    ?>
    <footer id="colophon" class="site-footer" role="contentinfo">

        <?php

            dynamic_sidebar( 'funcion' );
            do_action('onepress_before_site_info');
            
            $onepress_btt_disable = sanitize_text_field(get_theme_mod('onepress_btt_disable'));

        ?>
            
        <div class="site-info">
            <div class="container">
                <?php if ($onepress_btt_disable != '1') : ?>
                    <div class="btt">
                        <a class="back-to-top" href="#page" title="<?php echo esc_html__('Ir al Inicio (Arriba)', 'onepress') ?>"><i class="fa fa-angle-double-up wow flash" data-wow-duration="2s"></i></a>
                    </div>
                    
                <?php endif; ?>
                <?php
                    wp_nav_menu( array( 'theme_location' => 'header-menu' ) );
                    echo("<h3 style='color: #FFF;'> Copyright © 2018 Game Motion</h3>");
                ?>
            </div>
        </div>
        <!-- .site-info -->

    </footer><!-- #colophon -->
    <?php
}

    do_action( 'onepress_site_end' );
?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
