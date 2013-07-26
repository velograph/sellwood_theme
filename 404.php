<?php
/**
 * 404 Page
 *
 * @package -> Sellwood
 *
**/
?>
<?php get_header(); ?>

    <section class="page_404">

      <header>

        <div class="eight columns omega">
          
          <div class="headings_404">

            <h1><?php _e( 'It looks like our wizard couldn\'t find what you were looking for.', 'blank' ); ?></h1>
            <h2><?php _e( 'Maybe try one of the links below or search?', 'blank' ); ?></h2>

          </div><!-- .headings_404 -->

        </div><!-- .eight .columns -->

        <div class="eight columns advanced_search">

          <?php get_template_part( 'advanced_search' ); ?>

        </div><!-- .eight .columns -->

        <div class="clear"></div>

        <div class="sixteen columns omega lower_separator">
          &nbsp;
        </div><!-- .lower_separator -->

      </header>

      <div class="clear"></div>

      <div class="one-third column portal_404">

        <h2>New Bikes</h2>

        <ul>

          <?php query_posts( array( 'post_type' => 'new-bikes', 'posts_per_page' => 5 ) );

          if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <li>
              <a href="<?php esc_url( the_permalink() ); ?>"><?php the_title(); ?></a>
            </li>

          <?php endwhile; endif; wp_reset_query(); ?>

        </ul>

      </div><!-- .one-third .column portal_404 -->

      <div class="one-third column portal_404">

        <h2>Used Bikes</h2>

        <ul>

          <?php query_posts( array( 'post_type' => 'used-bikes', 'posts_per_page' => 5 ) );

          if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <li>
              <a href="<?php esc_url( the_permalink() ); ?>"><?php the_title(); ?></a>
            </li>

          <?php endwhile; endif; wp_reset_query(); ?>

        </ul>

      </div><!-- .one-third .column portal_404 -->

      <div class="one-third column portal_404">

        <h2>Frames + Parts</h2>

        <ul>

          <?php query_posts( array( 'post_type' => 'parts-accessories', 'posts_per_page' => 5 ) );

          if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <li>
              <a href="<?php esc_url( the_permalink() ); ?>"><?php the_title(); ?></a>
            </li>

          <?php endwhile; endif; wp_reset_query(); ?>

        </ul>

      </div><!-- .one-third .column portal_404 -->


    </section><!-- .404_page -->

<?php get_footer(); ?>
