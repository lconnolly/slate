<div class="search-form">
    <form method="get" action="<?php echo home_url(); ?>">
        <label for="search">Search</label>
        <div class="controls">
        	<input name="s" class="search-input" id="search" type="search" placeholder="<?php _e( 'Search...', 'mfc' ); ?>">
        	<button class="search-submit" type="submit" role="button"><?php _e( 'Search', 'mfc' ); ?></button>
        </div>
    </form>
</div><!-- .search -->
