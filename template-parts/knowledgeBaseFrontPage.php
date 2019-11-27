<?php /* Template Name: Knowledge Base Front Page */ ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

    <?php the_content(); ?>
</article><!-- #post-<?php the_ID(); ?> -->
