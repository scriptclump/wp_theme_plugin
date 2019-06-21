<?php
/* Template name: Full width page */

 get_header(); ?>
  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-12">
      	<?php if( have_posts() ){
                while( have_posts() ){
                  the_post();
        ?>
        <h1 class="my-4"><?php the_title(); ?></h1>
        
        <!-- Blog Post -->
        <div class="card mb-12">
          <div class="card-body">
            <p class="card-text"><?php the_content();?></p>
            <p><?php wp_link_pages(array(
            	'before' => '<p class="text-center">'.__('Pages:').'</p>'
            	)); ?></p>
          </div>         
        </div>
         <?php
                }
            }
         ?>
        <div><?php comments_template(); ?></div>
      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
<?php get_footer(); ?>