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
              <?php the_excerpt(); ?>
              <?php get_template_part( 'parts/size', 'matrix' ); ?> 
              <a href="<?php the_permalink('click_for_more_details'); ?>">Click for complete specs</a>
              <?php echo sharing_display(); ?>

            </div><!-- .five .columns .omega .product_details -->

          </article><!-- .post -->

        <div class="clear"></div>

