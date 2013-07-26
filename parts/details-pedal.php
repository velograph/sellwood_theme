<!-- pedals and shoes -->

<?php $values = get_field('pedal_type_pedal');
if($values) {
  echo '<span class="product_detail"><strong>Pedal Type: </strong>', the_field('pedal_type_pedal'),'</span>';
} ?>

<?php $values = get_field('cleat_type_pedal');
if($values) {
  echo '<span class="product_detail"><strong>Cleat Type: </strong>', the_field('cleat_type_pedal'),'</span>';
} ?>

<?php $values = get_field('shoe_type_pedal');
if($values) {
  echo '<span class="product_detail"><strong>Shoe Type: </strong>', the_field('shoe_type_pedal'),'</span>';
} ?>

<?php $values = get_field('size_pedal');
if($values) {
  echo '<span class="product_detail"><strong>Size: </strong>', the_field('size_pedal'),'</span>';
} ?>

