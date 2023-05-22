<?php 

/*
* POST FUNCTION CODE
*/

add_theme_support( 'post-thumbnails' );



function slider_post_type() {
	$labels = array(
		'name'                => _x( 'slider', 'Post Type General Name', 'resturant' ),
		'singular_name'       => _x( 'slider', 'Post Type Singular Name', 'resturant' ),
		'menu_name'           => __( 'slider', 'resturant' ),
		'parent_item_colon'   => __( 'Parent slider', 'resturant' ),
		'all_items'           => __( 'All slider', 'resturant' ),
		'view_item'           => __( 'View slider', 'resturant' ),
		'add_new_item'        => __( 'Add New slider', 'resturant' ),
		'add_new'             => __( 'Add New', 'resturant' ),
		'edit_item'           => __( 'Edit slider', 'resturant' ),
		'update_item'         => __( 'Update slider', 'resturant' ),
		'search_items'        => __( 'Search slider', 'resturant' ),
		'not_found'           => __( 'Not Found', 'resturant' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'resturant' ),
	);
	$args = array(
		'label'               => __( 'slider', 'resturant' ),
		'description'         => __( 'slider news and reviews', 'resturant' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', ),
		'taxonomies'          => array( 'genres' ),	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,

		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
		'taxonomies'          => array( 'category' ),
	);
	register_post_type( 'slider', $args );
}
add_action( 'init', 'slider_post_type', 0 );
add_theme_support( 'post-thumbnails' );

function wpb_set_post_views($postID) {
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
//To keep the count accurate, lets get rid of prefetching
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

function wpb_track_post_views ($post_id) {
    if ( !is_single() ) return;
    if ( empty ( $post_id) ) {
        global $post;
        $post_id = $post->ID;    
    }
    wpb_set_post_views($post_id);
}
add_action( 'wp_head', 'wpb_track_post_views');


add_action( 'init', 'register_cpt_org' );
function register_cpt_org() {
    $labels = array( 
        'name' => _x( 'Html To Wp', 'Slider' ),
        'singular_name' => _x( 'Slider', 'Slider' ),
        'add_new' => _x( 'Add New', 'Slider' ),
        'add_new_item' => _x( 'Add New Slider', 'Slider' ),
        'edit_item' => _x( 'Edit Slider', 'Slider' ),
        'new_item' => _x( 'New Slider', 'Slider' ),
        'view_item' => _x( 'View Slider', 'Slider' ),
        'search_items' => _x( 'Search Slider', 'Slider' ),
        'not_found' => _x( 'No Slider found', 'Slider' ),
        'not_found_in_trash' => _x( 'No Slider found in Trash', 'Slider' ),
        'parent_item_colon' => _x( 'Parent Slider:', 'Slider' ),
        'menu_name' => _x( 'Slider', 'Slider' ),
    );
    $args = array( 
        'labels' => $labels,
        'hierarchical' => true,
        'supports' => array( 'title','thumbnail','editor'),
        'taxonomies' => array( 'Slider Category' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => array( 'slug' => 'Slider' ),
        'capability_type' => 'post'
    );

    register_post_type( 'Slider_post', $args );
     flush_rewrite_rules();
}

 <?php query_posts('post_type=Slider_post&posts_per_page=5&order=desc');?>
						<?php if(have_posts()): while(have_posts()): the_post();?>
							<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );?>
	    <div class="item">
	    	<div class="single_banner" style="background-image: url(<?php echo $image[0];?>);">
	    		<div class="content">
	    			<h2 class="wow bounce"><?php echo the_title(); ?></h2>
	    			<div class="wow slideInLeft"><?php echo the_content(); ?></div>
	    			<div class="banner_btn wow slideInRight">
	    				<a href="#">Our Service</a>
	    				<a href="#">Contact Us</a>
	    			</div>
	    		</div>
	    	</div>
	    </div>
	    <?php endwhile; endif; wp_reset_query();?>

  

/*
* FILE LINK CODE
*/
<?php echo esc_url( get_template_directory_uri() ); ?>
<?php bloginfo('template_url'); ?>


<?php add_theme_support( 'custom-logo' ); ?>

<?php
function themename_custom_logo_setup() {
 $defaults = array(
 'height'      => 100,
 'width'       => 400,
 'flex-height' => true,
 'flex-width'  => true,
 'header-text' => array( 'site-title', 'site-description' ),
 );
 add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );
 ?>




<!-- display call in logo -->
	<?php the_custom_logo(); ?>

<!-- DYNAMIC IMAGE LINK -->

<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>

<!-- POST CREATING CODE -->
<!-- START --> 

<!-- Repeater Start -->
	<?php if(have_rows('services_repeater')): while(have_rows('services_repeater')): the_row();?>
	<?php endwhile; endif; ?>
<!-- Repeater End -->

<?php  $posts = new WP_Query( array( 'post_type' => 'post name' , 'order' => 'ASC' ) );
while($posts->have_posts()) : $posts->the_post();?>
<!-- END -->
<?php endwhile; ?>

<!-- CONTENT AND TITLE DYNAMIC CODE -->
<?php echo get_the_title();?>
<?php echo get_the_content();?>
<?php echo the_excerpt(); ?>

<!-- SITE URL CODE -->
<?=site_url();?>


<!-- PAGE DYnamic CODE -->
<?php $my_query = new WP_Query('page_id=7'); while ($my_query->have_posts()) : $my_query->the_post();?>
<!-- END -->
<?php endwhile; ?>

<!-- ADD HEADER -->
<?php
/**
/* Template Name: Home
 *
 * Displays Only Home template
 *
 * @package WordPress
 * @subpackage buildline
 * @since buildline 1.0
 */
 get_header(); ?>

<!-- Dynamic Link -->
<?php the_permalink();?>
 <!-- ADD FOOTER -->
 <?php get_footer(); ?>
<!-- Dynamic page  -->
 <?Php while ( have_posts() ) : the_post(); ?>

<!-- CATEGORI CODE -->
<!-- START --> 
<?php $catquery = new WP_Query( 'post_type=recipes&cat=1&posts_per_page=20&order=ASC' ); while($catquery->have_posts()) : $catquery->the_post(); ?>
<!-- END -->
 <?php endwhile; ?>	


<?php wp_nav_menu( array( 'menu_class' => 'nav navbar-nav navbar-right', 'menu_id' => '', 'container'   => '' , 'theme_location' => 'menu' ) ); ?>
<!-- NAVBER DYNAMIC CODE -->

		                                <?php   wp_nav_menu( array(
		                                    'theme_location'    => 'primary',
		                                    'depth'             => 2,
		                                    'container'         => 'ul',
		                                    'container_class'   => '',
		                                    'container_id'      => 'menu_main',
		                                    'menu_class'        => 'menu_main_nav',
		                                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
		                                    'walker'            => new WP_Bootstrap_Navwalker())
		                                );
		                                ?>



<!-- Archives Code -->

<?php

function optionsframework_options() {
	// Test data

	$options[] = array(
		'name' => __('Top Hader', 'options_check'),
		'type' => 'heading');

	$options[] = array(
		'name' => __('Phone Number','options_check'),
		'desc' => __('Phone Number','options_check'),
		'id'   => 'top-number',
		'std'  => 'Phone number',
		'type' => 'text');

		return $options;
}

 ?>
<!--  Display call  -->
 <?php echo of_get_option('top-number');?>

<?php
/**
 * The template for displaying srvices archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<!-- Archives Code -->




























?>
