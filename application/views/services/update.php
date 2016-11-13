<?php echo validation_errors(); ?>

<?php echo form_open(site_url('services/add'),array('class'=>'fo'),array('id'=>$service->id));?>	
<input type="text" name="designation" placeholder="désignation" value="<?=$service->designation?>">
<input type="text" name="prix" placeholder="prix" value="<?=$service->prix?>">
<input type="text" name="unite" placeholder="unite" value="<?=$service->unite?>">
<input type="submit" name="ok" value="Modifier">
</form>