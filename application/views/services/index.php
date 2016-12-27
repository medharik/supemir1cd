<style type="text/css">
	.pagination a{
padding: 10px;
color: red;
font-size: 1.2em;

	}
	.pagination{
width: 100%;
min-height: 50px;
line-height: 50px;
text-align: center;
background: white;
	}
.cl{
margin: 4px;
color: white !important;

}
.pagination b {
background: green;
color: white;
padding: 5px 10px;
font-size: 12px;
line-height: 1.5;
border-radius: 3px;


}
</style>
<?php foreach ($js as $c): ?>
	<?=js($c)?>
<?php endforeach ?>
<?php foreach ($css as $c): ?>
	<?=css($c)?>
<?php endforeach ?>
<div class="alert alert-info" style="display:<?php if($this->session->flashdata('message')) echo "block";else echo 'none'?>">
<?=$this->session->flashdata('message');?>
</div>

<a href="<?=site_url('services/add')?>" class="btn btn-success"> Nouveau </a>

<table  width="100%" class="table table-striped">
	<tr><td>désignation</td><td>prix</td><td>unité</td><td>opérations</td></tr>
<?php foreach ($services as $s) {
	
?>
	<tr><td><?php if(!empty($s->photo) ) {?> 
<img src='<?=site_url($s->photo); ?>' width='100'>
<?php }?>

		<?=$s->designation?></td><td><?=$s->prix?></td><td><?=$s->unite?></td><td><a href="<?php echo site_url('services/delete/'.$s->id) ;?>" class="btn btn-danger">Supprimer</a> | <a href="<?php echo site_url('services/update/'.$s->id );?>" class="btn btn-warning">Modifier</a> | <a href="<?php echo site_url( 'services/'.$s->id) ;?>" class="btn btn-info">Voir</a></td></tr>
  
<?php } ?>

</table>
<div class="pagination" align="center">
	<?=$pages;?>

</div>