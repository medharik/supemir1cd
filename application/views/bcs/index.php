<h2>Infotrmation de : <?=$bc->id?> , de : <?=$bc->nommo ?>, id: <?=$bc->id ?></h2>
<ul>
	<?php foreach ($bc->service_bcs as  $sb): ?>
	<li><?=$sb->id?>,  quantité : <?=$sb->quantite?>, service : <?=$sb->service_id?>

	
		<li><?php $s=$this->sb->with('service')->get($sb->id);?>
			Libellé : <?=($s->service->designation)?> Dhs
			<br>Prix: <?=$s->service->prix?> Dhs


		</li>


</li>	
	<?php endforeach ?>


</ul>