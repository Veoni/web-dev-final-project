<?php
/**
 * The template for displaying article footers
 *
 * @since 3.0.0
 */
global $mb_content_area;
if ( is_singular() && 'sidebar' != $mb_content_area ) : ?>
    <footer class="entry">
	    <?php
	   	wp_link_pages( array( 'before' => '<p id="pages">' . __( 'Pages:', 'magazine-basic' ) ) );

			the_terms( $post->ID, 'region', '<p class="tags">Region: ', ' ', '</p>' );
			the_terms( $post->ID, 'vintage', '<p class="tags">Vintage: ', ' ', '</p>' );

		edit_post_link( __( '(edit)', 'magazine-basic' ), '<p>', '</p>' );
		?>
	</footer><!-- .entry -->
	<?php
endif;


