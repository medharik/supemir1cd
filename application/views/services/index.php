<!DOCTYPE html>
<html>
<head>
	<title><?php echo $titre?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo site_url();?>">
<style type="text/css">
	.k{
display: inline-flex;
padding: 0;
margin: 0;
outline: 4px solid blue;
	}
.k li{
border: 1px solid black;
background: tomato;
list-style: none;
padding: 10px;
outline: 4px solid yellow;
}

</style>
</head>

<body>

<script type="text/javascript">
	function supprimer() {
		if(confirm('voulez vous vraiment supprimer ce(s) élément(s).')){
	document.getElementById('fd').submit();
return true;
	}
	return false;
}
</script>
<?php 

if( ( $this->session->flashdata('message') )){ ?>
<div style="background: green;padding: 10px;text-align: center;color: white;display: inline"><?php echo $this->session->flashdata('message');?></div>
<?php }?>
<div>
	<a href="<?=site_url('s/new')?>">Nouveau</a>
	
</div>
<h3>Liste des <?=$nombre_services?> services</h3>
<a href="#"  onclick="supprimer()">Supprimer les service(s) séléctionné(s)</a>
<?php echo form_open('s/0/delete',array('id'=>'fd','name'=>'fd')) ?>
<table align="center" width="100%" border="1" style="background: #000;color:white">
				<tr><td>photo</td>
					<td>désignation</td>
					<td>prix</td>
					<td>unité</td>
					<td>Opérations</td>
					<td>Selection</td>
				</tr>
<?php foreach ($services as $s) {
?>	<tr>
<td><img src="<?=site_url('images/'.$s->photo)?>" width="100" ></td>
		<td><?php echo htmlentities($s->designation)?></td>
		<td><?=$s->prix?></td>
		<td><?=$s->unite ?></td>
		<td>
<a href="<?php echo site_url("s/$s->id/delete") ?>" onclick="return confirm('voulez vous vrm supprimer cet élément?')">Supprimer</a>
<a href="<?php echo site_url("s/$s->id/edit")?> ">Modifier</a>
			<a href="<?=site_url("s/$s->id") ?>">Consulter</a>

		</td>
		<td><input type="checkbox" name="ss[]" value="<?=$s->id?>"></td>
		
	</tr>
<?php } ?>
</table>

</form>

</body>
</html>