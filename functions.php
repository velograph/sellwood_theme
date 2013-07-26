<?php
/**
 * Sellwood 2013 functions and definitions.
 *
 * @package WordPress
 * @subpackage Sellwood_2013
 * @since Sellwood 2013 0.1.0
 */

// Size matrix table for new bikes and frames
include('size-matrix-code.php');

// Create New Bikes Categories 
function new_bikes_categories() {
  register_taxonomy (
    'new_bikes',
    'new-bikes',
    array(
      'hierarchical' => true,
      'label' => 'New Bike Categories',
      'public' => true,
      'show_ui' => true,
      'show_admin_column' => true,
      'query_var' => true,
    )
  );
}
add_action('init', 'new_bikes_categories');

// Create Used Bikes Categories 
function used_bikes_categories() {
  register_taxonomy (
    'used_bikes',
    'used-bikes',
    array(
      'hierarchical' => true,
      'label' => 'Used Bike Categories',
      'public' => true,
      'show_ui' => true,
      'show_admin_column' => true,
      'query_var' => true,
    )
  );
}
add_action('init', 'used_bikes_categories');

// Create Parts and Accessories Categories
function parts_accessories_categories() {
  register_taxonomy (
    'parts_accessories',
    'parts-accessories',
    array(
      'hierarchical' => true,
      'label' => 'P+A Categories',
      'public' => true,
      'show_ui' => true,
      'show_admin_column' => true,
      'query_var' => true,
    )
  );
}
add_action('init', 'parts_accessories_categories');

// Create New Bikes post type
add_action( 'init', 'create_post_type' );

function create_post_type() {
  register_post_type( 'new-bikes',
    array(
      'labels' => array(
        'name' => __( 'New Bikes' ),
        'singular_name' => __( 'New Bike' ),
        'menu_name' => __( 'New Bikes' ),
        'all_items' => __( 'All New Bikes' ),
        'add_new' => __( 'Add new listing' ),
        'add_new_item' => __( 'Add a new bike listing' ),
        'edit_item' => __( 'Edit this new bike listing' ),
        'new_item' => __( 'New - New Bikes' ),
        'view_item' => __( 'View Listing' ),
        'items_archive' => __( 'New Bikes Archive' ),
        'search_items' => __( 'Search New Bikes' ),
        'not_found' => __( 'Nothing in the database matches that term' ),
        'not_found_in_trash' => __( 'Nothing in the trash matches that term' )
      ),
    'public' => true,
    'publicly_queryable' => true,
    'query_var' => true,
    'has_archive' => true,
    'menu_position' => 4,
    'supports' => array(
      'title',
      'editor',
      'excerpt',
      'thumbnail',
      )
    )
  );

// Create Used Bikes post type
  register_post_type( 'used-bikes',
    array(
      'labels' => array(
        'name' => __( 'Used Bikes' ),
        'singular_name' => __( 'Used Bike' ),
        'menu_name' => __( 'Used Bikes' ),
        'all_items' => __( 'All Used Bikes' ),
        'add_new' => __( 'Add new listing' ),
        'add_new_item' => __( 'Add a used bike listing' ),
        'edit_item' => __( 'Edit this used bike listing' ),
        'new_item' => __( 'New - Used Bikes' ),
        'view_item' => __( 'View Listing' ),
        'items_archive' => __( 'Used Bikes Archive' ),
        'search_items' => __( 'Search Used Bikes' ),
        'not_found' => __( 'Nothing in the database matches that term' ),
        'not_found_in_trash' => __( 'Nothing in the trash matches that term' )
      ),
    'public' => true,
    'has_archive' => true,
    'show_in_admin_bar' => true,
    'show_ui' => true,
    'menu_position' => 5,
    'supports' => array(
      'title',
      'editor',
      'excerpt',
      'thumbnail',
      )
    )
  );

// Create Parts + Accessories post type
  register_post_type( 'parts-accessories',
    array(
      'labels' => array(
        'name' => __( 'Frames and Parts' ),
        'singular_name' => __( 'Frame or Part' ),
        'menu_name' => __( 'Frames and Parts' ),
        'all_items' => __( 'All Frames and Parts' ),
        'add_new' => __( 'Add new listing' ),
        'add_new_item' => __( 'Add a Frame and Parts listing' ),
        'edit_item' => __( 'Edit this Frame and Parts listing' ),
        'new_item' => __( 'New - Frame and Part' ),
        'view_item' => __( 'View Listing' ),
        'items_archive' => __( 'Frame and Parts Archive' ),
        'search_items' => __( 'Search Frames and Parts' ),
        'not_found' => __( 'Nothing in the database matches that term' ),
        'not_found_in_trash' => __( 'Nothing in the trash matches that term' )
      ),
    'public' => true,
    'has_archive' => true,
    'show_in_admin_bar' => true,
    'show_ui' => true,
    'menu_position' => 6,
    'supports' => array(
      'title',
      'editor',
      'excerpt',
      'thumbnail',
      )
    )
  );
}

