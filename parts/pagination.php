<!-- Pagination for list pages -->

    <div class="pagination top_pagination">
      <?php global $wp_query;
        $big = 999999999; // need an unlikely integer

        echo paginate_links( array(
          'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
          'format' => '?paged=%#%',
          'current' => max( 1, get_query_var('paged') ),
          'total' => $wp_query->max_num_pages,
          'prev_next' => true,
          'prev_text' => '&larr; Previous',
          'next_text' => 'Next &rarr;'
        ) );
      ?>
    </div><!-- .pagination -->

