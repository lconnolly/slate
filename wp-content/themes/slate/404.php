<?php get_header(); ?>

<div class="page-container">

	<main role="main">
        <div class="col-narrow">
    		<h1><?php _e( 'Page not found', 'mfc' ); ?></h1>
    		<p>We&rsquo;re sorry, but we couldn&rsquo;t find the page you were looking for. Please try the link again, or visit <a href="<?php echo home_url(); ?>"><?php _e( 'the homepage', 'mfc' ); ?></a>
        </div><!-- col-narrow -->
    </main>


</div><!-- page-container -->

<?php get_footer(); ?>
