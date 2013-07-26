<!-- New Bikes -->

<?php $values = get_field('new_bikes_bike_type');
if($values) {
  echo '<span class="product_detail"><strong>Bike Type: </strong>', the_field('new_bikes_bike_type'),'</span>';
} ?>

<?php $values = get_field('new_bikes_frame_material');
if($values) {
  echo '<span class="product_detail"><strong>Frame Material: </strong>', the_field('new_bikes_frame_material'),'</span>';
} ?>

<?php $values = get_field('new_bikes_drivetrain');
if($values) {
  echo '<span class="product_detail"><strong>Drivetrain: </strong>', the_field('new_bikes_drivetrain'),'</span>';
} ?>

<?php $values = get_field('new_bikes_groupset');
if($values) {
  echo '<span class="product_detail"><strong>Groupset: </strong>', the_field('new_bikes_groupset'),'</span>';
} ?>

<?php $values = get_field('new_bikes_brakes');
if($values) {
  echo '<span class="product_detail"><strong>Brakes: </strong>', the_field('new_bikes_brakes'),'</span>';
} ?>

<?php $values = get_field('new_bikes_fork');
if($values) {
  echo '<span class="product_detail"><strong>Fork: </strong>', the_field('new_bikes_fork'),'</span>';
} ?>

<?php $values = get_field('new_bikes_rear_suspension');
if($values) {
  echo '<span class="product_detail"><strong>Rear Suspension: </strong>', the_field('new_bikes_rear_suspension'),'</span>';
} ?>

<?php $values = get_field('new_bikes_wheelsize');
if($values) {
  echo '<span class="product_detail"><strong>Wheelsize: </strong>', the_field('new_bikes_wheelsize'),'</span>';
} ?>

<?php $values = get_field('link_to_bike_on_vendor_site');
if($values) {
  echo '<span class="product_detail">', '<a href="', the_field('link_to_bike_on_vendor_site'),'" target="_blank">Vendor Site</a></span>';
} ?>

