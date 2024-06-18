<div class="col-md-6">
	<!-- Short by filter -->
	
		<select class="form-select js-choice border-0 z-index-9 bg-transparent" aria-label=".form-select-sm" name="sort">
        <option value=""> Sort By</option>
        <?php
		    $selected = isset($_REQUEST['sort']) ? $_REQUEST['sort'] : '';
			foreach($sfields as $value=>$option){
				
				$isSelected = ($selected == $value) ? 'selected' : '';
        ?>
        <option value="<?php echo $value ?>"  <?php echo $isSelected; ?>> <?php echo "$option"; ?> </option>
		<?php } ?>
		
		
		</select>
</div>

<div class="col-md-6">
	<!-- Short by filter -->
	
		<select class="form-select js-choice border-0 z-index-9 bg-transparent" aria-label=".form-select-sm" name="sortType">
		    <?php
		    $selected = isset($_REQUEST['sortType']) ? $_REQUEST['sortType'] : '';
		    ?>
            <option value="asc" <?php echo ($selected == 'asc') ? 'selected' : ''; ?>>Ascending</option>
            <option value="desc" <?php echo ($selected == 'desc') ? 'selected' : ''; ?>>Descending</option>
        
		</select>
</div>