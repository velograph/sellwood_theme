<h1>Search Results in Blog Posts</h1>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <article class="post">

          <footer class="post_meta post_top">

            <h1><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
            <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a>

          </footer><!-- .post_meta .post_top -->

          <div class="post_content">

            <?php the_content('Continue Reading &rarr;'); ?>

          </div><!-- .post_content -->

          <div class="post_meta post_bottom">
            <p>This entry was posted in <?php echo get_the_category_list(', '); ?> on <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?></time> by <?php the_author_posts_link(); ?></p>
          </div><!-- .post_meta .post_bottom -->

        </article><!-- .post -->

        <div class="clear"></div>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
