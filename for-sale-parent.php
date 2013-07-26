<?php
/**
 * Template Name: For Sale Parent Page
 *
 * @package -> Sellwood
 *
**/
?>
<?php get_header(); ?>

  <!-- Removes the sharing buttons from the portals -->
  <?php remove_filter( 'the_excerpt', 'sharing_display', 19 ); ?>
  <?php remove_filter( 'the_content', 'sharing_display', 19 ); ?>

  <div class="sixteen columns recent_listings_header">

    <h2>Portland's best selection of new and used bikes, parts and accessories. Check out our inventory!</h2>

  </div><!-- .sixteen .columns .recent_listings_header -->
  <div class="clear"></div>

<section class="for_sale_portals"> 

  <div class="one-third column new_bikes_portal">

    <div class="for_sale_portal">
      <h1><a href="/new-bikes" title="Click to view all New Bikes">View all New Bikes</a></h1>

      <em>or</em>

      <h3>our 5 favorite new bikes &darr;</h3>
    </div>

    <?php query_posts( array( 'post_type' => 'new-bikes', 'posts_per_page' => 5 ) );

    if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <article class="post_portal">

      <a href="<?php esc_url( the_permalink() ); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?></a>
      <a href="<?php esc_url( the_permalink() ); ?>"><?php the_title(); ?></a>

    </article><!-- .post_portal -->
    <div class="clear"></div>

    <?php endwhile; endif; wp_reset_query(); ?>

  </div><!-- .one-third .column .new_bikes_portal -->

  <div class="one-third column used_bikes_portal">

    <div class="for_sale_portal">
      <h1><a href="/used-bikes" title="Click to view all Used Bikes">View all Used Bikes</a></h1>

      <em>or</em>

      <h3>The 5 most recent listings &darr;</h3>
    </div>

    <?php query_posts( array( 'post_type' => 'used-bikes', 'posts_per_page' => 5 ) );

    if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <article class="post_portal">

      <a href="<?php esc_url( the_permalink() ); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?></a>
      <a href="<?php esc_url( the_permalink() ); ?>"><?php the_title(); ?></a>

    </article><!-- .post_portal -->
    <div class="clear"></div>

    <?php endwhile; endif; wp_reset_query(); ?>

  </div><!-- .one-third .column .used_bikes_portal -->

  <div class="one-third column parts_accessories_portal">

    <div class="for_sale_portal">
      <h1><a href="/parts-accessories" title="Click to view all Frames and Parts">View all Frames + Parts</a></h1>

      <em>or</em>

      <h3>The 5 most recent listings &darr;</h3>
    </div>

  <?php query_posts( array( 'post_type' => 'parts-accessories', 'posts_per_page' => 5 ) );

  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <article class="post_portal">

      <a href="<?php esc_url( the_permalink() ); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?></a>
      <a href="<?php esc_url( the_permalink() ); ?>"><?php the_title(); ?></a>

    </article><!-- .post_portal -->
    <div class="clear"></div>

    <?php endwhile; endif; wp_reset_query(); ?>

  </div><!-- .one-third .column .parts_accessories_portal -->

</section><!-- .for_sale_portals -->

<div class="clear"></div>

<?php get_footer(); ?>
