<form role="search" method="get" class="search-form text-center" action="--><?php echo esc_url( home_url( '/' ) ); ?><!--">
    <h3>Search</h3>

    <label>

       <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'exam' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="<?php _ex( 'Search for:', 'label', 'gh_exam' ); ?>">
   </label>

</form>