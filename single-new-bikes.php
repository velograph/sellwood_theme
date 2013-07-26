<?php
/**
 * Single Page - New Bikes
 *
 * @package -> Sellwood
 *
**/
?>
<?php get_header(); ?>

<aside class="four columns new_bikes_sidebar sidebar">

  <?php if (is_active_sidebar('new_bikes_sidebar') ) : ?>
    <?php dynamic_sidebar('new_bikes_sidebar'); ?>
  <?php endif; ?>

</aside><!-- .four .columns .new_bikes_sidebar .sidebar -->

<section class="twelve columns content">

  <div class="content_utility">

    <div class="alpha eight columns breadcrumbs">
      <?php if(function_exists('bcn_display')) { bcn_display(); } ?>
    </div><!-- .alpha .eight .columns .breadcrumbs -->

    <div class="four columns omega single_listing_nav">

      <span class="previous_post_link"><?php previous_post_link('%link','&larr; Previous'); ?></span>
      <span class="next_post_link"><?php next_post_link('%link','Next &rarr;'); ?></span>

    </div><!-- .four .columns .omega .single_listing_nav -->

  </div><!-- .content_utility -->

  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

    <!-- Removes the sharing buttons from the content and excerpt areas -->
    <?php remove_filter( 'the_excerpt', 'sharing_display', 19 ); ?>
    <?php remove_filter( 'the_content', 'sharing_display', 19 ); ?>

    <article class="post single_post">

      <footer class="post_meta">

        <h1><?php the_title(); ?></h1>
        <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate>Listed: <?php the_time( 'M j, Y' ); ?></time>

      </footer><!-- .post_meta -->

      <div class="alpha seven columns gallery_images">
        <?php the_content(); ?>			
      </div><!-- .alpha .seven .columns .gallery_images -->

      <div class="five columns omega product_details">

        <h3>Details</h3>
        <?php get_template_part( 'parts/details', 'new_bikes' ); ?> 

        <?php get_template_part( 'parts/size', 'matrix' ); ?> 
        <span class="product_detail"><?php echo sharing_display(); ?></span>
        <?php edit_post_link('Edit this new bike','<span class="product_detail">','</span>'); ?>

      </div><!-- .five .columns .omega .product_details -->

      <div class="clear"></div>

      <div class="alpha twelve columns omega">
        <?php the_excerpt(); ?>
      </div>

    </article><!-- .post .single_post -->

    <div class="clear"></div>

  <?php endwhile; ?>

</section><!-- .twelve .columns .content -->

<?php get_footer(); ?>
