<!-- Brakes -->

<?php $values = get_field('brake_type_brake');
if($values) {
echo '<span class="product_detail"><strong>Brake Type: </strong>', the_field('brake_type_brake'),'</span>';
} ?>

<?php $values = get_field('reach_brake');
if($values) {
echo '<span class="product_detail"><strong>Reach: </strong>', the_field('reach_brake'),'</span>';
} ?>

<?php $values = get_field('rotors_brake');
if($values) {
echo '<span class="product_detail"><strong>Rotors: </strong>', the_field('rotors_brake'),'</span>';
} ?>

<?php $values = get_field('compatibility_brake');
if($values) {
echo '<span class="product_detail"><strong>Compatibility: </strong>', the_field('compatibility_brake'),'</span>';
} ?>

