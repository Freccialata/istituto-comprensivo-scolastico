<!DOCTYPE html>
<html>
<?php 
	require 'connessioneDB.php';
	require 'utility.php';
	?>
<head>
	<title>aggAlunnoDB</title>
</head>
<body>
	<?php
		make_header();

		/*Salvataggio Alunno*/
		$cfAl= strtoupper($_GET['cfAlunno']);
		$nmAl= $_GET['nomeAlunno'];
		$cgAl= $_GET['cognomeAlunno'];
		$nascAl= $_GET['dataNascitaAlunno'];
		$residAl= $_GET['zonaResidenzaAlunno'];
		$indAl= $_GET['indirizzoAlunno'];

		$tipoScuola= $_GET['scuole'];

		$clAl; //classe annuale a cui è iscritto l'alunno
		$qAlunno; //query per aggiungere l'alunno
		if ($tipoScuola=='Infanzia'){
			$clAl= $_GET['nomeClasse'];
			$preScuola= isset($_GET['preScuola'])? $_GET['preScuola'] : 'false';
			$postScuola= isset($_GET['postScuola'])? $_GET['postScuola'] : 'false';

			$qAlunno= "INSERT INTO Alunno VALUES('$cfAl', '$nmAl', '$cgAl', '$nascAl', '$residAl', '$indAl', '$preScuola', '$postScuola', '$clAl'); ";
		}
		else{
			$clAl= $_GET['LivelloSezione'];
			echo "<h3>$clAl</h3>";
			$qAlunno= "INSERT INTO Alunno(cf, nome, cognome, datanascita, zonaresidenza, indirizzo, classe)
			VALUES('$cfAl', '$nmAl', '$cgAl', '$nascAl', '$residAl', '$indAl', '$clAl'); ";
		}

		/*Inserimento Genitore*/
		$cfGen= strtoupper($_GET['cfGenitore']);
		$nmGen= $_GET['nomeGenitore'];
		$cgGen= $_GET['cognomeGenitore'];
		$prfGen= $_GET['professioneGenitore'];
		$usrGen= $_GET['username'];
		$pwdGen= $_GET['psw'];

		$qGenitore= "INSERT INTO Genitore VALUES ('$cfGen', '$nmGen', '$cgGen', '$prfGen', '$usrGen', '$pwdGen'); ";

		/*Risultato Queries*/
		$qInsertTOT= $qAlunno.$qGenitore."INSERT INTO Parentela VALUES ('$cfAl', '$cfGen');";

		$qInsertTOT_res= pg_query($conn, $qInsertTOT);
		if ($qInsertTOT_res){

			echo '<h3>Query andata a buon fine ^_^</h3>
				<a href="aggiungiGenitore.php"><button>Aggiungi un altro genitore</button></a> <!--Da concludere--->
				<a href="home.php"><h4>Torna alla home</h4></a>';
		}
		else{
			echo "<h3>Questa query fa schifo :(</h3>";
		}


		make_footer();
	?>
	</body>
</html>