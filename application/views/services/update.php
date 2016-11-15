<div class="alert alert-danger" >
<?php echo validation_errors(); ?>
</div>
<div class="col-md-4 center-block" style="float: none">
<?php echo form_open(site_url('services/update'),array('class'=>'form-horizontal'),array('id'=>$service->id));?>	
<input type="text" name="designation" class="form-control"  placeholder="désignation" value="<?=$service->designation?>"  >
<input type="text" name="prix" placeholder="prix" value="<?=$service->prix?>" class="form-control">
<input type="text" name="unite" placeholder="unite" value="<?=$service->unite?>" class="form-control">
<input type="submit" name="ok" value="Modifier" class="btn btn-primary form-control">
</form>

</div>