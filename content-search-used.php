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

          </article><!-- .post -->

        <div class="clear"></div>

