<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <article class="post any_search_result">

          <footer class="post_meta post_top">

            <span class="search_result_post_type"><?php $post_type = get_post_type_object( get_post_type($post) ); echo $post_type->label ; ?></span>
            <h1><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
<div class="clear"></div>
            <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a>

          </footer><!-- .post_meta .post_top -->

<!-- Peppering in the correct layouts for post types -->

  <!-- New Bikes -->
          <?php if( get_post_type() == 'new-bikes' ) { ?>

            <div class="alpha seven columns post_thumbnail">
              <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
            </div><!-- .alpha .seven .columns .post_thumbnail -->

            <div class="five columns omega product_details">

              <h3>Details</h3>
              <?php the_excerpt(); ?>
              <?php get_template_part( 'parts/size', 'matrix' ); ?> 
              <a href="<?php the_permalink('click_for_more_details'); ?>">Click for complete specs</a>
              <?php echo sharing_display(); ?>

            </div><!-- .five .columns .omega .product_details -->

  <!-- Used Bikes -->
          <?php } elseif( get_post_type() == 'used-bikes' ) { ?>

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

              <?php echo sharing_display(); ?>

            </div><!-- .five .columns .omega .product_details -->

  <!-- Parts & Accessories -->
          <?php } elseif( get_post_type() == 'parts-accessories' ) { ?>
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

              <?php echo sharing_display(); ?>

            </div><!-- .five .columns .omega .product_details -->


            <?php } else { ?>

  <!-- Posts -->
            <div class="post_content">

              <?php the_content('Continue Reading &rarr;'); ?>

            </div><!-- .post_content -->

            <div class="post_meta post_bottom">
              <p>This entry was posted in <?php echo get_the_category_list(', '); ?> on <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?></time> by <?php the_author_posts_link(); ?></p>
            </div><!-- .post_meta .post_bottom -->

  <?php } ?>
          </article><!-- .post -->

        <div class="clear"></div>

<?php endwhile; else: ?>
Sorry, nothing matched "<?php the_search_query(); ?>"
<?php endif; ?>
