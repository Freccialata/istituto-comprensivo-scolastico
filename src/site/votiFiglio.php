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

		session_start();
		if (!isset($_SESSION["utente"]))
		{
		echo "Non sei autorizzato ad accedere a questa pagina";
 		exit;
		}

		$username  = $_SESSION["utente"];
		$password = $_SESSION["password"];


		$figlio=$_GET['qualeFiglio'];

		$nomeFiglio="SELECT nome FROM Alunno where cf='".$figlio."'";
		$nomeFiglio_res=pg_query($conn, $nomeFiglio);
		$nomeFigliolo=pg_fetch_array($nomeFiglio_res)[0];
		echo "<h3>I voti di ".$nomeFigliolo." sono: </h3>";





		$votiFiglio= "SELECT voto, data, materia.nome, livello, sezione FROM voto join materia on idmateria=id join alunno on alunno.cf=cfAlunno join ClasseAnnuale on alunno.classe=classeAnnuale.idClasse join Classe on ClasseAnnuale.classe=classe.id where cfAlunno='".$figlio."'";
		$votiFiglio_res=pg_query($conn, $votiFiglio);

		while($row=pg_fetch_array($votiFiglio_res)){
			echo "Voto: ".$row[0]."<br>";
			echo "Data: ".$row[1]."<br>";
			echo "Materia: ".$row[2]."<br>";
			echo "Classe: ".$row[3]."^".$row[4]."<br><br>";
		}


			?>

	


	<?php
		make_footer();
	?>
</body>
</html>