<form role="search" class="search-form" method="get" action="<?php echo esc_url(home_url('/')); ?>">
    <div class="search-wrapper--inner">
        <input type="search" class="form-control search-input" placeholder="<?php pll_e('Поиск'); ?>" value="<?php echo get_search_query(); ?>" name="s" title="<?php pll_e('Поиск'); ?>" autocomplete="off" />
    </div>
</form>