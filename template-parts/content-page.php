<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WRMD_Blog
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .panel-heading test -->

	<?php wrmd_blog_post_thumbnail(); ?>

	<div class="page-body">
		<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wrmd-blog' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .panel-body -->
</article><!-- #post-<?php the_ID(); ?> -->
