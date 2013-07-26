<?php
/**
 * Single Page - Blog Posts
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

<section class="twelve columns content single_blog">

  <div class="content_utility">

    <div class="alpha eight columns current_page_title">
      <h3>Blog</h3>
    </div><!-- .alpha .eight .columns .current_page_title -->

  </div><!-- .content_utility -->

  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

    <article class="post">

      <footer class="post_meta post_top">

        <h1><?php the_title(); ?></h1>
        <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a>

      </footer><!-- .post_meta .post_top -->

      <?php the_content(); ?>

      <div class="post_meta post_bottom">
        <p>This entry was posted in <?php echo get_the_category_list(', '); ?> on <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?></time> by <?php the_author_posts_link(); ?></p>
      </div><!-- .post_meta .post_bottom -->

    </article><!-- .post -->

    <div class="clear"></div>

  <?php endwhile; ?>

  <?php comments_template( '', true ); ?>

</section><!-- .twelve .columns .content .single_blog -->


<?php get_footer(); ?>
