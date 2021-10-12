<!DOCTYPE html>
<html>
<head>
	<title>Agg Mod Voto</title>
</head>
<body>
	<?php
	require 'connessioneDB.php';
	require 'utility.php';

	make_header();

	$cfAlunno= $_GET['cfAlunno'];
	$idMateria= $_GET['idMateria'];
	$voto= $_GET['voto'];
	$dataProva= $_GET['dataProva'];

	if ( substr($idMateria, 1, 1)==" " ){
		$idMateria= substr($idMateria, 0, 1);
	}
	else{
		$idMateria= substr($idMateria, 0, 2);
	}

	$daModificare= 0;
	if (isset($_GET['modifica'])){ //bottone submit è stato premuto? Se si allora bisogna modificare il voto
		$daModificare= $_GET['modifica']=='modifica'; //boolean true=1 false=0
	}

	$qVoto;
	if($daModificare==0){
		$qVoto= "INSERT INTO Voto VALUES('$dataProva', '$voto', '$cfAlunno', '$idMateria'); ";
	}
	else{
		$qVoto= "UPDATE Voto SET voto=".$voto." WHERE data='".$dataProva."' AND cfAlunno='".$cfAlunno."' AND idMateria='".$idMateria."'; ";
	}

	$qVoto_res= pg_query($conn, $qVoto);
	if ($qVoto_res){
		echo "<h3>Query di aggiunta o modifica avvenuta con successo</h3>";
	}
	else{
		echo "<h3>Query fallita nooo</h3>";
	}

	make_footer();
?>
</body>
</html>