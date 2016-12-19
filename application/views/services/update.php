<?php echo validation_errors(); ?>
<?php // if(!empty($error)) echo $error; ?>
<?php //
echo $this->session->flashdata('message');

echo form_open_multipart(('services/update'),array('class'=>'fo'),array('id'=>$service->id));?>

<input type="text" name="designation" placeholder="désignation" value="<?=$service->designation?>">
<input type="text" name="prix" placeholder="prix" value="<?=$service->prix?>">
<input type="text" name="unite" placeholder="unite" value="<?=$service->unite?>">

<input type="submit" name="ok" value="Modifier" class="btn btn-primary">
</form>
