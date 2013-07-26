<html class="no-js" lang="en"><!--<![endif]-->
<head>
<title><?php bloginfo( 'name' ); ?><?php wp_title( '|' ); ?></title>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- Remove if you're not building a responsive site. (But then why would you do such a thing?) -->
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico"/>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/jquery-ui.min.js"></script>
<script type='text/javascript' src="/wordpress/wp-content/themes/sellwood/js/clear_input.js"></script>
<script type='text/javascript' src="/wordpress/wp-content/themes/sellwood/js/jquery.ui.position.js"></script>
<script type='text/javascript'>

  $j=jQuery.noConflict();
 
  $j(document).ready(function(){
    // Clears inputs when focused
    $j('input').clearInput();

    $j(function() {
      $j( ".accordion" ).accordion({
        collapsible: true,
        active: false,
        heightStyle: 'content'
      });
    });

  });

</script>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  
  <div class="container">
    <div class="sixteen columns alert_header">
      <?php if (is_active_sidebar('alert_sidebar') ) : ?>
        <?php dynamic_sidebar('alert_sidebar'); ?>
      <?php endif; ?>
    </div><!-- .sixteen .columns .alert_header -->


    <header class="sixteen columns header">

      <a href="/">
        <img src="/wordpress/wp-content/themes/sellwood/images/sellwood_banner.jpg" alt="Sellwood Cycle banner" title="Sellwood Cycle banner" width="1400" height="125" />
      </a>

      <ul class="location">
        <li>
          <a href="http://goo.gl/maps/o8EC0" class="shop_address" alt="Google Maps" target="_blank">7953 SE 13th Ave Portland, OR 97202</a>
        </li>
        <li>
          <a href="tel:5032339392">(503) 233-9392</a>
        </li>
        <li>
          Tues-Sat 10am-6pm
        </li>
        <li class="site_updated">
          Site updated: <strong><?php site_last_updated('F j, Y') ?></strong> at <strong><?php site_last_updated('g:i a') ?></strong>
        </li>
      </ul><!-- .location -->

    </header><!-- .sixteen .columns .header -->

    <nav class="ten columns nav">
        <?php wp_nav_menu(); ?>
    </nav><!-- .twelve .columns .nav -->

    <div class="six columns advanced_search">
      <?php if ( is_front_page() ) { get_template_part( 'advanced_search' ); } ?>

    </div><!-- .four .columns .site_updated -->

    <div class="clear"></div>


