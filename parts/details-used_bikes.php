<script>
$j(function() {
$j( ".availability_tooltip" ).tooltip( { content: "<h3>Availability Date</h3><p>Each used bike that we sell is run through the City of Portland’s NWRAPID serial number database to ensure that it is not stolen. This process is 14 days from the day we accept the bike. You can buy the bike within that period, but it must stay at the shop until the 14 day period is over.</p>" } );
});
</script>

<!-- Used Bikes -->

<?php $values = get_field('used_bikes_availability_date');
if($values) {
$date = get_field('used_bikes_availability_date');
echo '<span class="product_detail"><strong>Availability Date: </strong>&nbsp;<a href="#" class="availability_tooltip" title="">',date("m/d/Y", strtotime($date)).'</a></span>';
} ?>

  
<?php $values = get_field('used_bikes_bike_type');
if($values) {
echo '<span class="product_detail"><strong>Bike Type: </strong>', the_field('used_bikes_bike_type'),'</span>';
} ?>

<?php $values = get_field('used_bikes_top_tube');
if($values) {
echo '<span class="product_detail"><strong>Top Tube: </strong>', the_field('used_bikes_top_tube'),'</span>';
} ?>

<?php $values = get_field('used_bikes_frame_material');
if($values) {
echo '<span class="product_detail"><strong>Frame Material: </strong>', the_field('used_bikes_frame_material'),'</span>';
} ?>

<?php $values = get_field('used_bikes_drivetrain');
if($values) {
echo '<span class="product_detail"><strong>Drivetrain: </strong>', the_field('used_bikes_drivetrain'),'</span>';
} ?>

<?php $values = get_field('used_bikes_groupset');
if($values) {
echo '<span class="product_detail"><strong>Groupset: </strong>', the_field('used_bikes_groupset'),'</span>';
} ?>

<?php $values = get_field('used_bikes_brakes');
if($values) {
echo '<span class="product_detail"><strong>Brakes: </strong>', the_field('used_bikes_brakes'),'</span>';
} ?>

<?php $values = get_field('used_bikes_wheels');
if($values) {
echo '<span class="product_detail"><strong>Wheels: </strong>', the_field('used_bikes_wheels'),'</span>';
} ?>

<?php $values = get_field('used_bikes_wheelsize');
if($values) {
echo '<span class="product_detail"><strong>Wheelsize: </strong>', the_field('used_bikes_wheelsize'),'</span>';
} ?>

<?php $values = get_field('used_bikes_fork');
if($values) {
echo '<span class="product_detail"><strong>Fork: </strong>', the_field('used_bikes_fork'),'</span>';
} ?>

<?php $values = get_field('used_bikes_rear_suspension');
if($values) {
echo '<span class="product_detail"><strong>Rear Suspension: </strong>', the_field('used_bikes_rear_suspension'),'</span>';
} ?>

<?php $values = get_field('used_bikes_extras');
if($values) {
echo '<span class="product_detail"><strong>Extras: </strong>', the_field('used_bikes_extras'),'</span>';
} ?>

