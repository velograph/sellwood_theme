      <?php
        $order = "&order=DESC";
        if ($_POST['select'] == 'a-z') { $order = "&order=ASC&orderby=title";  }
        if ($_POST['select'] == 'z-a') { $order = "&order=DESC&orderby=title";  }
        if ($_POST['select'] == 'newest') { $order = "&order=DESC"; }
        if ($_POST['select'] == 'oldest') { $order = "&order=ASC";  }
      ?>

      <form  method="post" id="order">
        <select name="select" onchange='this.form.submit()'>
          <option value="Sort Listings">Sort Results</option>
          <option value="a-z"<?php selected( $_POST['select'],'a-z', 1 ); ?>>A-Z</option>
          <option value="z-a"<?php selected( $_POST['select'],'z-a', 1 ); ?>>Z-A</option>
          <option value="newest"<?php selected( $_POST['select'],'newest', 1 ); ?>>Newest</option>
          <option value="oldest"<?php selected( $_POST['select'], 'oldest', 1 ); ?>>Oldest</option>
        </select>
      </form>
      <?php query_posts($query_string . $order); ?>

