<!-- This unchecks the Everything box if another is checked -->
<script type="text/javascript">
  $j(function(){
    var el=$j('input:checkbox[name="post_type[]"]');
    el.on('change', function(e){
        if($j(this).attr('id')!='any_checkbox')
        {
            if($j(this).is(':checked')) 
                $j('#any_checkbox').prop('checked', false);
        }
        else
        {
            if($j(this).is(':checked'))
                el.not($j(this)).prop('checked', false);
        }
    });
  }); 
</script>

<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">

  <?php $query_types = get_query_var('post_type'); ?>
  <div class="advanced_search_inputs">
    <input type="text" name="s" id="s" value="Search" />
    <input type="submit" id="searchsubmit" value="Search" />
  </div><!-- .advanced_search_inputs -->

  <div class="clear"></div>
  <div class="accordion">
    <h6><a href="">Advanced Search</a></h6>
    <div>

      <ul>
        <li>
          <input id="any_checkbox" type="checkbox" name="" value="" checked="true" /><label for="any_checkbox">Everything</label>
        </li>
        <li>
          <input id="new_checkbox" type="checkbox" name="post_type[]" value="new-bikes" /><label for="new_checkbox">New Bikes</label>
        </li>
        <li>
          <input id="used_checkbox" type="checkbox" name="post_type[]" value="used-bikes" /><label for="used_checkbox">Used Bikes</label>
        </li>
        <li>
          <input id="parts_checkbox" type="checkbox" name="post_type[]" value="parts-accessories" /><label for="parts_checkbox">Frames / Parts</label>
        </li>
        <li>
          <input id="post_checkbox" type="checkbox" name="post_type[]" value="post" /><label for="post_checkbox">Blog</label>
        </li>
      </ul>

    </div>
  </div><!-- .accordion -->

</form>
