<?php
/**
 * Footer Template
 *
 * @package -> Sellwood
 *
**/
?>

    <footer class="footer">

      <div class="four columns helpful_links">
        <h3 class="widgettitle">Utility</h3>
        <ul>
          <li>
            <a href="/consignment">Consignment Terms and Process</a>
          </li>

          <li>
            <a href="/history">History</a>
          </li>

<!--          <li>
            <a href="/staff">Staff</a>
          </li>
-->
          <li>
            <a href="/faqs">FAQ's</a>
          </li>

        </ul>
      </div><!-- .four .columns .helpful_links -->

      <div class="four columns bike_brands">

        <h3 class="widgettitle">Our Bike Brands</h3>
        <ul>
          <li>
                <a href="http://konaworld.com" alt="Kona Bikes" title="Kona Bikes"><img src="/wordpress/wp-content/themes/sellwood/images/kona_logo.png" alt="Kona Bikes" width="75" height="50" /></a>
          </li>
          <li>
                <a href="http://foundrycycles.com/" alt="Foundry Cycles" title="Foundry Cycles"><img src="/wordpress/wp-content/themes/sellwood/images/foundry_logo.png" alt="Foundry Cycles" width="75" height="50" /></a>
          </li>
          <li>
            <a href="http://yubaride.com/" alt="Yuba Bikes" title="Yuba Bikes"><img src="/wordpress/wp-content/themes/sellwood/images/yuba_logo.png" alt="Yuba Bikes" width="75" height="50" /></a>
          </li>
          <li>
            <a href="http://www.giant-bicycles.com/en-us/" alt="Giant Bikes" title="Giant Bikes"><img src="/wordpress/wp-content/themes/sellwood/images/giant_logo.png" alt="Giant Bikes" width="75" height="50" /></a>
          </li>
        </ul>

      </div><!-- .four .columns .bike_brands -->

      <div class="four columns footer_contact_us">
        <h3 class="widgettitle">Contact the Shop</h3>

          <ul>
            <li><a href="http://goo.gl/maps/o8EC0" alt="Google Maps" target="_blank">7953 SE 13th Ave<br /> Portland, OR 97202</a></li>
            <li><a href='&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#115;&#104;&#111;&#112;&#64;&#115;&#101;&#108;&#108;&#119;&#111;&#111;&#100;&#99;&#121;&#99;&#108;&#101;&#46;&#99;&#111;&#109;'>&#115;&#104;&#111;&#112;&#64;&#115;&#101;&#108;&#108;&#119;&#111;&#111;&#100;&#99;&#121;&#99;&#108;&#101;&#46;&#99;&#111;&#109;</a></li>
            <li><a href="tel:5032339392">(503) 233-9392</a></li>
            <li>Tues-Sat 10am-6pm</li>
          </ul>

      </div><!-- .four .columns .footer_contact_us -->

      <div class="four columns social_media">

        <h3 class="widgettitle">Social Media Stuff</h3>
        <ul>
          <li>
            <a href="https://www.facebook.com/sellwoodcyclerepair" class="facebook_icon" alt="Facebook" title="Facebook" target="_blank"><img src="/wordpress/wp-content/themes/sellwood/images/facebook.png" alt="Facebook" width="32" height="32" /></a>
          </li>
          <li>
            <a href="http://instagram.com/sellwoodcycle" class="instagram_icon" alt="Instagram" title="Instagram" target="_blank"><img src="/wordpress/wp-content/themes/sellwood/images/instagram.png" alt="Instagram" width="32" height="32" /></a>
          </li>
          <li>
            <a href="http://sellwoodcycle.tumblr.com" class="tumblr_icon" alt="Tumblr" title="Tumblr" target="_blank"><img src="/wordpress/wp-content/themes/sellwood/images/tumblr.png" alt="Tumblr" width="32" height="32" /></a>
          </li>
        </ul>

      </div><!-- .four .columns .social_media -->

      <div class="sixteen columns colophon footer_sellwood_logo">

        <img src="/wordpress/wp-content/themes/sellwood/images/footer_sellwood_logo.png" />
        &copy;<?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?>
        <p>Site by <a href="http://velograph.net/portfolio" alt="Jason Britton" target="_blank">Jason Britton</a>. Proudly powered by <a href="http://wordpress.org" alt="Wordpress">Wordpress</a>, <a href="http://stumptowncoffee.com/" alt="Stumptown">Coffee</a>, and <a href="http://www.pdxbottleshop.com/" alt="Portland Bottle Shop">Beer</a>.</p>

      </div><!-- .sixteen .columns .footer_sellwood_logo -->

    </footer><!-- .footer -->

  </div><!-- .container -->

<!-- Google Analytics -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36494047-1']);
  _gaq.push(['_setDomainName', 'sellwoodcycle.com']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!-- Crazy Egg!!! -->
<script type="text/javascript">
setTimeout(function(){var a=document.createElement("script");
var b=document.getElementsByTagName("script")[0];
a.src=document.location.protocol+"//dnn506yrbagrg.cloudfront.net/pages/scripts/0017/0503.js?"+Math.floor(new Date().getTime()/3600000);
a.async=true;a.type="text/javascript";b.parentNode.insertBefore(a,b)}, 1);
</script>

<?php wp_footer(); ?>

</body>
</html>
