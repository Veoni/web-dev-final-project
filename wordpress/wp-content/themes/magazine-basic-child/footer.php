<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @since 3.0.0
 */
			/* Do not display sidebars if full width option selected on single
			   post/page templates */
			if ( 5 != mb_theme_options( 'layout' ) ) get_sidebar(); ?>
			<?php get_sidebar( 'second' ); ?>

	</div> <!-- #main.row -->
</div> <!-- #page.grid -->

<footer id="footer" role="contentinfo">

	<div id="footer-content" class="grid <?php echo mb_theme_options( 'width' ); ?>">
		<div class="row">

			<p class="copyright c12">
				<span class="fl"><a href="<?php echo home_url(); ?>"><?php echo bloginfo( 'name' ); ?></a></span>
			</p><!-- .c12 -->

		</div><!-- .row -->
	</div><!-- #footer-content.grid -->

</footer><!-- #footer -->

<?php wp_footer(); ?>
<!-- Magazine Basic created by c.bavota - http://themes.bavotasan.com -->
</body>
</html>