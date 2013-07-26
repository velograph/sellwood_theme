<?php
/**
 * Front Page - Holds links to CPT's and slider for blog posts
 *
 * @package -> Sellwood
 *
**/
?>
<?php get_header(); ?>

<section class="front_page_portals"> 

  <article class="eight columns consignment_portal">

    <img src="/wordpress/wp-content/themes/sellwood/images/consignment_portal_bg.jpg" alt="Consignment portal bg" title="Consignment portal bg" width="460" height="280" />

    <div class="consignment_links">

      <h1>Check out our latest inventory</h1>

      <h2><a href="/new-bikes">New Bikes</a></h2>

      <h2><a href="/used-bikes">Used Bikes</a></h2>

      <h2><a class="bottom_consignment_portal_link" href="/parts-accessories">Frames and  Parts</a></h2>

    </div><!-- .eight .columns .consignment_links -->

  </article><!-- .consignment_portal -->

  <article class="eight columns front_page_slider">

    <?php if ( function_exists( 'soliloquy_slider' ) ) soliloquy_slider( 'front-page-slider' ); ?>

  </article><!-- .eight .columns .front_page_slider -->

</section><!-- .front_page_portals -->

<?php get_footer(); ?>
