<!DOCTYPE html>
<html>
<?php 
	require 'connessioneDB.php';
	require 'utility.php'
	?>
<head>
	<title>Aggiunta Scuola</title>
</head>
<body>
	<?php
		make_header();
	?>

	<form action="aggScuolaDB.php" method="GET">
		<table>
			<tr>
				<td>
					Nome
				</td>
				<td>
					<input type="text" name="nomeScuola">
				</td>
			</tr>
			<tr>
				<td>
					Indirizzo
				</td>
				<td>
					<input type="text" name="indirizzoScuola">
				</td>
			</tr>
			<tr>
				<td>
					Telefono
				</td>
				<td>
					<input type="text" name="telefonoScuola">
				</td>
			</tr>
			<tr>
				<td>
					Tipo
				</td>
				<td>
					<select name="tipoScuola">
						<option value="Infanzia">Infanzia</option>
						<option value="Primaria">Primaria</option>
						<option value="Secondaria">Secondaria</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					Ultima ristrutturazione (Scrivere solo se infanzia)
				</td>
			</tr>
			<tr>
				<td>
					Anno
				</td>
				<td>
					Tipo ristrutturazione
				</td>
			</tr>
			<tr>
				<td>
					<input type="date" name="annoRistr">
				</td>
				<td>
					<select name="tipoRistr">
							<option value="Manutenzione Ordinaria">Manutenzione Ordinaria</option>
							<option value="Ristrutturazione Urbanistica">Ristrutturazione Urbanistica</option>
							<option value="Manutenzione Straordinaria">Manutenzione Straordinaria</option>
					</select>
				<td>
			</tr>
			<tr>
				<td>
					Dirigente Scolastico:
				</td>
				<td>
					<select name="cfDirigente">
							<?php
								$qGetDirigente_res= pg_query($conn, "SELECT cf, nome, cognome FROM personaleamministrativo WHERE mansione='Dirigente'");
								while ($row= pg_fetch_array($qGetDirigente_res) ) {
									echo "<option value='".$row[0]."'>".$row[1]." ".$row[2]."</option>";
								}
							?>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					Anno fondazione (Scrivere solo se secondaria)
				</td>
				<td>
					<input type="date" name="annoFondazione">
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="aggScuola">
				</td>
			</tr>
		</table>
	</form>

	<?php
		make_footer();
	?>
</body>
</html>