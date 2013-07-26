<table cellpadding="15" class="size_matrix_table">
  <thead>
    <tr>
      <th>Size</th>
      <?php if ( get_post_meta($post->ID, 'column_1_size_input', true) ) : ?>
        <th><?php echo get_post_meta($post->ID, 'column_1_size_input', true) ?></th>
      <?php endif; ?>

      <?php if ( get_post_meta($post->ID, 'column_2_size_input', true) ) : ?>
        <th><?php echo get_post_meta($post->ID, 'column_2_size_input', true) ?></th>
      <?php endif; ?>

      <?php if ( get_post_meta($post->ID, 'column_3_size_input', true) ) : ?>
        <th><?php echo get_post_meta($post->ID, 'column_3_size_input', true) ?></th>
      <?php endif; ?>

      <?php if ( get_post_meta($post->ID, 'column_4_size_input', true) ) : ?>
        <th><?php echo get_post_meta($post->ID, 'column_4_size_input', true) ?></th>
      <?php endif; ?>

      <?php if ( get_post_meta($post->ID, 'column_5_size_input', true) ) : ?>
        <th><?php echo get_post_meta($post->ID, 'column_5_size_input', true) ?></th>
      <?php endif; ?>

      <?php if ( get_post_meta($post->ID, 'column_6_size_input', true) ) : ?>
        <th><?php echo get_post_meta($post->ID, 'column_6_size_input', true) ?></th>
      <?php endif; ?>

      <?php if ( get_post_meta($post->ID, 'column_7_size_input', true) ) : ?>
        <th><?php echo get_post_meta($post->ID, 'column_7_size_input', true) ?></th>
      <?php endif; ?>

      <?php if ( get_post_meta($post->ID, 'column_8_size_input', true) ) : ?>
        <th><?php echo get_post_meta($post->ID, 'column_8_size_input', true) ?></th>
      <?php endif; ?>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>In<br />Stock</td>
      <?php if ( get_post_meta($post->ID, 'column_1_stock_input', true) ) : ?>
        <td><?php echo get_post_meta($post->ID, 'column_1_stock_input', true) ?></td>
      <?php endif; ?>

      <?php if ( get_post_meta($post->ID, 'column_2_stock_input', true) ) : ?>
        <td><?php echo get_post_meta($post->ID, 'column_2_stock_input', true) ?></td>
      <?php endif; ?>

      <?php if ( get_post_meta($post->ID, 'column_3_stock_input', true) ) : ?>
        <td><?php echo get_post_meta($post->ID, 'column_3_stock_input', true) ?></td>
      <?php endif; ?>

      <?php if ( get_post_meta($post->ID, 'column_4_stock_input', true) ) : ?>
        <td><?php echo get_post_meta($post->ID, 'column_4_stock_input', true) ?></td>
      <?php endif; ?>

      <?php if ( get_post_meta($post->ID, 'column_5_stock_input', true) ) : ?>
        <td><?php echo get_post_meta($post->ID, 'column_5_stock_input', true) ?></td>
      <?php endif; ?>

      <?php if ( get_post_meta($post->ID, 'column_6_stock_input', true) ) : ?>
        <td><?php echo get_post_meta($post->ID, 'column_6_stock_input', true) ?></td>
      <?php endif; ?>

      <?php if ( get_post_meta($post->ID, 'column_7_stock_input', true) ) : ?>
        <td><?php echo get_post_meta($post->ID, 'column_7_stock_input', true) ?></td>
      <?php endif; ?>

      <?php if ( get_post_meta($post->ID, 'column_8_stock_input', true) ) : ?>
        <td><?php echo get_post_meta($post->ID, 'column_8_stock_input', true) ?></td>
      <?php endif; ?>
    </tr>
  </tbody>
</table>
