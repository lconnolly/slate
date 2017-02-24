<?php get_header(); ?>

<div class="page-container">
    <main class="main" role="main">

        <!-- Blog Banner (Header) -->
        <?php get_template_part('template-parts/blog-banner'); ?>

        <div class="blog-cols">

            <!-- Primary Col (Newest Posts) -->
            <section class="col-primary">
                <h2 class="article-list-heading"><?php _e( 'Archives', 'mfc' ); ?></h2>
                <?php get_template_part('template-parts/blog/loop'); ?>
            </section>

            <!-- Secondary Col (Sidebar) -->
            <aside class="col-secondary">
                <?php get_sidebar(); ?>
            </aside>

            <!-- Pagination -->
            <?php get_template_part('template-parts/blog/home-pagination'); ?>

        </div><!-- .blog-cols -->

    </main>
</div><!-- page-container -->

<?php get_footer(); ?>
