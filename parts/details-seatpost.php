<!-- Seatposts and saddles -->

<?php $values = get_field('seatpost_type_seatpost');
if($values) {
  echo '<span class="product_detail"><strong>Seatpost Type: </strong>', the_field('seatpost_type_seatpost'),'</span>';
} ?>

<?php $values = get_field('setback_seatpost');
if($values) {
  echo '<span class="product_detail"><strong>Setback Type: </strong>', the_field('setback_seatpost'),'</span>';
} ?>

<?php $values = get_field('size_seatpost');
if($values) {
  echo '<span class="product_detail"><strong>Size: </strong>', the_field('size_seatpost'),'</span>';
} ?>

<?php $values = get_field('saddle_type_seatpost');
if($values) {
  echo '<span class="product_detail"><strong>Saddle Type: </strong>', the_field('saddle_type_seatpost'),'</span>';
} ?>

<?php $values = get_field('rails_seatpost');
if($values) {
  echo '<span class="product_detail"><strong>Rails: </strong>', the_field('rails_seatpost'),'</span>';
} ?>

