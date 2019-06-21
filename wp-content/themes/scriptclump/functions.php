<?php
// Theme Set Up
add_theme_support('menus');
add_theme_support('post-thumbnails');

// Actions & Filter hooks
include( get_template_directory(). '/includes/front/enqueue.php');
include( get_template_directory(). '/includes/setup.php');
include( get_template_directory(). '/includes/widgets.php');
include( get_template_directory(). '/includes/activate.php');

// Includes
add_action('wp_enqueue_scripts', 'scb_enqueue');
add_action('after_setup_theme', 'scb_setup_theme' );
add_action('widgets_init', 'scb_sidebar');
add_action('after_switch_theme', 'scb_activate');

// Shortcodes



// Custom pagination
function scb_get_bootstrap_paginate_links() {
	ob_start();
	?>
		<nav aria-label="Page navigation example">
			<?php
				global $wp_query;
				$current = max( 1, absint( get_query_var( 'paged' ) ) );
				$pagination = paginate_links( array(
					'base' => str_replace( PHP_INT_MAX, '%#%', esc_url( get_pagenum_link( PHP_INT_MAX ) ) ),
					'format' => '?paged=%#%',
					'current' => $current,
					'total' => $wp_query->max_num_pages,
					'type' => 'array',
					'prev_text' => '&laquo;',
					'next_text' => '&raquo;',
				) ); ?>
			<?php if ( ! empty( $pagination ) ) : 
				// echo '<pre>';
				// print_r($pagination);
			 ?>
				<ul class="pagination">
					<?php foreach ( $pagination as $key => $page_link ) : ?>
						<li class="page-item <?php if ( strpos( $page_link, 'current' ) !== false ) { echo ' active'; } ?>"><?php echo $page_link ?></li>
					<?php endforeach ?>
				</ul>
			<?php endif ?>
		</nav>
	<?php
	$links = ob_get_clean();
	return apply_filters( 'scb_get_bootstrap_paginate_links', $links );
}
function scb_bootstrap_pagination(){
	echo scb_get_bootstrap_paginate_links();
}