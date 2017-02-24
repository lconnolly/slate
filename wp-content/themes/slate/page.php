<?php get_header(); ?>

<div class="container">

    <div class="col--main">
        <main class="main" role="main">
            <?php if (have_posts()): while (have_posts()) : the_post(); ?>

                <hgroup>
            		<h1><?php the_title(); ?></h1>
                </hgroup>

            	<?php the_content(); ?>

                <?php endwhile; ?>
            <?php else: ?>
                <h1><?php _e( 'Sorry, nothing to display.', 'mfc' ); ?></h1>
            <?php endif; ?>
        </main>
    </div>

</div><!-- .container -->

<?php get_footer(); ?>
