<?=$this->session->flashdata('message');?>

<hr>
<a href="<?=site_url('services/add')?>"> Nouveau</a>
<hr>
<table  width="100%">
	<tr><td>désignation</td><td>prix</td><td>unité</td><td>opérations</td></tr>
<?php foreach ($services as $s) {
	
?>
	<tr><td><?=$s->designation?></td><td><?=$s->prix?></td><td><?=$s->unite?></td><td><a href="<?php echo site_url('services/delete/'.$s->id) ;?>">Supprimer</a> | <a href="<?php echo site_url('services/update/'.$s->id );?>">Modifier</a> | <a href="<?php echo site_url( 'services/'.$s->id) ;?>">Voir</a></td></tr>

<?php } ?>

</table>