<form id="searchform" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="row">  
        <div class="col-md-8 col-sm-12 mb-2">  
            <input type="text" class="form-control" name="s" placeholder="Enter keyword..." value="<?php echo get_search_query(); ?>">
            <!--<input type="hidden" name="post_type[]" value="post" />-->
            <input type="hidden" name="post_type[]" value="coupon" />
        </div>
        <div class="col-md-4 col-sm-12 d-grid mb-2">
            <input class="btn btn-dark" type="submit" value="Search" />
        </div>
    </div>
</form>