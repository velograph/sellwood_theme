<?php
/**
 * Category Template
 *
 * @package -> Sellwood
 *
**/
?>
<?php get_header(); ?>

<aside class="four columns blog_sidebar sidebar">
  <?php if (is_active_sidebar('blog_sidebar') ) : ?>
    <?php dynamic_sidebar('blog_sidebar'); ?>
  <?php endif; ?>

</aside><!-- .four .columns .blog_sidebar .sidebar -->

<section class="twelve columns content">

  <div class="content_utility">

    <div class="alpha sixteen columns current_page_title">
      <h3>Category Archive of: <?php echo single_cat_title( '', false ); ?></h3>
    </div><!-- .alpha .sixteen .columns .current_page_title -->

  </div><!-- .content_utility -->

  <?php if ( have_posts() ): ?>

  <?php while ( have_posts() ) : the_post(); ?>

    <article class="post">

      <h1><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
      <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time> <?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?>
      <?php the_content('Continue Reading &rarr;'); ?>

    </article><!-- .post -->

  <?php endwhile; ?>

  <?php else: ?>

    <h2>No posts to display in <?php echo single_cat_title( '', false ); ?></h2>

  <?php endif; ?>

</section><!-- .twelve .columns .content -->

<?php get_footer(); ?>
