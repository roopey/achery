<?php get_header(); ?>

	
<?php 
	if (have_posts()) {
		while (have_posts()) : the_post(); ?>
		<?php if(is_front_page()) : ?>
		<?php $args = array( 'post_type' => 'home_slider', 'posts_per_page' => -1 );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); ?>

			<h2><?php the_title(); ?></h2>
			<img src="<?php the_post_thumbnail_url(); ?>"/>

		<?php endwhile; ?>
		<?php endif;?>

		<?php if(is_page('12')) :?>
			<?php $args = array( 'cat' => '3', 'posts_per_page' => -1 );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); ?>

			<h2><?php the_title(); ?></h2>

			<?php endwhile; ?>
		<?php endif;?>
		<?php if(is_page('13')) :?>
			contact
		<?php endif;?>
		<?php endwhile;
	}?>



<?php get_footer(); ?>