// Register Widgets
function register_widgets() {

  // Alert Sidebar
  register_sidebar( array(
      'name'  =>  __( 'Alert Sidebar', 'twentytwelve' ),
      'id'    =>  'alert_sidebar',
      'description' =>  __( 'Alert Sidebar', 'twentytwelve' ),
    )
  );

  // Blog Sidebar
  register_sidebar( array(
      'name'  =>  __( 'Blog Sidebar', 'twentytwelve' ),
      'id'    =>  'blog_sidebar',
      'description' =>  __( 'Blog Sidebar', 'twentytwelve' ),
    )
  );

  // New Bikes Sidebar
  register_sidebar( array(
      'name'  =>  __( 'New Bikes Sidebar', 'twentytwelve' ),
      'id'    =>  'new_bikes_sidebar',
      'description' =>  __( 'New Bikes Sidebar', 'twentytwelve' ),
    )
  );

  // Used Bikes Sidebar
  register_sidebar( array(
      'name'  =>  __( 'Used Bikes Sidebar', 'twentytwelve' ),
      'id'    =>  'used_bikes_sidebar',
      'description' =>  __( 'Used Bikes Sidebar', 'twentytwelve' ),
    )
  );

  // P+A Sidebar
  register_sidebar( array(
      'name'  =>  __( 'Parts + Accessories Sidebar', 'twentytwelve' ),
      'id'    =>  'parts_accessories_sidebar',
      'description' =>  __( 'Parts + Accessories Sidebar', 'twentytwelve' ),
    )
  );

  // Search Sidebar
  register_sidebar( array(
      'name'  =>  __( 'Search Sidebar', 'twentytwelve' ),
      'id'    =>  'search_sidebar',
      'description' =>  __( 'Search Sidebar', 'twentytwelve' ),
    )
  );
}

// Enable excerpts for pages
add_post_type_support( 'page', 'excerpt' );

// Register Widgets for this theme
add_action( 'widgets_init', 'register_widgets' );

// Remove custom background and header options.
add_action( 'init', 'remove_theme_options' );

// Adds RSS feed links to <head> for posts and comments.
add_theme_support( 'automatic-feed-links' );

// Remove custom things. These get in the way sometimes and we're controlling everything anyway.
function remove_theme_options() {
  remove_custom_image_header();
  remove_custom_background();
}

// Add body classes for supreme targeting
function add_body_class( $classes )
{
      global $post;
          if ( isset( $post ) ) {
                    $classes[] = $post->post_type;
                        }
          return $classes;
}
add_filter( 'body_class', 'add_body_class' );

// Add Featured Images to each post type
add_theme_support( 
  'post-thumbnails', 
  array(
    'post',
    'page',
    'new-bikes',
    'used-bikes',
    'parts-accessories' 
  )
);

// Site last updated script
function site_last_updated($d = '') {
  $recent = new WP_Query("showposts=1&orderby=modified&post_status=publish&post_type=any");
    if ( $recent->have_posts() ) {
          while ( $recent->have_posts() ) {
                  $recent->the_post();
                        $last_update = get_the_modified_date($d);
                      }
              echo $last_update;
            }
    else
          echo 'No posts.';
  //Needed, otherwise breadcrumbs show only blog post trail
  wp_reset_postdata();
}

if ( ! function_exists( 'twentytwelve_comment' ) ) :
/**
 * Template for comments and pingbacks.
 *
 * To override this walker in a child theme without modifying the comments template
 * simply create your own twentytwelve_comment(), and that function will be used instead.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 *
 * @since Twenty Twelve 1.0
 */
