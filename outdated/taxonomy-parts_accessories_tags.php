<?php
/**
 * Taxonomy Template - Frames, Parts, and Accessories Tags
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

<section class="twelve columns content tag_archive">

  <div class="content_utility">

    <div class="alpha eight columns breadcrumbs">
      <?php if(function_exists('bcn_display')) { bcn_display(); } ?>
    </div><!-- .alpha .eight .columns .breadcrumbs -->

    <div class="four columns omega sort_listings">
      <?php
        $order = "&order=DESC";
        if ($_POST['select'] == 'a-z') { $order = "&order=ASC&orderby=title";  }
        if ($_POST['select'] == 'z-a') { $order = "&order=DESC&orderby=title";  }
        if ($_POST['select'] == 'newest') { $order = "&order=DESC"; }
        if ($_POST['select'] == 'oldest') { $order = "&order=ASC";  }
      ?>

      <form method="post" id="order">
        <select name="select" onchange='this.form.submit()'>
          <option value="Sort Listings">Sort Listings</option>
          <option value="a-z"<?php selected( $_POST['select'],'a-z', 1 ); ?>>A-Z</option>
          <option value="z-a"<?php selected( $_POST['select'],'z-a', 1 ); ?>>Z-A</option>
          <option value="newest"<?php selected( $_POST['select'],'newest', 1 ); ?>>Newest</option>
          <option value="oldest"<?php selected( $_POST['select'], 'oldest', 1 ); ?>>Oldest</option>
        </select>
      </form>
      <?php query_posts($query_string . $order); ?>

    </div><!-- .four .columns .omega .sort_listings -->

  </div><!-- .content_utility -->

  <?php if ( have_posts() ): ?>

    <!-- Removes the sharing buttons from the content and excerpt areas -->
    <?php remove_filter( 'the_excerpt', 'sharing_display', 19 ); ?>
    <?php remove_filter( 'the_content', 'sharing_display', 19 ); ?>

    <?php while ( have_posts() ) : the_post(); ?>

      <article class="post">

        <footer class="post_meta ">

          <h1><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
          <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate>Listed: <?php the_date(); ?></time>
          <span class="pipe_separator"> | </span>
          <div class="tag_list">Tags: <?php echo custom_taxonomies_terms_links(); ?></div>

        </footer><!-- .post_meta -->

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

          <span class="product_detail"><?php echo sharing_display(); ?></span>
          <?php edit_post_link('edit this used bike','<span class="product_detail">','</span>'); ?>

        </div><!-- .five .columns .omega .product_details -->

      </article><!-- .post -->

      <div class="clear"></div>

    <?php endwhile; ?>

      <div class="pagination">
        <?php global $wp_query;
          $big = 999999999; // need an unlikely integer

          echo paginate_links( array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => max( 1, get_query_var('paged') ),
            'total' => $wp_query->max_num_pages,
            'prev_next' => true,
            'prev_text' => '&larr; Previous',
            'next_text' => 'Next &rarr;'
          ) );
        ?>
      </div><!-- .pagination -->

    <?php else: ?>

      <h2>No posts to display</h2>	

  <?php endif; ?>

</section><!-- .content .tag_archive -->

<?php get_footer(); ?>
