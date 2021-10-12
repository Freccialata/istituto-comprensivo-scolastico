<!DOCTYPE html>
<html>
<?php 
	require 'connessioneDB.php';
	require 'utility.php'
	?>
<head>
	<title>aggDatabase</title>
</head>
<body>
	<?php
		
		/*variabili scuola*/
		$nomeScuola=$_GET['nomeScuola'];
		$indirizzoScuola=$_GET['indirizzoScuola'];
		$telefonoScuola=$_GET['telefonoScuola'];
		$tipoScuola=$_GET['tipoScuola'];
		$annoRistr=$_GET['annoRistr'];
		$tipoRistr=$_GET['tipoRistr'];
		$annoFondazione=$_GET['annoFondazione'];
		$dirigente= $_GET['cfDirigente'];


		function genera_codice($anno, $tipo){
			$anRistr= substr($anno, 3, 1).substr($anno, 9, 1); 
			if ($tipo=='Manutenzione Ordinaria'){
				$codice= $anRistr.'O';
			}
			if ($tipo=='Ristrutturazione Urbanistica'){
				$codice= $anRistr.'U';
			}
			if ($tipo=='Manutenzione Straordinaria'){
				$codice= $anRistr.'S';
			}
			return $codice;
		}

		$insert_scuole = "Qualcosa";
		if ($tipoScuola=='Infanzia'){
			$codice= genera_codice($annoRistr, $tipoRistr);

			$insert_scuole= "
				INSERT INTO UltimaRistrutturazione VALUES('$codice', '$annoRistr', '$tipoRistr');
				INSERT INTO Scuola(telefono, indirizzo, nome, tipo, dirigente, ultimaRistrutturazione)
					VALUES ('$telefonoScuola', '$indirizzoScuola', '$nomeScuola', '$tipoScuola','$dirigente' , '$codice')";

		}
		if ($tipoScuola=='Secondaria'){
			$insert_scuole= "INSERT INTO Scuola(telefono, indirizzo, nome, tipo, annoFond, dirigente)
				VALUES ('$telefonoScuola', '$indirizzoScuola', '$nomeScuola', '$tipoScuola', '$annoFondazione', '$dirigente')";
		}
		if ($tipoScuola=='Primaria'){
			$insert_scuole= "
				INSERT INTO Scuola(telefono, indirizzo, nome, tipo, dirigente) VALUES ('$telefonoScuola', '$indirizzoScuola', '$nomeScuola', '$tipoScuola', '$dirigente')
				";
		}

		$insert_scuole_res=pg_query($conn, $insert_scuole);		

		if ($insert_scuole_res){
			echo "<p>'Andato a buon fine'</p>
				<a href='home.php'>Torna alla home</a>
			";
		}
		else {
			echo "<p>'Query non riuscita'</p>";
			echo "<a href='home.php'>Torna alla Home</a>";
		}
	?>


</body>
</html>