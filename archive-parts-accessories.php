<?php
/**
 * Archive for Frames, Parts, and Accessories 
 *
 * @package -> Sellwood
 *
**/
?>
<?php get_header(); ?>

<aside class="four columns parts_accessories_sidebar sidebar">

  <?php if (is_active_sidebar('parts_accessories_sidebar') ) : ?>
    <?php dynamic_sidebar('parts_accessories_sidebar'); ?>
  <?php endif; ?>

</aside><!-- .four .columns .new_bikes_sidebar .sidebar -->

<section class="twelve columns content listing_archive">

  <div class="content_utility">

    <div class="alpha eight columns current_page_title">
      <h3>Frames and Parts Listings</h3>
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
      // This will keep sold frames from showing up on the listings page.
      $args = array(
        'paged' => get_query_var( 'paged' ),
        'post_type' => 'parts-accessories',
        'tax_query' => array(
          array(
            'taxonomy' => 'parts_accessories',
            'field' => 'slug',
            'terms' => 'sold-frames',
            'operator' => 'NOT IN'
          )
        )
      );
      $wp_query = new WP_Query( $args );
    ?>

    <?php while ( $wp_query->have_posts() ) : the_post(); ?>

      <article class="post">

        <footer class="col span_24 post_meta ">

          <h1><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
          <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate>Listed: <?php the_time( 'M j, Y' ); ?></time>

        </footer><!-- .post_meta -->

        <div class="alpha seven columns post_thumbnail">
          <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
        </div><!-- .alpha .seven .columns .post_thumbnail -->

        <div class="five columns omega product_details">

          <h3>Details</h3>
          <?php $values = get_field('consignment_number_general');
            if($values) {
              echo '<span class="product_detail"><strong>Consignment #: </strong>', the_field('consignment_number_general'), '</span>';
          } ?>

          <?php 
            if ( has_term(
              array (
                'brake-levers',
                'brakes',
              ),
              'parts_accessories')) {

              get_template_part('parts/details','brakes');

            } elseif ( has_term('forks', 'parts_accessories')) {

              get_template_part('parts/details','forks');

            } elseif ( has_term(
              array (
                'hubs',
                'tires',
                'wheels',
              ),
              'parts_accessories')) {

              get_template_part('parts/details','wheels');

            } elseif ( has_term(
              array (
                'bottom-brackets',
                'cassettes-freewheels-cogs',
                'cranksets',
                'front-derailleurs',
                'rear-derailleurs',
              ),
              'parts_accessories')) {

              get_template_part('parts/details','drivetrain');

              } elseif ( has_term(
                array (
                  'handlebars',
                  'headsets',
                  'shifters',
                  'stems',
                ),
                'parts_accessories')) {

              get_template_part('parts/details','cockpit');

              } elseif ( has_term(
                array (
                  'saddles',
                  'seatposts',
                ),
                'parts_accessories')) {

              get_template_part('parts/details','seatpost');

              } elseif ( has_term(
                array (
                  'pedals',
                  'shoes',
                ),
                'parts_accessories')) {

              get_template_part('parts/details','pedal');

              } elseif ( has_term(
                array (
                  'bags',
                  'fenders',
                  'lights',
                  'racks',
                  'trailers',
                ),
                'parts_accessories')) {

              get_template_part('parts/details','accessory');

              } elseif ( has_term(
                array (
                  'apparel',
                ),
                'parts_accessories')) {

              get_template_part('parts/details','apparel');

              } elseif ( has_term(
                array (
                  'misc',
                ),
                'parts_accessories')) {

              get_template_part('parts/details','misc');

              } elseif ( has_term(
                array (
                  'frames',
                ),
                'parts_accessories')) {

              get_template_part('parts/details','frames');

            }

          ?>

          <?php $values = get_field('color_general');
            if($values) {
              echo '<span class="product_detail"><strong>Color: </strong>', the_field('color_general'),'</span>';
            } else {
              // Do Nothing!
          } ?>

          <?php $values = get_field('weight_general');
            if($values) {
              echo '<span class="product_detail"><strong>Weight: </strong>', the_field('weight_general'),'</span>';
            } else {
              // Do Nothing!
          } ?>

          <?php $values = get_field('condition_general');
            if($values) {
              echo '<span class="product_detail"><strong>Condition: </strong>', the_field('condition_general'),'</span>';
            } else {
              // Do Nothing!
          } ?>

          <?php if ( has_term(
              array (
                'frames',
              ),
              'parts_accessories')) {

              get_template_part( 'parts/size', 'matrix' );
          } ?>

          <span class="product_detail"><?php echo sharing_display(); ?></span>
          <?php edit_post_link('Edit this listing','<span class="product_detail">','</span>'); ?>

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
