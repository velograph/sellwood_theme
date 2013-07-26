<?php
/**
 * General Archive
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

<section class="twelve columns content archive">

  <div class="content_utility">

    <div class="alpha sixteen columns current_page_title">
      <h3>Blog Archive</h3>
    </div><!-- .alpha .sixteen .columns .current_page_title -->

  </div><!-- .content_utility -->

  <?php get_template_part( 'parts/pagination' ); ?> 

  <?php if ( have_posts() ): ?>

    <?php while ( have_posts() ) : the_post(); ?>

      <article class="post">

        <footer class="post_meta ">

          <h1><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
          <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate>Added on <?php the_date(); ?></time>

        </footer><!-- .post_meta -->

        <?php the_content('Continue Reading &rarr;'); ?>

      </article><!-- .post -->

      <div class="clear"></div>

    <?php endwhile; ?>

    <?php get_template_part( 'parts/pagination' ); ?> 

    <?php else: ?>
      <h2>No posts to display</h2>	

  <?php endif; ?>

</section><!-- .twelve .columns .content .archive -->

<?php get_footer(); ?>
