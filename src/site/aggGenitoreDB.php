<?php
	require 'connessioneDB.php';	

	$cfAlunno= $_GET['cfFiglio'];

	$qNgenitori= "SELECT count(*) AS numgenitori FROM parentela WHERE cfAlunno='".$cfAlunno."'; ";
	$qNgenitori_res= pg_query($conn, $qNgenitori);
	
	$numGen;
	if ($qNgenitori){
		$numGen= pg_fetch_array($qNgenitori_res)[0];
	}
	else{
		$numGen=0;
	}

	if ($numGen==0){
		echo "<h3>Codice fiscale Errato, non esiste alcun figlio, oppure la Query iniziale non ha funzionato.</h3>";
	}
	else if ($numGen<2){
		$cfGen= $_GET['cfGenitore'];
		$nmGen= $_GET['nomeGenitore'];
		$cgGen= $_GET['cognomeGenitore'];
		$prfGen= $_GET['professioneGenitore'];
		$usrGen= $_GET['username'];
		$pwdGen= $_GET['psw'];

		$qGenitore_parentela= "INSERT INTO Genitore VALUES ('$cfGen', '$nmGen', '$cgGen', '$prfGen', '$usrGen', '$pwdGen'); 
			INSERT INTO Parentela VALUES ('$cfAlunno', '$cfGen'); ";
		$qGen_parent_res= pg_query($conn, $qGenitore_parentela);
		if($qGen_parent_res){
			echo "<h3>Hai inserito un altro genitore con successo!!!</h3>";
		}
		else{
			echo "<h3>Query fallita :(((((</h3>";
		}
	}
	else if ($numGen>=2){
			echo "<h3>L'alunno ha già due genitori registrati</h3>";
		}
?>