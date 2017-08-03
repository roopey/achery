<?php 

	function my_resources(){
		wp_enqueue_style('style', get_stylesheet_uri());
	}
	add_action('wp_enqueue_scripts', 'my_resources');

	// Featured image
	add_theme_support( 'post-thumbnails' );


	// Navigation Menus

	register_nav_menus(array(
		'primary' => __( 'Primary Menu' ),
		'footer' => __( 'Footer Menu' ),
	));

	 // Custom post types
		 add_action( 'init', 'create_post_type' );
		 //Testimonial
			function create_post_type() {
			  register_post_type( 'home_slider',
			    array(
			      'labels' => array(
			        'name' => __( 'Home Slider' ),
			        'singular_name' => __( 'Home Slider' )
			      ),
			      'public' => true,
			      'has_archive' => true,
			      'supports' => array( 'title', 'thumbnail' )
			    )
			  );

	// 		  //Brands
	// 		  register_post_type( 'itel_brands',
	// 		    array(
	// 		      'labels' => array(
	// 		        'name' => __( 'Brands' ),
	// 		        'singular_name' => __( 'Brand' )
	// 		      ),
	// 		      'public' => true,
	// 		      'has_archive' => true,
	// 		      'supports' => array( 'title', 'thumbnail' )
	// 		    )
	// 		  );

			  
	// 		//Products
	// 		  register_post_type( 'macple_product',
	// 		    array(
	// 		      'labels' => array(
	// 		        'name' => __( 'Products' ),
	// 		        'singular_name' => __( 'Products' )
	// 		      ),
	// 		      'public' => true,
	// 		      'has_archive' => true,
	// 		      'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail' ),
	// 		      'taxonomies' => array('category')
	// 		    )
	// 		  );

	// 		//Services
	// 		  register_post_type( 'macple_service',
	// 		    array(
	// 		      'labels' => array(
	// 		        'name' => __( 'Services' ),
	// 		        'singular_name' => __( 'Services' )
	// 		      ),
	// 		      'public' => true,
	// 		      'has_archive' => false,
	// 		      'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail' ),
	// 		      'taxonomies' => array('category')
	// 		    )
	// 		  );

			}

?>