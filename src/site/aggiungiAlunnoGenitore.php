
<!DOCTYPE html>
<html>
<?php 
// DA VEDERE COME FARE QUALORA VOLESSI AGGIUNGERE ANCHE IL 2^ GENITORE
	require 'connessioneDB.php';
	require 'utility.php'
	?>
<head>
	<title>AggAlunno</title>
</head>
<body>
	<?php
		make_header();
	?>

	<h4>Dati Alunno:</h4>
	<form action="aggAlunnoDB.php" method="GET" name="aggAlunno">
		<table>
			<tr>
				<td>
					Nome
				</td>
				<td>
					<input type="text" name="nomeAlunno">
				</td>
			</tr>
			<tr>
				<td>
					Cognome
				</td>
				<td>
					<input type="text" name="cognomeAlunno">
				</td>
			</tr>
			<tr>
				<td>
					Codice Fiscale
				</td>
				<td>
					<input type="text" name="cfAlunno">
				</td>
			</tr>
			<tr>
				<td>
					Data di Nascita
				</td>
				<td>
					<input type="date" name="dataNascitaAlunno">
				</td>
			</tr>
			<tr>
				<td>
					Zona di residenza
				</td>
				<td>
					<input type="text" name="zonaResidenzaAlunno">
				</td>
			</tr>
			<tr>
				<td>
					Indirizzo
				</td>
				<td>
					<input type="text" name="indirizzoAlunno">
				</td>
			</tr>
			<tr>
				<td>
					Scuola
				</td>
				<td>
					<select name="scuole">
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
			</tr> <!--/Seleziona in che scuola vuoi iscriverti--->
			<tr>
				<td>
					Livello e sezione (per Primaria e Secondaria)
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
					Nome (per infanzia)
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
					PreScuola
				</td>
				<td>
					<input type="checkbox" name="preScuola" value="true">
				</td>
			</tr>
			<tr>
				<td>
					PostScuola
				</td>
				<td>
					<input type="checkbox" name="postScuola" value="true">
				</td>
			</tr>
		</table>
		<h4>Dati Genitore:</h4>
		<table>
			<tr>
				<td>
					Nome Genitore
				</td>
				<td>
					<input type="text" name="nomeGenitore">
				</td>
			</tr>
			<tr>
				<td>
					Cognome Genitore
				</td>
				<td>
					<input type="text" name="cognomeGenitore">
				</td>
			</tr>
			<tr>
				<td>
					Codice Fiscale Genitore
				</td>
				<td>
					<input type="text" name="cfGenitore">
				</td>
			</tr>
			<tr>
				<td>
					Professione
				</td>
				<td>
					<input type="text" name="professioneGenitore">
				</td>
			</tr>
			<tr>
				<td>
					Username
				</td>
				<td>
					<input type="text" name="username">
				</td>
			</tr>
			<tr>
				<td>
					Password
				</td>
				<td>
					<input type="password" name="psw">
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="aggAlunnoGenitore">
				</td>
			</tr>
		</table>
	</form>
	<a href="aggiungiGenitore.php"><button>Aggiungi un altro genitore</button></a>

	<?php
		make_footer();
	?>
</body>