<?php
foreach($fields as $field)

{?>
<div class="col-md-6 mb-4">
    <label class="form-label"><?php echo $field['label']; ?></label>
	<input class="form-control pe-5 bg-transparent" type="<?php echo $field['type']; ?>" name="<?php echo $field['name']; ?>" value="<?php echo $data[$field['name']]; ?>" placeholder="">
</div>
<?php
}?>