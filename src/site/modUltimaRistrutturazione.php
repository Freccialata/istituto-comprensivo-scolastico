<!DOCTYPE html>
<html>
<?php 
	require 'connessioneDB.php'; //E' una ripetizione se questa stessa linea di codice compare in utility.php
	require 'utility.php';
	?>
<head>
	<title>Homepage</title>
</head>
<body>
	<?php
		make_header();

		$scuola=$_GET['scuola'];
		$anno=$_GET['annoRistr'];
		$tipo=$_GET['tipoRistr'];

		$trovaCodice= "SELECT ultimaristrutturazione FROM Scuola WHERE telefono='".$scuola."'";
		$trovaCodice_res= pg_query($conn, $trovaCodice);
		if($trovaCodice_res){
			echo "<p>Query codice andata a buon fine</p>";
		}

		$codice= pg_fetch_array($trovaCodice_res)[0];

		echo $trovaCodice."<br>";
		echo $anno.$tipo.$scuola.$codice;
		$modUltimaRistrutturazione= " UPDATE UltimaRistrutturazione SET anno='".$anno."' , tipologia='".$tipo."' WHERE codice='".$codice."'";
		$modUltimaRistrutturazione_res=pg_query($conn, $modUltimaRistrutturazione);

		if ($modUltimaRistrutturazione_res)
			echo "<h3>siii</h3>";







		
		make_footer();
	?>

