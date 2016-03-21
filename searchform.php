<form class="navbar-form navbar-right " method="get" role="search"  id="searchform" action="<?php echo home_url( '/' ) ?>" >
        <div class="form-group">
                <input type="text" class="form-control" placeholder="Search" value="<?php echo get_search_query() ?>" name="s" id="s" />
                <i class="fa fa-search"></i>
        </div>
</form>