<!-- Accessories -->

<?php $values = get_field('light_type_accessory');
if($values) {
echo '<span class="product_detail"><strong>Light Type: </strong>', the_field('light_type_accessory'),'</span>';
} ?>

<?php $values = get_field('rack_type_accessory');
if($values) {
echo '<span class="product_detail"><strong>Rack Type: </strong>', the_field('rack_type_accessory'),'</span>';
} ?>

<?php $values = get_field('trailer_type_accessory');
if($values) {
echo '<span class="product_detail"><strong>Trailer Type: </strong>', the_field('trailer_type_accessory'),'</span>';
} ?>

<?php $values = get_field('capacity_accessory');
if($values) {
echo '<span class="product_detail"><strong>Capacity: </strong>', the_field('capacity_accessory'),'</span>';
} ?>

<?php $values = get_field('size_accessory');
if($values) {
echo '<span class="product_detail"><strong>Size: </strong>', the_field('size_accessory'),'</span>';
} ?>

