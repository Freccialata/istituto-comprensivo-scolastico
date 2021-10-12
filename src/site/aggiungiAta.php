<!DOCTYPE html>
<html>
<?php
	require 'connessioneDB.php';
	require 'utility.php';
	?>
<head>
	<title>aggiungiAta</title>
</head>
<body>
	<?php
		make_header();
	?>

<form action="aggAtaDB.php" method="GET" name="aggATA">
		<table>
			<tr>
				<td>
					Nome
				</td>
				<td>
					<input type="text" name="nomeATA">
				</td>
			</tr>
			<tr>
				<td>
					Cognome
				</td>
				<td>
					<input type="text" name="cognomeATA">
				</td>
			</tr>
			<tr>
				<td>
					Codice Fiscale
				</td>
				<td>
					<input type="text" name="cfATA">
				</td>
			</tr>
			<tr>
				<td>
					Mansione
				</td>
				<td>
					<select name="mansioneAta">
						<option value="Addetto Pulizie">Addetto Pulizie</option>
						<option value="Assistente Amministrativo">Assistente Amministrativo</option>
						<option value="Dirigente">Dirigente scolastico</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					Scuola
				</td>
				<td>
					<select name="scuole">
					<?php 
						$qScuole= "SELECT DISTINCT telefono, nome FROM scuola ";
						$qScuole_res= pg_query($conn, $qScuole);
						if ($qScuole_res){
							while ($row = pg_fetch_array($qScuole_res)) {
								echo '<option value="'.$row['telefono'].'">'.$row['nome'].'</option>';
							}
						}
						else{
							echo "<h3>Errore query per l'elenco scuole</h3>";
						}
					?>
					</select> (solo se non è un dirigente scolastico)
				</td>
			</tr>
			<tr>
				<td>
					Inizio lavoro:
				</td>
				<td>
					<input type="date" name="inizioLavoro">
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="aggAlunnoGenitore">
				</td>
			</tr>
		</table>
	</form>



	<?php
		make_footer();
	?>
</body>

</html>