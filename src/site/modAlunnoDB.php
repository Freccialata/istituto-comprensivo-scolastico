<?php
	require 'connessioneDB.php';

	/*Riempio check boxes*/
	$daMod= array('modResid'=>'false', 'modIndir'=>'false', 'modLvlSez'=>'false', 'modClasInf'=>'false',
		'modScuola'=>'false', 'modPreScuola'=>'false', 'modPostScuola'=>'false');
		
	foreach($daMod as $x => $valore){
		$daMod[$x]= isset($_GET[$x])? $_GET[$x] : 'false';
	}
	
	//Variabili da riempire in caso dovessero essere cambiate
	$codFiscale= $_GET['cfAlunno'];
	$zonaResidenza; $indirizzo; $classeAnn; $tipoScuola; $preSc; $postSc;
	if ($daMod['modResid']=='true'){
		$zonaResidenza= $_GET['zonaResidenza'];
	}
	if ($daMod['modIndir']=='true'){
		$indirizzo= $_GET['indirizzo'];
	}
	if ($daMod['modLvlSez']=='true'){
		$classeAnn= $_GET['LivelloSezione'];
	}
	if ($daMod['modClasInf']=='true'){
		$classeAnn= $_GET['nomeClasse'];
	}
	if ($daMod['modScuola']=='true'){
		$tipoScuola= $_GET['Scuola'];
	}
	else{ //Se la scuola non viene modificata cerco il tipo della scuola frequentata a partire dal cf dell'alunno
		$tipoScuola= pg_fetch_array(pg_query($conn, "
			SELECT tipo FROM Scuola WHERE telefono IN (
			SELECT telscuola FROM classeannuale WHERE idclasse IN (
				SELECT classe FROM alunno WHERE cf='".$codFiscale."'
			));
		"))[0];
	}
	if ($daMod['modPreScuola']=='true'){
		$preSc= isset($_GET['preScuola'])? $_GET['preScuola'] : 'false';
	}
	if ($daMod['modPostScuola']=='true'){
		$postSc= isset($_GET['postScuola'])? $_GET['postScuola'] : 'false';
	}
	
	/*Crea una query sulla base di cosa bisogna modificare*/
	$qBase= "UPDATE Alunno SET ";
	$whereBase= " WHERE cf='".$codFiscale."'; ";
	$qModifica="";
	if ($daMod['modResid']=='true'){
		$qModifica= $qModifica.$qBase."zonaresidenza='".$zonaResidenza."'".$whereBase;
	}
	if ($daMod['modIndir']=='true'){
		$qModifica= $qModifica.$qBase."indirizzo='".$indirizzo."'".$whereBase;
	}
	if ($daMod['modLvlSez']=='true' && $tipoScuola!='Infanzia'){
		$qModifica= $qModifica.$qBase."classe='".$classeAnn."'".$whereBase;
	}
	if ($daMod['modClasInf']=='true' && $tipoScuola=='Infanzia') {
		$qModifica= $qModifica.$qBase."classe='".$classeAnn."'".$whereBase;
	}
	//Scuola gia' modificata da classe annuale
	if ($daMod['modPreScuola']=='true'&& $tipoScuola=='Infanzia'){
		$qModifica= $qModifica.$qBase."prescuola='".$preSc."'".$whereBase;
	}
	if ($daMod['modPostScuola']=='true' && $tipoScuola=='Infanzia'){
		$qModifica= $qModifica.$qBase."postscuola='".$postSc."'".$whereBase;
	}
	
	$qModifica_res= pg_query($conn, $qModifica);
	if ($qModifica_res){
		echo "<h3>Modifica Avvenuta con Successo!</h3>
			<a href='home.php'><h3>Torna alla home</h3></a>";
	}
	else{
		echo "<h3>Qualcosa nella query di aggiunta e' andato storto</h3>";
	}
?>