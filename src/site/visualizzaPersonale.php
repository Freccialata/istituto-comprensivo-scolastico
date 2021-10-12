<!DOCTYPE html>
<html>
<?php 
	require 'connessioneDB.php';
	require 'utility.php';
	?>
<head>
	<title>Visualizza personale</title>
</head>
<body>
	<?php
		make_header();

	//visualizza personale in organico in base a scuola e anno scolastico.
	if (isset($_GET['scuolaHome'])){
	$telScuola=$_GET['scuolaHome'];
	$infoScuola="SELECT * FROM SCUOLA WHERE telefono='".$telScuola."'";
	$infoScuola_res=pg_query($conn, $infoScuola);
	$scuola=pg_fetch_array($infoScuola_res);

	if ($scuola[3]=='Primaria'){
		echo "<h2>".$scuola[2]."</h2>";
		echo "Telefono: ".$scuola[0]."<br>";
		echo "Indirizzo: ".$scuola[1]."<br>";
		echo "Tipo: ".$scuola[3]."<br>";


	}

	if ($scuola[3]=='Infanzia'){
		$ultimaRistrutturazione="SELECT anno, tipologia from UltimaRistrutturazione JOIN Scuola on codice=ultimaristrutturazione WHERE telefono='".$telScuola."'";
		$ultimaRistrutturazione_res=pg_query($conn, $ultimaRistrutturazione);
		$Ristrutturazione=pg_fetch_array($ultimaRistrutturazione_res);

		echo "<h2>".$scuola[2]."</h2>";
		echo "Telefono: ".$scuola[0]."<br>";
		echo "Indirizzo: ".$scuola[1]."<br>";
		echo "Tipo: ".$scuola[3]."<br>";
		echo "Ultima Ristrutturazione: ".$Ristrutturazione[0].", Tipo: ".$Ristrutturazione[1];

		echo "<h4>Vuoi aggiungere una ristrutturazione?</h4>
		<form action='modUltimaRistrutturazione.php' method='GET'>
		<table>
			<tr>
				<td>Anno</td>
				<td>Tipo ristrutturazione</td>
			</tr>
			<tr>
				<td>
					<input type='date' name='annoRistr'>
				</td>
				<td>
					<select name='tipoRistr'>
							<option value='Manutenzione Ordinaria'>Manutenzione Ordinaria</option>
							<option value='Ristrutturazione Urbanistica'>Ristrutturazione Urbanistica</option>
							<option value='Manutenzione Straordinaria'>Manutenzione Straordinaria</option>
					</select>
				<td>
			</tr>
			<tr>
				<td>
					<input type='submit' value='Modifica'>
				</td>
				<td><input type='text' value='$telScuola' name='scuola' style='visibility: hidden;'></td>
			</tr>
		</table></form>";
	}

	if ($scuola[3]=='Secondaria 1 Grado'){
		$annoFondazione="SELECT annoFond from Scuola WHERE telefono='".$telScuola."'";
		$annoFondazione_res=pg_query($conn, $annoFondazione);
		$fondazione=pg_fetch_array($annoFondazione_res);

		echo "<h2>".$scuola[2]."</h2>";
		echo "Telefono: ".$scuola[0]."<br>";
		echo "Indirizzo: ".$scuola[1]."<br>";
		echo "Tipo: ".$scuola[3]."<br>";
		echo "Fondata il: ".$fondazione[0]."<br>";
	}

	/* Modifica e mostra il dirigente della la scuola */
	$trovaDirigente="SELECT personaleAmministrativo.nome, personaleAmministrativo.cognome FROM scuola, personaleAmministrativo
		WHERE telefono='".$telScuola."' AND scuola.dirigente=personaleAmministrativo.cf";
	$trovaDirigente_res=pg_query($conn, $trovaDirigente);
	$dirigente=pg_fetch_array($trovaDirigente_res);
	echo "<h3> Dirigente </h3><p>".$dirigente[0]." ".$dirigente[1]."</p>
		<strong>Modifica il dirigente di questa scuola</strong>
		<form method='GET'>
		<select name='newDirigente'>";
		$qGetDirigente_res= pg_query($conn, "SELECT cf, nome, cognome FROM personaleamministrativo WHERE mansione='Dirigente'");
		while ($row= pg_fetch_array($qGetDirigente_res) ) {
			echo "<option value='".$row['cf']."'>".$row['nome']." ".$row['cognome']."</option>";
		}
	echo "</select><br>
		<input type='submit' name='modDirigente' value='modifica'>
		</from>
	";
	if (isset($_GET['modDirigente'])){
		$qModDirigente= $_GET['newDirigente'];
		pg_query($conn, "UPDATE Scuola SET dirigente='".$qModDirigente."' WHERE telefono='".$telScuola."'; ");
	}

	?>

	<!-- Form per sapere di quale anno scolastico si voglia visualizzare il personale --->
	<h4>Visualizza Personale in organico per l'anno a cui è interessato</h4>
	<form action="" method=GET>
		<select name="AS">
			<option value="2016-09-15/2017-06-09">2016/2017</option>
			<option value="2017-09-15/2018-06-09">2017/2018</option>
			<option value="2018/09/15/2019-06-09">2018/2019</option>
		</select>
		<?php
			echo '<input type="text" value="'.$telScuola.'" name="scuolaHome" style="visibility: hidden;"><br>';
		?>
		<input type="submit" name="submit">
	</form>

	<?php
	/*Query per prendere il personale ATA di un determinato anno scolastico*/
	if(isset($_GET['submit'])){
		$anno=$_GET['AS'];
		$inizio=substr($anno, 0,10);
		$fine=substr($anno, 11,10);
		echo "<p>Anno scolastico selezionato:<br>dal ".$inizio." al ".$fine."</p>";

		/*Stampa il pesrsonale del det. AS e permetti la modifica (rimanda a un altra pagina)*/
		$trovaATA="SELECT PersonaleAmministrativo.nome , PERSONALEAMMINISTRATIVO.COGNOME, PERSONALEAMMINISTRATIVO.MANSIONE, PersonaleAmministrativo.cf FROM SCUOLA JOIN LAVORO ON SCUOLA.TELEFONO=LAVORO.TELSCUOLA JOIN PersonaleAmministrativo on PersonaleAmministrativo.cf=cfPersonaleAmm where telScuola='".$telScuola."' AND (finePeriodo IS NULL or finePeriodo>='".$fine."') and inizioPeriodo<='".$fine."'";
		$trovaATA_res=pg_query($conn, $trovaATA);

		echo '<h3> Elenco Personale </h3>
			<form action="modificaPersonale.php" method="GET">
			<table>';
		while($row = pg_fetch_assoc($trovaATA_res)) {
			echo '<tr>
			<td>'.$row["nome"].' '.$row["cognome"].' '.$row["mansione"].'</td>
			<td><input type="radio" name="personaleAta" value="'.$row["cf"].'"></td>
			</tr>'; 
		}
		echo '<tr><td><input type="submit" value="Modifica"></td></tr>
			</table></form>';
	}
}
	else{
		echo "<h3>Non hai selezionato una scuola, <a href='home.php'>torna indietro</a></h3>";
	}
	
		make_footer();
	?>
</body>
</html>