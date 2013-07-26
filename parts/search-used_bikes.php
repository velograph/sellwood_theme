<h1>Search Results in Used Bikes</h1>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

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

            <?php echo sharing_display(); ?>

          </div><!-- .five .columns .omega .product_details -->

        </article><!-- .post -->

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
