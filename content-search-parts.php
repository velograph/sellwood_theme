        <article class="post any_search_result">

          <footer class="post_meta post_top">

            <span class="search_result_post_type"><?php $post_type = get_post_type_object( get_post_type($post) ); echo $post_type->label ; ?></span>
            <h1><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
            <div class="clear"></div>
            <?php if( get_post_type() == 'post' ) { ?>
              <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a>
            <?php } ?>

          </footer><!-- .post_meta .post_top -->

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

          </article><!-- .post -->

        <div class="clear"></div>

