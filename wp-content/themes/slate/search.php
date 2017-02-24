<?php get_header(); ?>

<div class="page-container">
    <main class="main" role="main">

        <!-- Blog Banner (Header) -->
        <?php get_template_part('template-parts/blog/home-banner'); ?>

        <div class="blog-cols">

            <!-- Primary Col (Newest Posts) -->
            <section class="col-primary">
                <div class="post-list-heading">
                    <h2>
                        <?php echo sprintf( __( '%s Results Found for ', 'mfc' ), $wp_query->found_posts ); ?>
                        <em>&ldquo;<?php echo get_search_query(); ?>&rdquo;</em>
                    </h2>
                    <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ) ?>">Clear Search</a>
                </div>
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
