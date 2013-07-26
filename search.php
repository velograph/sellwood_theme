<?php
/**
 * Search Results Page
 *
 * @package -> Sellwood
 *
**/
?>
<?php get_header(); ?>

<aside class="four columns search_results_sidebar sidebar">

  <?php dynamic_sidebar('search_sidebar'); ?>

</aside><!-- .four .columns .search_results_sidebar .sidebar -->

<section class="twelve columns content search_results">

  <div class="content_utility">

    <div class="current_page_title">
      <h3>Search Results for <strong><?php echo get_search_query(); ?></strong> <em>(by date added)</em></h3>
    </div><!-- .current_page_title -->

  </div><!-- .content_utility -->

  <?php if ( have_posts() ): ?>

    <?php while ( have_posts() ) : the_post(); ?>

<!-- Peppering in the correct layouts for post types -->

  <!-- New Bikes -->
          <?php if( get_post_type() == 'new-bikes' ) { ?>

            <?php get_template_part( 'content', 'search-new' ); ?> 

  <!-- Used Bikes -->
          <?php } elseif( get_post_type() == 'used-bikes' ) { ?>

            <?php get_template_part( 'content', 'search-used' ); ?> 

  <!-- Parts & Accessories -->
          <?php } elseif( get_post_type() == 'parts-accessories' ) { ?>

            <?php get_template_part( 'content', 'search-parts' ); ?> 

  <!-- Posts -->
          <?php } elseif( get_post_type() == 'post' ) { ?>

            <?php get_template_part( 'content', 'search-post' ); ?> 

  <?php } ?>

    <?php endwhile; ?>

    <?php get_template_part( 'parts/pagination' ); ?> 

    <?php wp_reset_postdata(); ?>

    <?php else: ?>

      Sorry, nothing matched "<?php the_search_query(); ?>" in <?php $query_types = get_query_var('post_type'); ?>

<?php endif; ?>

</section><!-- .twelve .columns .content .search_results -->

<?php get_footer(); ?>
