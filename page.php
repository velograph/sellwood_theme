<?php
/**
 * Static Page Template
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

<section class="twelve columns content static_page">

  <div class="content_utility">

    <div class="alpha twelve omega columns current_page_title">
      <h1><?php the_title(); ?></h1>
    </div><!-- .alpha .twelve .omega .columns .current_page_title -->

  </div><!-- .content_utility -->

  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

    <article class="post">

      <div class="post_content">
        <?php the_content(); ?>
      </div><!-- .post_content -->

    </article><!-- .post -->

  <?php endwhile; ?>

</section><!-- .twelve .columns .content .static_page -->

<?php get_footer(); ?>