function twentytwelve_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
		// Display trackbacks differently than normal comments.
	?>
	<li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
		<p><?php _e( 'Pingback:', 'twentytwelve' ); ?> <?php comment_author_link(); ?> <?php edit_comment_link( __( '(Edit)', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?></p>
	<?php
			break;
		default :
		// Proceed with normal comments.
		global $post;
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<article id="comment-<?php comment_ID(); ?>" class="comment">
			<header class="comment-meta comment-author vcard">
				<?php
					echo get_avatar( $comment, 44 );
					printf( '<cite class="fn">%1$s %2$s</cite>',
						get_comment_author_link(),
						// If current post author is also comment author, make it known visually.
						( $comment->user_id === $post->post_author ) ? '<span class="post_author"> ' . __( 'Post author', 'twentytwelve' ) . '</span>' : ''
					);
					printf( '<a class="comment_time" href="%1$s"><time datetime="%2$s">%3$s</time></a>',
						esc_url( get_comment_link( $comment->comment_ID ) ),
						get_comment_time( 'c' ),
						/* translators: 1: date, 2: time */
						sprintf( __( '%1$s at %2$s', 'twentytwelve' ), get_comment_date(), get_comment_time() )
					);
				?>
			</header><!-- .comment-meta -->

			<?php if ( '0' == $comment->comment_approved ) : ?>
				<p class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'twentytwelve' ); ?></p>
			<?php endif; ?>

			<section class="comment-content">
				<?php comment_text(); ?>
				<?php edit_comment_link( __( 'Edit', 'twentytwelve' ), '<p class="edit-link">', '</p>' ); ?>
			</section><!-- .comment-content -->

			<div class="reply">
				<?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Reply', 'twentytwelve' ), 'after' => ' <span>&darr;</span>', 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
			</div><!-- .reply -->
		</article><!-- #comment-## -->
	<?php
		break;
	endswitch; // end comment_type check
}
endif;

function twentytwelve_scripts_styles() {
	global $wp_styles;

	/*
	 * Adds JavaScript to pages with the comment form to support
	 * sites with threaded comments (when in use).
	 */
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/*
	 * Adds JavaScript for handling the navigation menu hide-and-show behavior.
	 */
	wp_enqueue_script( 'twentytwelve-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '1.0', true );
}

// Disables comments for images in the carousel powered by Jetpack
function filter_media_comment_status( $open, $post_id ) {
    $post = get_post( $post_id );
      if( $post->post_type == 'attachment' ) {
            return false;
              }
      return $open;
}
add_filter( 'comments_open', 'filter_media_comment_status', 10 , 2 );

// Replaces the WP logo on the login page with the Sellwood Logo
function my_login_logo() { ?>
    <style type="text/css">
        body.login div#login h1 a {
            background-image: url(<?php echo get_bloginfo( 'template_directory' ) ?>/images/landing_pages/sellwood_logo_300px.png);
            background-size: 187px;
            padding-bottom: 30px;
            height: 117px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function my_login_logo_url() {
      return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
      return 'Your Site Name and Info';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

/* Show the featured image and consignment numbers on post/cpt list pages
 * Added 7/16/13 - JB
 */

// Get the featured image
function admin_get_featured_image($post_ID) {
  $post_thumbnail_id = get_post_thumbnail_id($post_ID);
  if ($post_thumbnail_id) {
    $post_thumbnail_img = wp_get_attachment_image_src($post_thumbnail_id, 'featured_preview');
    return $post_thumbnail_img[0];
  }
}

// Add the new column
function sellwood_columns_head($defaults) {
  $defaults['featured_image'] = 'Cover Photo';
  $defaults['consignment_number'] = 'Consignment #';
  return $defaults;
}

// Show the featured image
function sellwood_columns_content($column_name, $post_ID) {
  if ($column_name == 'featured_image') {
    $featured_image_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
    $post_featured_image = admin_get_featured_image($post_ID);
    if ($post_featured_image) {
      echo '<a href="' . $featured_image_url . '" target="_blank"><img src="' . $post_featured_image . '" /></a>';
    }
  }
  if ($column_name == 'consignment_number') {
    // If it's a used bike, this ACF Field will show
    echo the_field('used_bikes_consignment_number');
    // If it's a part or accessory, this ACF Field will show
    echo the_field('consignment_number_general');
  }
  echo '<style>
    .column-featured_image img {
      height: 61px;
      width: 100px;
    }
    .column-consignment_number {
      font-weight: bold;
    }
  </style>';
}

add_filter('manage_used-bikes_posts_columns', 'sellwood_columns_head', 10);
add_action('manage_used-bikes_posts_custom_column', 'sellwood_columns_content', 10, 2);
add_filter('manage_parts-accessories_posts_columns', 'sellwood_columns_head', 10);
add_action('manage_parts-accessories_posts_custom_column', 'sellwood_columns_content', 10, 2);

