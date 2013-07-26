<?php
/**
 * Archive for Authors
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

<section class="twelve columns content author_archive">

  <div class="content_utility">

    <div class="alpha sixteen columns current_page_title">
      <h3><?php echo get_the_author() ; ?></h3>
    </div><!-- .alpha .sixteen .columns .current_page_title -->

  </div><!-- .content_utility -->

  <?php if ( have_posts() ): the_post(); ?>

    <?php rewind_posts(); while ( have_posts() ) : the_post(); ?>
      <article class="post">

        <footer class="post_meta post_top">

          <h1><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
          <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a>

        </footer><!-- .post_meta .post_top -->

        <section class="post_content">

          <?php the_content('Continue Reading &rarr;'); ?>

        </section><!-- .post_content -->

        <div class="post_meta post_bottom">
          <p>This entry was posted in <?php echo get_the_category_list(', '); ?> on <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?></time> by <?php the_author_posts_link(); ?></p>
        </div><!-- .post_meta .post_bottom -->

      </article><!-- .post -->
    <?php endwhile; ?>

    <?php else: ?>

    <h2>No posts to display for <?php echo get_the_author() ; ?></h2>	

  <?php endif; ?>

</section><!-- .twelve .columns .content .author_archive -->

<?php get_footer(); ?>
