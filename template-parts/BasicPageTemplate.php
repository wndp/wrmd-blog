<?php /* Template Name: Basic Page Template */ ?>

<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

    <?php
    while ( have_posts() ) :
        the_post();
    ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

        <div class="panel panel-default">
            <div class="panel-body">
                <?php the_content(); ?>
            </div>
        </div>
    </article><!-- #post-<?php the_ID(); ?> -->

    <?php endwhile; // End of the loop. ?>

    </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_sidebar();
get_footer();
