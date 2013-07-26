<?php
/*
 * Template Name: Custom Landing Page
 * */
?>

<html class="no-js" lang="en"><!--<![endif]-->
<head>
<title><?php bloginfo( 'name' ); ?><?php wp_title( '|', 'left' ); ?></title>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- Remove if you're not building a responsive site. (But then why would you do such a thing?) -->
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico"/>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>

<?php wp_head(); ?>
</head>

<body <?php body_class('landing_page'); ?>>
  
  <div class="container main">

    <div class="seven columns">

      <div class="logo_side">

        <div class="sellwood_logo">
          <img src="/wordpress/wp-content/themes/sellwood/images/landing_pages/sellwood_logo_300px.png" alt="Sellwood Cycle Repair" title="Sellwood Cycle Repair" />
        </div><!-- .sellwood_logo -->

<!-- Lewis and Clark College has an & in their logo. I removed it via the page id for just that page... -->
        <?php if (is_page(16762)) { ?>
          <div class="invisible_ambersand">
            &nbsp;
          </div><!-- .ambersand -->
        <?php } else { ?>
          <div class="ambersand">
            <img src="/wordpress/wp-content/themes/sellwood/images/landing_pages/ambersand_square.png" alt="Ambersand" title="Ambersand" />
          </div><!-- .ambersand -->
        <?php } ?>

        <div class="client_logo">
          <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
        </div><!-- .ambersand -->

      </div><!-- .logo_side -->

    </div><!-- .seven .columns -->

    <div class="nine columns">

      <div class="client_content">
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

          <h1><?php the_title(); ?></h1>
          <?php the_content(); ?>

        <?php endwhile; ?>
      </div><!-- .client_content -->

    </div><!-- .nine .columns -->

    <div class="clear"></div>

    <div class="sixteen columns return_home">

        <h4><a href="/" alt="Back to Sellwood Cycle">&larr;&nbsp;Back to Sellwood Cycle Repair</a></h4>

    </div><!-- .sixteen .columns .return_home -->

    <footer class="sixteen columns footer">

      <div class="sixteen columns colophon footer_sellwood_logo">

      <p>&copy;<?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?> | Site by <a href="http://velograph.net/portfolio" alt="Jason Britton" target="_blank">Jason Britton</a>. Proudly powered by <a href="http://wordpress.org" alt="Wordpress">Wordpress</a>, <a href="http://stumptowncoffee.com/" alt="Stumptown">Coffee</a>, and <a href="http://www.pdxbottleshop.com/" alt="Portland Bottle Shop">Beer</a>.</p>

      </div><!-- .sixteen .columns .footer_sellwood_logo -->

    </footer>

<?php wp_footer(); ?>

</body>
</html>
