<!-- Forks -->

<?php $values = get_field('fork_type_fork');
if($values) {
echo '<span class="product_detail"><strong>Fork Type: </strong>', the_field('fork_type_fork'),'</span>';
} ?>

<?php $values = get_field('steerer_fork');
if($values) {
echo '<span class="product_detail"><strong>Steerer: </strong>', the_field('steerer_fork'),'</span>';
} ?>

<?php $values = get_field('brake_type_fork');
if($values) {
echo '<span class="product_detail"><strong>Brake Type: </strong>', the_field('brake_type_fork'),'</span>';
} ?>

<?php $values = get_field('travel_fork');
if($values) {
echo '<span class="product_detail"><strong>Travel: </strong>', the_field('travel_fork'),'</span>';
} ?>

<?php $values = get_field('axle_fork');
if($values) {
echo '<span class="product_detail"><strong>Axle: </strong>', the_field('axle_fork'),'</span>';
} ?>

<?php $values = get_field('axle_to_crown_fork');
if($values) {
echo '<span class="product_detail"><strong>Axle to Crown: </strong>', the_field('axle_to_crown_fork'),'</span>';
} ?>

<?php $values = get_field('wheelsize_fork');
if($values) {
echo '<span class="product_detail"><strong>Wheelsize: </strong>', the_field('wheelsize_fork'),'</span>';
} ?>

<?php $values = get_field('crown_race_size_fork');
if($values) {
echo '<span class="product_detail"><strong>Crown Race Size: </strong>', the_field('crown_race_size_fork'),'</span>';
} ?>

