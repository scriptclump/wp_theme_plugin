<?php get_header(); ?>
  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">
          <div class="card">
            <div class="card-content">
              <h3><?php _e('Search:', 'scriptclump'); ?></h3>
              <?php get_search_form(); ?>
              <br/>
              <h4><?php _e('Search result for:', 'scriptclump'); ?>:
              <span class="text-info"><?php the_search_query(); ?></span>
              </h4>
            </div>
          </div>

        <h1 class="my-4">Search Result</h1>
        <?php if( have_posts() ){
                while( have_posts() ){
                  the_post();
        ?>
        <!-- Blog Post -->
        <div class="card mb-4">
          <?php 
          if( has_post_thumbnail() ){
            the_post_thumbnail( 'medium', array('class' => 'card-img-top') );
          }
          ?>
          <div class="card-body">
            <h2 class="card-title"><?php the_title(); ?></h2>
            <p class="card-text"><?php the_excerpt();?></p>
            <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on <?php the_time('d m y'); ?> by
            <a href="<?php the_author_link(); ?>"><?php the_author(); ?></a> <!-- | Category: <?php the_category();?> -->
          </div>
        </div>
         <?php
                }
            }
         ?>
        <!-- Pagination -->
        <div class="text-center"><?php scb_bootstrap_pagination(); ?></div>
      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">          
        <?php get_sidebar(); ?>
      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
<?php get_footer(); ?>