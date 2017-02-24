<?php get_header(); ?>

    <div class="page-container">
        <?php if( have_posts() ): while( have_posts() ) : the_post(); ?>

            <main class="attachment-main main" role="main">

                <div class="col-narrow">

                    <?php
                        $description = $post->post_content;
                        $caption = $post->post_excerpt;
                    ?>

                    <?php echo $description; ?>

                    <?php echo $caption; ?>

                </div><!-- blog-main-col -->

            </main>

            <?php endwhile; ?>

        <?php else: ?>
            <h1><?php _e( 'Sorry, nothing to display.', 'mfc' ); ?></h1>
        <?php endif; ?>

    </div><!-- page-container -->

<?php get_footer(); ?>
