<!DOCTYPE html>
<html>
<head>
	<title><?php echo $titre?></title>
</head>
<body>
<div>
	<a href="<?=site_url('s/new')?>">Nouveau</a>

</div>
<table align="center" width="100%" border="1" style="background: #000;color:white">
	<tr>
		<td>désignation</td>
		<td>prix</td>
		<td>unité</td>
		<td>Opérations</td>
	</tr>
<?php foreach ($services as $s) {
?>	<tr>
		<td><?php echo htmlentities($s->designation)?></td>
		<td><?=$s->prix?></td>
		<td><?=$s->unite ?></td>
		<td>
<a href="<?php echo site_url("s/$s->id/delete") ?>" onclick="return confirm('voulez vous vrm supprimer cet élément?')">Supprimer</a>
<a href="<?php echo site_url("s/$s->id/edit")?> ">Modifier</a>
			<a href="<?=site_url("s/$s->id") ?>">Consulter</a>

		</td>
	</tr>
<?php } ?>
</table>
</body>
</html>