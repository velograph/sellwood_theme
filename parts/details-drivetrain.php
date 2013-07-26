<!-- Drivetrain -->

<?php $values = get_field('compatibility_drivetrain');
if($values) {
echo '<span class="product_detail"><strong>Compatibility: </strong>', the_field('compatibility_drivetrain'),'</span>';
} ?>

<?php $values = get_field('clamp_type_drivetrain');
if($values) {
echo '<span class="product_detail"><strong>Clamp Diameter: </strong>', the_field('clamp_type_drivetrain'),'</span>';
} ?>

<?php $values = get_field('clamp_diameter_drivetrain');
if($values) {
echo '<span class="product_detail"><strong>Clamp Diameter: </strong>', the_field('clamp_diameter_drivetrain'),'</span>';
} ?>

<?php $values = get_field('derailleur_type_drivetrain');
if($values) {
echo '<span class="product_detail"><strong>Derailleur Type: </strong>', the_field('derailleur_type_drivetrain'),'</span>';
} ?>

<?php $values = get_field('crank_type_drivetrain');
if($values) {
echo '<span class="product_detail"><strong>Crank Type: </strong>', the_field('crank_type_drivetrain'),'</span>';
} ?>

<?php $values = get_field('length_drivetrain');
if($values) {
echo '<span class="product_detail"><strong>Length: </strong>', the_field('length_drivetrain'),'</span>';
} ?>

<?php $values = get_field('chainrings_drivetrain');
if($values) {
echo '<span class="product_detail"><strong>Chainrings: </strong>', the_field('chainrings_drivetrain'),'</span>';
} ?>

<?php $values = get_field('bb_type_drivetrain');
if($values) {
echo '<span class="product_detail"><strong>BB Type: </strong>', the_field('bb_type_drivetrain'),'</span>';
} ?>

<?php $values = get_field('teeth_drivetrain');
if($values) {
echo '<span class="product_detail"><strong>Teeth: </strong>', the_field('teeth_drivetrain'),'</span>';
} ?>

