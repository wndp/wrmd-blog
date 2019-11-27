<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WRMD_Blog
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('panel panel-default'); ?>>
	<header class="panel-heading">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .panel-heading -->

	<?php wrmd_blog_post_thumbnail(); ?>

	<div class="panel-body">
		<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wrmd-blog' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .panel-body -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="panel-footer">

		</footer><!-- .panel-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
