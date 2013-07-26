<!-- Misc -->

<?php $values = get_field('trainer_type_misc');
if($values) {
echo '<span class="product_detail"><strong>Trainer Type: </strong>', the_field('trainer_type_misc'),'</span>';
} ?>

