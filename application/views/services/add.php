<?php echo validation_errors(); ?>
<?php echo form_open(site_url('services/add'),array('class'=>'fo'));?>	
<input type="text" name="designation" placeholder="désignation">
<input type="text" name="prix" placeholder="prix">
<input type="text" name="unite" placeholder="unite">
<input type="submit" name="ok" value="Ajouter" class="btn btn-primary">
</form>