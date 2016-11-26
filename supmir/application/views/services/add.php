

<?= form_open('services/create')?>
<caption> <?=$titre?></caption>
	<table align="center" width="500">
		<tr>
			<td>Désignation : </td>
			<td><input type="text" name="designation" ></td>
			
		</tr>

<tr>
			<td>Prix : </td>
			<td><input type="text" name="prix" ></td>
			
		</tr>

<tr>
			<td>unité : </td>
			<td><input type="text" name="unite" ></td>
			
		</tr>

<tr>
			<td>  </td>
			<td><input type="submit" name="ok"  value="Ajouter"></td>
			
		</tr>

	</table>


</form>