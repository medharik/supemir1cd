<?php echo validation_errors(); ?>
<?php // if(!empty($erreur)) echo $erreur; ?>
<?php 
echo form_open_multipart(('services/create'),array('class'=>'fo'));?>	
<input type="text" name="designation" placeholder="désignation">
<input type="text" name="prix" placeholder="prix">
<input type="text" name="unite" placeholder="unite">
<!--<input type="file" name="photo"> -->
<input type="submit" name="ok" value="Ajouter" class="btn btn-primary">
</form>