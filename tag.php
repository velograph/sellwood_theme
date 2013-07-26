<?php
/**
 * Tag Archive - Not sure if this is used jb 2/27
 *
 * @package -> Sellwood
 *
**/
?>
<?php get_header(); ?>

<aside class="four columns tag_sidebar sidebar">

  <?php if (is_active_sidebar('new_bikes_sidebar') ) : ?>
    <?php dynamic_sidebar('new_bikes_sidebar'); ?>
  <?php endif; ?>

</aside><!-- .four .columns .tag_sidebar .sidebar -->

<section class="twelve columns content">

  <div class="content_utility">

    <div class="alpha eight columns current_page_title">
      <h3>Tag Archive: <?php echo single_tag_title( '', false ); ?></h3>
    </div><!-- .current_page_title -->

    <div class="four columns omega sort_listings">
      <?php
        $order = "&order=DESC";
        if ($_POST['select'] == 'a-z') { $order = "&order=ASC&orderby=title";  }
        if ($_POST['select'] == 'z-a') { $order = "&order=DESC&orderby=title";  }
        if ($_POST['select'] == 'newest') { $order = "&order=DESC"; }
        if ($_POST['select'] == 'oldest') { $order = "&order=ASC";  }
      ?>

      <form  method="post" id="order">
        <select name="select" onchange='this.form.submit()'>
          <option value="Sort Listings">Sort Listings</option>
          <option value="a-z"<?php selected( $_POST['select'],'a-z', 1 ); ?>>A-Z</option>
          <option value="z-a"<?php selected( $_POST['select'],'z-a', 1 ); ?>>Z-A</option>
          <option value="newest"<?php selected( $_POST['select'],'newest', 1 ); ?>>Newest</option>
          <option value="oldest"<?php selected( $_POST['select'], 'oldest', 1 ); ?>>Oldest</option>
        </select>
      </form>
      <?php query_posts($query_string . $order); ?>

    </div><!-- .sort_listings -->

  </div><!-- .content_utility -->

  <?php if ( have_posts() ): ?>

  <?php while ( have_posts() ) : the_post(); ?>

    <article class="post">

      <h1><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
      <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time> <?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?>
      <?php the_content(); ?>

    </article><!-- .post -->

  <?php endwhile; ?>

  <?php else: ?>

    <h2>No posts to display in <?php echo single_tag_title( '', false ); ?></h2>

  <?php endif; ?>

</section><!-- .twelve .columns .content -->

<?php get_footer(); ?>
