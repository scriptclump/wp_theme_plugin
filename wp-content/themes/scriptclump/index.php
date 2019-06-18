<?php get_header(); ?>
  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <h1 class="my-4">Page Heading
          <small>Secondary Text</small>
        </h1>
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
          <!-- <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap"> -->
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
        <!-- Blog Post -->
<!--         <div class="card mb-4">
          <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">Post Title</h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
            <a href="#" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on January 1, 2017 by
            <a href="#">Start Bootstrap</a>
          </div>
        </div>
 -->
        <!-- Blog Post -->
        <!-- <div class="card mb-4">
          <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">Post Title</h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
            <a href="#" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on January 1, 2017 by
            <a href="#">Start Bootstrap</a>
          </div>
        </div> -->

        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
          </li>
        </ul>

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