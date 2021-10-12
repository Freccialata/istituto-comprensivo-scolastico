<!DOCTYPE html>
<html>
<head>
	<?php require 'connessioneDB.php'; require 'utility.php';?>
	<title>Aggiunta Voto</title>
</head>
<body>


<?php
	make_header();
?>

<h4>Aggiungi un voto:</h4>
<form action="aggVotoDB.php" method="GET">
	<table>
		<tr>
			<td>
				Alunno:
			</td>
			<td>
				<select name="cfAlunno">
					<?php
						$qGetAlunno= "SELECT cf, nome, cognome FROM alunno;";
						$qGetAlunno_res= pg_query($conn, $qGetAlunno);
						if ($qGetAlunno_res){
							while ($row= pg_fetch_array($qGetAlunno_res) ){
								echo "<option value='".$row['cf']."'>".$row['nome']." ".$row['cognome']."</option>";
							}
						}
						else{
							echo "<option>c'e' un problema con la query</option>";
						}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				Materia:
			</td>
			<td>
				<select name="idMateria">
					<?php
						$qMateria= "SELECT * FROM materia;";
						$qMateria_res= pg_query($conn, $qMateria);
						if ($qMateria_res){
							while ($row= pg_fetch_array($qMateria_res) ){
								echo "<option value='".$row['id']."'>".$row['nome']."</option>";
							}
						}
						else{
							echo "<option>c'e' un problema con la query</option>";
						}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				Voto:
			</td>
			<td>
				<select name="voto">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				In che giorno:
			</td>
			<td>
				<input type="date" name="dataProva">
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="aggiungi" value="aggiungi">
			</td>
		</tr>
	</table>
</form>

<br>
<h4>Modifica un voto:</h4>
<form action="aggVotoDB.php" method="GET">
	<table>
		<tr>
			<td>
				Alunno:
			</td>
			<td>
				<select name="cfAlunno">
					<?php
						$qGetAlunno= "SELECT cf, nome, cognome FROM alunno;";
						$qGetAlunno_res= pg_query($conn, $qGetAlunno);
						if ($qGetAlunno_res){
							while ($row= pg_fetch_array($qGetAlunno_res) ){
								echo "<option value='".$row['cf']."'>".$row['nome']." ".$row['cognome']."</option>";
							}
						}
						else{
							echo "<option>c'e' un problema con la query</option>";
						}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				Materia:
			</td>
			<td>
				<select name="idMateria">
					<?php
						$qMateria= "SELECT * FROM materia;";
						$qMateria_res= pg_query($conn, $qMateria);
						if ($qMateria_res){
							while ($row= pg_fetch_array($qMateria_res) ){
								echo "<option value='".$row['id']."'>".$row['nome']."</option>";
							}
						}
						else{
							echo "<option>c'e' un problema con la query</option>";
						}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				Quando e' avvenuta la prova:
			</td>
			<td>
				<select name="dataProva">
					<?php
						$qVoti= "SELECT DISTINCT data FROM voto ORDER BY data DESC;";
						$qVoti_res= pg_query($conn, $qVoti);
						if ($qVoti_res){
							while ($row= pg_fetch_array($qVoti_res) ){
								echo "<option value='".$row[0]."'>".$row[0]."</option>";
							}
						}
						else{
							echo "<option>c'e' un problema con la query</option>";
						}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				Nuovo voto:
			</td>
			<td>
				<select name="voto">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
				</select>
		</td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="modifica" value="modifica">
			</td>
		</tr>
	</table>
</form>

<?php
	make_footer();
?>
</body>
</html>