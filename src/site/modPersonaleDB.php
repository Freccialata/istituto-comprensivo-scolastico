<?php
	require 'connessioneDB.php';

	/*Riempio check boxes*/
	$daMod= array('modFineLavoro'=>'false', 'modMansione'=>'false');
		
	foreach($daMod as $x => $valore){
		$daMod[$x]= isset($_GET[$x])? $_GET[$x] : 'false';
	}


	$cf=$_GET['persona'];

	if ($daMod['modFineLavoro']=='true'){
		$fineLavoro= $_GET['fineLavoro'];
		$modFineLavoro=" UPDATE Lavoro SET finePeriodo='".$fineLavoro."' WHERE cfPersonaleAmm='".$cf."'";
		$modFineLavoro_res=pg_query($conn, $modFineLavoro);
	}




	if ($daMod['modMansione']=='true'){
		$mansioneATA= $_GET['mansioneAta'];
		$modMansione="UPDATE PersonaleAmministrativo SET mansione='".$mansioneATA."'WHERE cf='".$cf."'";
		$modMansione_res=pg_query($conn, $modMansione);
	}




?>