<form role="search" method="get" action="<?php echo home_url('/'); ?>">
    <div class="search-wrapper--inner">
        <input type="search" class="form-control search-input" placeholder="Search" value="<?php echo get_search_query(); ?>" name="s" title="Search" />
    </div>
</form>