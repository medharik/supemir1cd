<?php //echo validation_errors(); ?>
<?php // if(!empty($error)) echo $error; ?>
<?php //

echo form_open(('services/update'),array('class'=>'fo'),array('id'=>$service->id));?>

<input type="text" name="designation" placeholder="désignation" value="<?=$service->designation?>">
<input type="text" name="prix" placeholder="prix" value="<?=$service->prix?>">
<input type="text" name="unite" placeholder="unite" value="<?=$service->unite?>">
<!--<input type="file" name="photo"> -->
<input type="submit" name="ok" value="Modifier" class="btn btn-primary">
</form>