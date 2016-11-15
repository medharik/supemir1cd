<!DOCTYPE html>
<html>
<head>
	<title><?php echo $titre?></title>
</head>
<body>

<table align="center" width="100%" border="1" style="background: #000;color:white">
	<tr>
		<td>désignation</td>
		<td>prix</td>
		<td>unité</td>
		<td>Opérations</td>
	</tr>



<?php foreach ($services as $s) {
	
?>
	<tr>
		<td><?=$s->designation?></td>
		<td><?=$s->prix?></td>
		<td><?=$s->unite?></td>
		<td><a href="s/<?=$s->id?>">Détails</a></td>
	</tr>
<?php } ?>
</table>
</body>
</html>