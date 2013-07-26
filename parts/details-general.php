<!-- General -->
<?php
if ( is_user_logged_in() ) {
echo '<span class="consignment_number"><strong>Consignment #: </strong>', the_field('consignment_number');
} ?>

  <?php get_template_part( 'parts/details', 'brakes' ); ?> 
  <?php get_template_part( 'parts/details', 'cockpit' ); ?> 
  <?php get_template_part( 'parts/details', 'drivetrain' ); ?> 
  <?php get_template_part( 'parts/details', 'forks' ); ?> 
  <?php get_template_part( 'parts/details', 'wheels' ); ?> 

<?php $values = get_field('condition');
if($values) {
echo '<span class="condition"><strong>Condition: </strong>', the_field('condition'),'</span>';
} ?>

