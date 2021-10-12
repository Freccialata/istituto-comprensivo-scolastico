<!DOCTYPE html>
<html>
<?php 
	require 'connessioneDB.php';
	require 'utility.php'
	?>
<head>
	<title>Risultato aggiunta Prof</title>
</head>
<body>

	<?php
		make_header();

	/*Aggiunta personale ATA*/
	$nomeATA= $_GET['nomeATA'];
	$cognomeATA= $_GET['cognomeATA'];
	$cfATA= $_GET['cfATA'];
	$mansATA= $_GET['mansioneAta'];
	$inizioLavoro=$_GET['inizioLavoro'];
	$scuola=$_GET['scuole'];

	$aQuery= "INSERT INTO Personaleamministrativo VALUES ('$cfATA', '$nomeATA', '$cognomeATA', '$mansATA')";
	$aQuery_res= pg_query($conn, $aQuery);
	if ($aQuery_res){
		echo '<h3>Nuovo lavoratore inserito!</h3>
			<a href="home.php">Torna alla home</a>
		';
	}
	else {
		echo "<h3>Qualcosa è andato storto :(</h3>";
	}

	if ($mansATA!='Dirigente'){
	$q_lavoro="INSERT INTO Lavoro(cfPersonaleAmm,telScuola, inizioPeriodo) VALUES ('$cfATA', '$scuola', '$inizioLavoro') ";
	$q_lavoro_res=pg_query($conn, $q_lavoro);
	if ($aQuery_res){
		echo 'Nuovo dipendente inserito in "lavoro"!
		';
	}
	else {
		echo "<h3>Qualcosa è andato storto :(</h3>";
	}
	}
	
		make_footer();
	?>
</body>
</html>