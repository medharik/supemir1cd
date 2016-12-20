<!DOCTYPE html>
<html>
<head>
	<title><?php echo $titre?></title>

	<?php foreach ($css as $c): ?>
	<?= css($c);?>	
	<?php endforeach ?>
	<?php foreach ($js as $c): ?>
	<?= js($c);?>	
	<?php endforeach ?>

 <meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

	
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
.pages{
	padding: 10px;
	color: red;
}
.table{
background: red;

}
.table .even{
color: red;

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
<div align="center"><?=$pages?></div>

<table align="center"  class="table table-striped table-responsive table-condensed" id="matable">
<thead>				
				<tr>

				<td>photo</td>
					<td>désignation</td>
					<td>prix</td>
					<td>unité</td>
					<td>Opérations</td>
					<td>Selection</td>
				</tr>
				</thead>
<tbody><?php foreach ($services as $s) {
?>	

<tr>
<td><img src="<?=site_url('images/'.$s->photo)?>" width="100" ></td>
		<td><?php echo htmlentities($s->designation)?></td>
		<td><?=$s->prix?></td>
		<td><?=$s->unite ?></td>
		<td>
<a href="<?php echo site_url("s/$s->id/delete") ?>" onclick="return confirm('voulez vous vrm supprimer cet élément?')" class="btn btn-danger">Supprimer</a>
<a href="<?php echo site_url("s/$s->id/edit")?> " class="btn btn-warning">Modifier</a>
			<a href="<?=site_url("s/$s->id") ?>" class="btn btn-success">Consulter</a>

		</td>
		<td><input type="checkbox" name="ss[]" value="<?=$s->id?>"></td>
		
	</tr>

<?php } ?>	</tbody>
<tfoot><tr>

				<td>photo</td>
					<td>désignation</td>
					<td>prix</td>
					<td>unité</td>
					<td>Opérations</td>
					<td>Selection</td>
				</tr></tfoot>
</table>


</form>
<table id="table2" border="1" align="center" width="600">
	<thead>
	<tr>
		<td>désignation</td>
					<td>prix</td>
					<td>unité</td>
</tr>
	</thead>
	<tbody>
	<tr>
		<td>désignation</td>
					<td>prix</td>
					<td>unité</td>

	</tr>	

	</tbody>

</table>
<script type="text/javascript">
    $(document).ready(function () {
    	$('#matable').dataTable();

        var oTable = $('#table2').dataTable({
            "bProcessing": true,
            "bServerSide": true,
            "sAjaxSource": '<?php echo base_url(); ?>services/datatable',
            "bJQueryUI": true,
            "sPaginationType": "full_numbers",
            "iDisplayStart ": 20,
            "oLanguage": {
                "sProcessing": "chargement en cours..."
            },
            "fnInitComplete": function () {
                //oTable.fnAdjustColumnSizing();
            },
            'fnServerData': function (sSource, aoData, fnCallback) {
                $.ajax
                ({
                    'dataType': 'json',
                    'type': 'POST',
                    'url': sSource,
                    'data': aoData,
                    'success': fnCallback
                });
            }
        });
    });
</script>


</body>
</html>