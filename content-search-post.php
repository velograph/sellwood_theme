        <article class="post any_search_result">

          <footer class="post_meta post_top">

            <span class="search_result_post_type"><?php $post_type = get_post_type_object( get_post_type($post) ); echo $post_type->label ; ?></span>
            <h1><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
            <div class="clear"></div>
            <?php if( get_post_type() == 'post' ) { ?>
              <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a>
            <?php } ?>

          </footer><!-- .post_meta .post_top -->

            <div class="post_content">

              <?php the_content('Continue Reading &rarr;'); ?>

            </div><!-- .post_content -->

            <div class="post_meta post_bottom">

              <p>This entry was posted in <?php echo get_the_category_list(', '); ?> on <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?></time> by <?php the_author_posts_link(); ?></p>

            </div><!-- .post_meta .post_bottom -->

          </article><!-- .post -->

        <div class="clear"></div>

