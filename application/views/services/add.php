<?php echo validation_errors(); ?>
<h3 style="color: red;"><?php if(!empty($erreur)) echo $erreur; ?></h3>
<?php 
echo form_open_multipart(('services/create'),array('class'=>'fo'));?>	
<input type="text" name="designation" placeholder="désignation" value="<?=set_value('designation')?>">
<input type="text" name="prix" placeholder="prix" value="<?=set_value('prix')?>">
<input type="text" name="unite" placeholder="unite" value="<?=set_value('unite')?>">
<input type="file" name="photo" value="<?=set_value('photo')?>"><img src="set_value('photo')">
<input type="submit" name="ok" value="Ajouter" class="btn btn-primary">
</form>