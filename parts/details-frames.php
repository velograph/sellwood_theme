<!-- Frames -->

<?php $values = get_field('availability_date_frame');
if($values) {
echo '<span class="product_detail"><strong>Availability Date: </strong>', the_field('availability_date_frame'),'</span>';
} ?>

<?php $values = get_field('bike_type_frame');
if($values) {
echo '<span class="product_detail"><strong>Bike Type: </strong>', the_field('bike_type_frame'),'</span>';
} ?>

<?php $values = get_field('top_tube_frame');
if($values) {
echo '<span class="product_detail"><strong>Top Tube: </strong>', the_field('top_tube_frame'),'</span>';
} ?>

<?php $values = get_field('frame_material_frame');
if($values) {
echo '<span class="product_detail"><strong>Frame Material: </strong>', the_field('frame_material_frame'),'</span>';
} ?>

<?php $values = get_field('fork_type_frame');
if($values) {
echo '<span class="product_detail"><strong>Fork Type: </strong>', the_field('fork_type_frame'),'</span>';
} ?>

<?php $values = get_field('rear_suspension_frame');
if($values) {
echo '<span class="product_detail"><strong>Rear Suspension: </strong>', the_field('rear_suspension_frame'),'</span>';
} ?>

<?php $values = get_field('wheelsize_frame');
if($values) {
echo '<span class="product_detail"><strong>Wheelsize: </strong>', the_field('wheelsize_frame'),'</span>';
} ?>

<?php $values = get_field('brake_type_frame');
if($values) {
echo '<span class="product_detail"><strong>Brake Type: </strong>', the_field('brake_type_frame'),'</span>';
} ?>

<?php $values = get_field('frame_spacing_frame');
if($values) {
echo '<span class="product_detail"><strong>Frame Spacing: </strong>', the_field('frame_spacing_frame'),'</span>';
} ?>

