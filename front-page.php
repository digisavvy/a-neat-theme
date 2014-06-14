<?php
/**
 * The Template for displaying all home page posts.
 *
 * @package digistarter
 */

get_header();

	$args = array(
		'post_status' 	       => 'publish',
		'post_type'              => 'home-boxes',
		'order'                  => 'ASC',
		'orderby'                => 'menu_order',
		'posts_per_page'         => '-1'
	);

	$home_boxes = new WP_Query($args);

?>

<div id="primary" class="content-area" role="main">

<?php if($home_boxes->have_posts()) : ?>

	 <?php while($home_boxes->have_posts()) : $home_boxes->the_post() ?>

			<section class="post-id-<?php echo get_the_ID(); ?>">

				<div class='home-boxes'><?php // echo get_the_title(); ?><?php the_content() ?></div>

			</section >

	  <?php endwhile ?>

<?php endif ?>

</div><!-- #primary -->

<?php

get_footer();