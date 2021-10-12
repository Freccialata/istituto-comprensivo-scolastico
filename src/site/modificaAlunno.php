<!DOCTYPE html>
<html>
<?php require 'connessioneDB.php';
require 'utility.php'?>
<head>
	<title>Homepage</title>
</head>
<body>

<?php 
	make_header();
?>
<form action="modAlunnoDB.php" method="GET">
	<table>
		<tr>
			<td></td><td></td>
			<td>
				<strong>Spunta se e' da modificare</strong>
			</td>
		</tr>
		<tr>
			<td>
				Inserisci il <strong>codice fiscale</strong> dell'alunno
			</td>
			<td></td>
			<td>
				<input type="text" name="cfAlunno" required>
			</td>
		</tr>
		<tr>
			<td>
				Modifica zona di residenza e indirizzo
			</td>
			<td>
				<input type="checkbox" name="modResid" value="true">
			</td>
			<td>
				<input type="text" name="zonaResidenza" placeholder="zona di residenza">
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="checkbox" name="modIndir" value="true">
			</td>
			<td>
				<input type="text" name="indirizzo" placeholder="indirizzo">
			</td>
		</tr>
		<tr>
			<th>
				Modifica:
			</th>
		</tr>
		<tr>
			<td>
				Livello e Sezione
			</td>
			<td>
				<input type="checkbox" name="modLvlSez" value="true">
			</td>
			<td>
				<select name="LivelloSezione">
					<?php 
							$qLivelloSezione= "SELECT idClasse, livello, sezione, tipo
								FROM classe JOIN classeannuale ON id=classe
								WHERE tipo<>'infanzia'";
							$qLvlSz_res= pg_query($conn, $qLivelloSezione);
							if ($qLvlSz_res){
								while ($row= pg_fetch_array($qLvlSz_res)) {
									echo '<option value="'.$row['idclasse'].'">'.$row['tipo'].': '.$row['livello'].' '.$row['sezione'].'</option>';
								}
							}
							else{
								echo "<h3>query livello sezione non è andata a buon fine</h3>";
							}
						?>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				o il nome della Classe infanzia
			</td>
			<td>
				<input type="checkbox" name="modClasInf" value="true">
			</td>
			<td>
				<select name="nomeClasse">
					<?php 
							$iQuery= "SELECT idClasse, nome
								FROM Classe JOIN classeannuale ON id=classe
								WHERE tipo='infanzia'";
							$iQuery_res= pg_query($conn, $iQuery);
							if ($iQuery){
								while($row= pg_fetch_array($iQuery_res)){
									echo '<option value="'.$row['idclasse'].'">'.$row['nome'].'</option>';
								}
							}
							else {echo "<h3>FALLIMENTO</h3>";}
						?>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				o la Scuola
			</td>
			<td>
				<input type="checkbox" name="modScuola" value="true">
			</td>
			<td>
				<select name="Scuola">
				<?php 
						$qScuole= "SELECT DISTINCT telefono, nome, tipo FROM classeannuale, scuola WHERE telscuola=telefono";
						$qScuole_res= pg_query($conn, $qScuole);
						if ($qScuole_res){
							while ($row = pg_fetch_array($qScuole_res)) {
								echo '<option value="'.$row['tipo'].'">'.$row['nome'].", Tipo: ".$row['tipo'].'</option>';
							}
						}
						else{
							echo "<h3>Errore query per l'elenco scuole</h3>";
						}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<th>
				Solo se iscritto ad una scuola di infanzia:
			</th>
		</tr>
		<tr>
			<td>
				Aggiungi o togli preScuola
			</td>
			<td>
				<input type="checkbox" name="modPreScuola" value="true">
			</td>
			<td>
				<input type="checkbox" name="preScuola" value="true">Spunta per il pre-scuola
			</td>
		</tr>
		<tr>
			<td>
				Aggiungi o togli postScuola
			</td>
			<td>
				<input type="checkbox" name="modPostScuola" value="true">
			</td>
			<td>
				<input type="checkbox" name="postScuola" value="true">Spunta per il post-scuola
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit">
			</td>
		</tr>
	</table>
</form>

</body>
</html>