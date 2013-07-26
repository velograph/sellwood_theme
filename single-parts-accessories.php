<?php
/**
 * Single Page - Frames, Parts, and Accessories
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

</aside><!-- .four .columns .parts_accessories_sidebar .sidebar -->

<section class="twelve columns content listing_archive">

  <div class="content_utility">

    <div class="alpha eight columns current_page_title">
      Parts + Accessories Listings
    </div><!-- .alpha .eight .columns .current_page_title -->

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

      <footer class="post_meta ">

        <h1><?php the_title(); ?></h1>
        <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate>Listed: <?php the_time( 'M j, Y' ); ?></time>

      </footer><!-- .post_meta -->

      <div class="alpha seven columns gallery_images">
        <?php the_content(); ?>			
      </div><!-- .alpha .seven .columns .gallery_images -->

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
          } ?>

          <?php $values = get_field('weight_general');
            if($values) {
              echo '<span class="product_detail"><strong>Weight: </strong>', the_field('weight_general'),'</span>';
          } ?>

          <?php $values = get_field('condition_general');
            if($values) {
              echo '<span class="product_detail"><strong>Condition: </strong>', the_field('condition_general'),'</span>';
          } ?>

          <?php if ( has_term(
              array (
                'frames',
              ),
              'parts_accessories')) {

              get_template_part( 'parts/size', 'matrix' );
          } ?>

          <span class="product_detail"><?php echo sharing_display(); ?></span>
          <?php edit_post_link('Edit this part/accessory','<span class="product_detail">','</span>'); ?>

        </div><!-- .five .columns .omega .product_details -->

        <div class="clear"></div>

        <div class="alpha twelve columns omega">
          <?php the_excerpt(); ?>
        </div><!-- .alpha .twelve .columns .omega -->

    </article><!-- .post .single_post -->

    <div class="clear"></div>

  <?php endwhile; ?>

</section><!-- .content -->

<?php get_footer(); ?>
