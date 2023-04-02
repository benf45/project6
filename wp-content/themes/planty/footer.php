<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package OnePress
 */

$hide_footer = false;
$page_id     = get_the_ID();

if ( is_page() ) {
	$hide_footer = get_post_meta( $page_id, '_hide_footer', true );
}

if ( onepress_is_wc_active() ) {
	if ( is_shop() ) {
		$page_id     = wc_get_page_id( 'shop' );
		$hide_footer = get_post_meta( $page_id, '_hide_footer', true );
	}
}

if ( ! $hide_footer ) {
	?>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<?php
		/**
		 * @since 2.0.0
		 * @see onepress_footer_widgets
		 * @see onepress_footer_connect
		 */
		do_action( 'onepress_before_site_info' );
		$onepress_btt_disable = sanitize_text_field( get_theme_mod( 'onepress_btt_disable' ) );

		?>

		<!--<div class="site-info">
			<div class="container">
				<?php if ( $onepress_btt_disable != '1' ) : ?>
					<div class="btt">
						<a class="back-to-top" href="#page" title="<?php echo esc_attr__( 'Back To Top', 'onepress' ); ?>"><i class="fa fa-angle-double-up wow flash" data-wow-duration="2s"></i></a>
					</div>
				<?php endif; ?>
				<?php
				/**
				 * hooked onepress_footer_site_info
				 *
				 * @see onepress_footer_site_info
				 */
				do_action( 'onepress_footer_site_info' );
				?>
			</div>
		</div>-->

	</footer>
	<?php
}
/**
 * Hooked: onepress_site_footer
 *
 * @see onepress_site_footer
 */
do_action( 'onepress_site_end' );
?>
</div>

<?php do_action( 'onepress_after_site_end' ); ?>

<?php wp_footer(); ?>

	<script>
    
    jQuery('<div class="quantity-nav"><div class="quantity-button quantity-up">+</div><div class="quantity-button quantity-down">-</div></div>')
    .insertAfter('.order-number-form-section form input[type="number"]');
    
    jQuery('.order-number-form-section form').find('input[type="number"]').val(0);
    
    jQuery('.order-number-form-section form').each(function() {
        var spinner = $(this);
        var input = spinner.find('input[type="number"]');
        var btnUp = spinner.find('.quantity-up');
        var btnDown = spinner.find('.quantity-down');
        var min = input.attr('min');
        var max = input.attr('max');

      btnUp.click(function() {
 
        if(input.val() == "") {
            input.val(0);
        }
      	
        var oldValue = parseFloat(input.val());
        if (oldValue >= max) {
          var newVal = oldValue;
        } else {
          var newVal = oldValue + 1;
        }
        spinner.find('input[type="number"]').val(newVal);
        spinner.find('input[type="number"]').trigger("change");
      });

      btnDown.click(function() {
        if(input.val() == "") {
            input.val(0);
        }
        var oldValue = parseFloat(input.val());
        if (oldValue <= min) {
          var newVal = oldValue;
        } else {
          var newVal = oldValue - 1;
        }
        spinner.find('input[type="number"]').val(newVal);
        spinner.find('input[type="number"]').trigger("change");
      });

    });
    
	</script>

</body>
</html>
