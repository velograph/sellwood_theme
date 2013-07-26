<?php
/**
 * Blog Archive - contains a list of blog posts
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

<section class="twelve columns content blog_archive">

  <div class="content_utility">

    <div class="alpha sixteen column omega current_page_title">
      <h3>Blog</h3>
    </div><!-- .alpha .sixteen .columns .current_page_title -->

  </div><!-- .content_utility -->

  <?php if ( have_posts() ): ?>

    <!-- Removes the sharing buttons from the content and excerpt areas -->
    <?php remove_filter( 'the_excerpt', 'sharing_display', 19 ); ?>
    <?php remove_filter( 'the_content', 'sharing_display', 19 ); ?>

    <?php while ( have_posts() ) : the_post(); ?>
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

    <?php endwhile; ?>

    <div class="clear"></div>

    <?php get_template_part( 'parts/pagination' ); ?> 

    <div class="clear"></div>

    <?php else: ?>

      <h2>No posts to display</h2>

  <?php endif; ?>

</section><!-- .twelve .columns .content .listing_archive -->

<?php get_footer(); ?>
