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
	 	$username= $_POST["username"];
  	 	$password = $_POST["pwd"];
	}
	else
	{
  		$username=$_SESSION["utente"];
  		$password=$_SESSION["password"];
	}

	$q_verificoLogin=" SELECT * FROM Genitore WHERE username='".$username."' AND password= '".$password."'";
	$q_verificoLogin_res=pg_query($conn, $q_verificoLogin);



	if (pg_fetch_array($q_verificoLogin_res))
	{  // se ho ottenuto almeno un risultato, vuol dire che il cliente è
   	// stato riconosciuto
  	$_SESSION["utente"]= $username;
   	$_SESSION["password"]= $password;
   	echo "<p>Benvenuto $username .</p>";


   	$quantiFigli="SELECT COUNT (*) from Parentela WHERE cfGenitore IN(select CF from genitore where username='".$username."') ";
   	$quantiFigli_res=pg_query($conn, $quantiFigli);
   	$resultFigli=pg_fetch_array($quantiFigli_res);

   	$figlio="SELECT nome, alunno.cf from parentela join alunno on cfAlunno=cf where cfGenitore IN (select CF from genitore where username='".$username."')";
   			$figlio_res=pg_query($conn, $figlio);

   		if($resultFigli[0]=='1'){
   			$fglrow=pg_fetch_array($figlio_res);
   			echo "I voti di ".$fglrow[0]." : <br>";

   			$voti="SELECT voto, data, materia.nome, livello, sezione FROM voto join materia on idmateria=id join alunno on alunno.cf=cfAlunno join ClasseAnnuale on alunno.classe=classeAnnuale.idClasse join Classe on ClasseAnnuale.classe=classe.id where cfAlunno='".$fglrow[1]."'";
			$voti_res=pg_query($conn, $voti);
			while($row=pg_fetch_array($voti_res)){
				echo "Voto: ".$row[0]."<br>";
				echo "Data: ".$row[1]."<br>";
				echo "Materia: ".$row[2]."<br>";
				echo "Classe: ".$row[3]."^".$row[4]."<br><br>";
			
			}


  		}

   	if($resultFigli[0]<>'1'){
   			echo "<h3> Selezioni il nome del figlio del quale vuole visualizzare i voti: </h3>";
   			echo "<form action='votiFiglio.php' method=GET>";
			echo "<select name='qualeFiglio'>";
				
			if ($figlio_res){
				while($row= pg_fetch_array($figlio_res)) {
					echo "<option value='".$row[1]."'>".$row['nome']."</option>";
				}
			}
			else{
				echo "<h3>Ops, qualcosa è andato storto!</h3>";
			}
			echo "</select>";
			echo "<input type=submit>";
			echo "</form>";
				
   		}
  	}
   	else 
   	{   // l'utente non e' riconosciuto
    unset($_SESSION["utente"]);
    unset($_SESSION["password"]);
   //	header("Location: login.php");

    echo "<p> Potrebbe avere sbagliato username o password, riprovi.</p>";
    echo '<a href="home.php"><button>Torna alla home </button></a>';
   		}

	?>

	<?php
		make_footer();
	?>
</body>
</html>