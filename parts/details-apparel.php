<!-- Apparel -->

<?php $values = get_field('availability_apparel');
if($values) {
echo '<span class="product_detail"><strong>Availability: </strong>', the_field('availability_apparel'),'</span>';
} ?>

<?php $values = get_field('size_apparel');
if($values) {
echo '<span class="product_detail"><strong>Size: </strong>', the_field('size_apparel'),'</span>';
} ?>

