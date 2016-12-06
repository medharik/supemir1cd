<!DOCTYPE html>
<html>
<head>
	<title><?php echo $titre?></title>
</head>
<body>
<div style="background: green;padding: 10px;text-align: center;color: white;display: inline"><?php $this->session->flashdata('message');?></div>
<div>
	<a href="<?=site_url('s/new')?>">Nouveau</a>
	<a href="#" onclick=" ;fs.submit()">Supprimer la selection</a>

</div>
<?=form_open('s/0/delete', array('id'=>'fs'));?>
<table align="center" width="100%" border="1" style="background: #000;color:white">
				<tr><td>Photo</td>
					<td>désignation</td>
					<td>prix</td>
					<td>unité</td>
					<td>Opérations</td>
					<td>selection</td>
				</tr>
<?php foreach ($services as $s) {
?>	<tr><td><img src="<?=site_url('uploads/'.$s->photo)?>"></td>
		<td><?php echo htmlentities($s->designation)?></td>
		<td><?=$s->prix?></td>
		<td><?=$s->unite ?></td>
		<td>
<a href="<?php echo site_url("s/$s->id/delete") ?>" onclick="return confirm('voulez vous vrm supprimer cet élément?')">Supprimer</a>
<a href="<?php echo site_url("s/$s->id/edit")?> ">Modifier</a>
			<a href="<?=site_url("s/$s->id") ?>">Consulter</a>

		</td>
		<td><input type="checkbox" name="s[]" value="<?=$s->id;?>"></td>
	</tr>
<?php } ?>
</table>
</form>
</body>
</html>