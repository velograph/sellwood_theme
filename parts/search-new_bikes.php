<h1>Search Results in New Bikes</h1>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

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
            <?php echo sharing_display(); ?>

          </div><!-- .five .columns .omega .product_details -->

        </article><!-- .post -->

        <div class="clear"></div>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
