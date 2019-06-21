<?php get_header(); ?>
  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">
      	<?php if( have_posts() ){
                while( have_posts() ){
                  the_post();
        ?>
        <h1 class="my-4"><?php the_title(); ?></h1>
        
        <!-- Blog Post -->
        <div class="card mb-4">
          <div class="card-body">
            <p class="card-text"><?php the_content();?></p>
            <p><?php wp_link_pages(array(
            	'before' => '<p class="text-center">'.__('Pages:').'</p>'
            	)); ?></p>
            <p><?php the_tags();?></p>
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
        <div><?php comments_template(); ?></div>
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