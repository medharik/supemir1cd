<?php echo validation_errors(); ?>

<?php
if(!empty($erreur)){
echo $erreur;
?>

<?php } ?>
<?php 
echo form_open_multipart(('services/create'),array('class'=>'fo','id'=>'test'));?>	
<input type="text" name="designation" placeholder="désignation" value="<?=set_value('designation')?>">
<input type="text" name="prix" placeholder="prix" value="<?=set_value('prix')?>">
<input type="text" name="unite" placeholder="unite" value="<?=set_value('unite')?>">
<input type="file" name="photo" id="photo" >
<input type="submit" name="ok" value="Ajouter" class="btn btn-primary">
</form>