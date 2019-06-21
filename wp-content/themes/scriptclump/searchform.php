<div class="input-group">
      <form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url('/'); ?>">
        <div class="input-group">
            <input type="text" name="s" id="s" class="form-control" placeholder="Search for..." value="<?php the_search_query(); ?>">
            <span class="input-group-btn">
              <button class="btn btn-secondary" id="searchsubmit" type="submit">Go!</button>
            </span>
          </div>
      </form>
</div>
  