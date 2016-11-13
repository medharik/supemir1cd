
<div class="alert alert-info" style="display:<?php if($this->session->flashdata('message')) echo "block";else echo 'none'?>">
<?=$this->session->flashdata('message');?>
</div>

<a href="<?=site_url('services/add')?>" class="btn btn-success"> Nouveau </a>

<table  width="100%" class="table table-striped">
	<tr><td>désignation</td><td>prix</td><td>unité</td><td>opérations</td></tr>
<?php foreach ($services as $s) {
	
?>
	<tr><td><?=$s->designation?></td><td><?=$s->prix?></td><td><?=$s->unite?></td><td><a href="<?php echo site_url('services/delete/'.$s->id) ;?>" class="btn btn-danger">Supprimer</a> | <a href="<?php echo site_url('services/update/'.$s->id );?>" class="btn btn-warning">Modifier</a> | <a href="<?php echo site_url( 'services/'.$s->id) ;?>" class="btn btn-info">Voir</a></td></tr>

<?php } ?>

</table>