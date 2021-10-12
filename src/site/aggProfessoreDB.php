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
	$cfInsegnante=$_GET['cfInsegnante'];	
	$nomeInsegnante=$_GET['nomeInsegnante'];
	$cognomeInsegnante=$_GET['cognomeInsegnante'];

	$titoloStudio=isset($_GET['titoloStudio'])?$_GET['titoloStudio']:[];

	$abilitazioneMateria=isset($_GET['abilitazioneMateria'])?$_GET['abilitazioneMateria']:[];

	$diRuolo = isset($_GET['diRuolo']) ? $_GET['diRuolo'] : 'false';




	$insert_insegnante=" INSERT INTO Insegnante VALUES('$cfInsegnante', '$nomeInsegnante', '$cognomeInsegnante', '$diRuolo')";

	$insert_insegnante_res=pg_query($conn, $insert_insegnante);

	if ($insert_insegnante_res){
		echo 'Nuovo dipendente inserito!
			<a href="home.php">Torna alla home</a>
		';
	}
	else
		echo 'Qualcosa è andato storto;'
	
	$titoloStudio=implode("", $titoloStudio);

	for ($i=0; $i<strlen($titoloStudio); $i++){
		$titolo=substr($titoloStudio, $i, 1);
		$insert_possessoTitolo="INSERT INTO possessoTitolo VALUES('$cfInsegnante', '$titolo')";
		$insert_possessoTitolo_res=pg_query($conn, $insert_possessoTitolo);
	}

	$abilitazioneMateria=implode("", $abilitazioneMateria);

	for ($i=0; $i<strlen($abilitazioneMateria); $i++){
		$materia=substr($abilitazioneMateria, $i, 1);
		$insert_abilitazioneMateria="INSERT INTO abilitazione VALUES('$cfInsegnante', '$materia')";
		$insert_abilitazioneMateria=pg_query($conn, $insert_abilitazioneMateria);
	}
	

?>


</body>
</html>