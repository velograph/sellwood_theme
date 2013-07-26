<?php
/**
 * Archive for New Bikes
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

<section class="twelve columns content listing_archive">

  <div class="content_utility">

    <div class="alpha eight columns current_page_title">
      <h3>New Bike Listings</h3>
    </div><!-- .current_page_title -->

    <div class="four columns omega sort_listings">
      <?php // get_template_part( 'parts/sort', 'results' ); ?> 
    </div><!-- .sort_listings -->

  </div><!-- .content_utility -->

  <!-- Removes the sharing buttons from the content and excerpt areas -->
  <?php remove_filter( 'the_excerpt', 'sharing_display', 19 ); ?>
  <?php remove_filter( 'the_content', 'sharing_display', 19 ); ?>

  <?php get_template_part( 'parts/pagination' ); ?> 

  <?php if ( have_posts() ): ?>

    <?php while ( have_posts() ) : the_post(); ?>

      <article class="post">

        <footer class="post_meta ">

          <h1><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
          <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate>Listed: <?php the_time( 'M j, Y' ); ?></time>

        </footer><!-- ..post_meta -->

        <div class="alpha seven columns post_thumbnail">
          <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
        </div><!-- .alpha .seven .columns .post_thumbnail -->

        <div class="five columns omega product_details">

          <h3>Details</h3>
          <?php the_excerpt(); ?>
          <?php get_template_part( 'parts/size', 'matrix' ); ?> 
          <a href="<?php the_permalink('click_for_more_details'); ?>">Click for complete specs</a>
          <span class="product_detail"><?php echo sharing_display(); ?></span>
          <?php edit_post_link('Edit this new bike','<span class="product_detail">','</span>'); ?>

        </div><!-- .five .columns .omega .product_details -->

      </article><!-- .post -->

      <div class="clear"></div>

    <?php endwhile; ?>

    <?php get_template_part( 'parts/pagination' ); ?> 

    <?php else: ?>

      <h2>No posts to display</h2>	

  <?php endif; ?>

</section><!-- .twelve .columns .content .listing_archive -->

<?php get_footer(); ?>
