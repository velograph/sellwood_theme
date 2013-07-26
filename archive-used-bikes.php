<?php
/**
 * Archive for Used Bikes
 *
 * @package -> Sellwood
 *
**/
?>
<?php get_header(); ?>

<aside class="four columns used_bikes_sidebar sidebar">

  <?php if (is_active_sidebar('used_bikes_sidebar') ) : ?>
    <?php dynamic_sidebar('used_bikes_sidebar'); ?>
  <?php endif; ?>

</aside><!-- .four .columns .used_bikes_sidebar .sidebar -->

<section class="twelve columns content listing_archive">

  <div class="content_utility">

    <div class="alpha eight columns current_page_title">
      <h3>Used Bike Listings</h3>
    </div><!-- .alpha .eight .columns .current_page_title -->

    <div class="four columns omega sort_listings">
      <?php // get_template_part( 'parts/sort', 'results' ); ?> 
    </div><!-- .four .columns .omega .sort_listings -->

  </div><!-- .content_utility -->

  <!-- Removes the sharing buttons from the content and excerpt areas -->
  <?php remove_filter( 'the_excerpt', 'sharing_display', 19 ); ?>
  <?php remove_filter( 'the_content', 'sharing_display', 19 ); ?>

  <?php get_template_part( 'parts/pagination' ); ?> 

  <?php if ( have_posts() ): ?>

    <?php
      $args = array(
        'paged' => get_query_var( 'paged' ),
        'post_type' => 'used-bikes',
        'tax_query' => array(
          array(
            'taxonomy' => 'used_bikes',
            'field' => 'slug',
            'terms' => 'sold-bikes',
            'operator' => 'NOT IN'
          )
        )
      );
      $wp_query = new WP_Query( $args );
    ?>

    <?php while ( $wp_query->have_posts() ) : the_post(); ?>

      <article class="post">

        <footer class="post_meta ">

          <h1><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
          <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate>Listed: <?php the_time( 'M j, Y' ); ?></time>

        </footer><!-- .col .span_24 .post_meta -->

        <div class="alpha seven columns post_thumbnail">
          <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
        </div><!-- .alpha .seven .columns .post_thumbnail -->

        <div class="five columns omega product_details">

          <h3>Details</h3>
          <?php $values = get_field('used_bikes_consignment_number');
            if($values) {
              echo '<span class="product_detail"><strong>Consignment #: </strong>', the_field('used_bikes_consignment_number'), '</span>';
          } ?>

          <?php get_template_part( 'parts/details', 'used_bikes' ); ?> 

          <?php $values = get_field('used_bikes_condition');
            if($values) {
              echo '<span class="product_detail"><strong>Condition: </strong>', the_field('used_bikes_condition'),'</span>';
          } ?>

          <a href="<?php the_permalink(); ?>">Click for more pictures</a>
          <span class="product_detail"><?php echo sharing_display(); ?></span>
          <?php edit_post_link('edit this used bike','<span class="product_detail">','</span>'); ?>

        </div><!-- .five .columns .omega .product_details -->

      </article><!-- .post -->

      <div class="clear"></div>

    <?php endwhile; ?>

    <?php get_template_part( 'parts/pagination' ); ?> 

    <?php wp_reset_postdata(); ?>

    <?php else: ?>

      <h2>No posts to display</h2>	

  <?php endif; ?>

</section><!-- .twelve .columns .content .listing_archive -->

<?php get_footer(); ?>
