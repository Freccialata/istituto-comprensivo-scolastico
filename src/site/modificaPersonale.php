<!DOCTYPE html>
<html>
<?php 
	require 'connessioneDB.php';
	require 'utility.php';
	?>
<head>
	<title>Modifica personale</title>
</head>
<body>
	<?php
		make_header();

		$personaDaModificare=$_GET['personaleAta'];
		$nomePersona= pg_fetch_array(pg_query($conn, "SELECT nome, cognome FROM personaleamministrativo WHERE cf='".$personaDaModificare."'; "));
		echo "<h3>".$nomePersona['nome']." ".$nomePersona['cognome']."</h3>"
	?>		

<form action="modPersonaleDB.php" method="GET">
	<table>
		<tr>
			<td> Fine lavoro: </td>
			<td>
				<input type="checkbox" name="modFineLavoro" value="true">
			</td>
			<td>
				<input type="date" name="fineLavoro">
			</td> 
			<td> Cambio mansione: </td>
			
			<td>
				<input type="checkbox" name="modMansione" value="true">
			</td>
			<td>
			<select name="mansioneAta">
						<option value="Addetto Pulizie">Addetto Pulizie</option>
						<option value="Assistente Amministrativo">Assistente Amministrativo</option>
					</select>
			</td>

			<td>
				<input type="submit">
			</td>
			<?php
			echo '<input type="text" value="'.$personaDaModificare.'" name="persona" style="visibility: hidden;">';
			?>

		</tr>
	</table>
</form>
<?php
		make_footer();


	?>	



</body>


</html>