<!DOCTYPE html>
<html>
<head>
	<?php require 'connessioneDB.php'; require 'utility.php'?>
	<title>Homepage</title>
</head>
<body>


<?php
	session_start();//Per togliere le variabili del login genitore
	session_destroy();
	session_unset();
	
	make_header();

	$qScuole="SELECT telefono, nome, tipo FROM Scuola "; //query per mostrare tutte le scuole
	$qScuole_res=pg_query($conn, $qScuole);
	
	/*elenco delle scuole e un selettore radio per passare il numTel della scuola alunno pagina che mostra altri dettagli*/
	echo '<form action="visualizzaPersonale.php" method="GET">
		<table>';
	while($row = pg_fetch_assoc($qScuole_res)) {
		echo '<tr>
			<td>'.$row["nome"].', tipo: '.$row["tipo"].'</td>
			<td><input type="radio" name="scuolaHome" value="'.$row["telefono"].'"></td>
			</tr>'; 
	}
	echo '<tr><td><input type="submit" value="Mostra dettagli scuola selezionata"></td></tr>
		</table></form>'; //fine elenco delle scuole
?>
<br/>
<table>
	<tr>
		<td>
			<a href="aggiungiScuola.php">
				<button>Aggiungi scuola</button>
			</a>
		</td>
		<td>
			<a href="aggiungiAlunnoGenitore.php">
				<button>Aggiungi alunno</button>
			</a>
		</td>
		<td>
			<a href="aggiungiAta.php">
				<button>Aggiungi personale</button>
			</a>
		</td>
		<td>
			<a href="aggiungiProfessore.php">
				<button>Aggiungi insegnante</button>
			</a>
		</td>
	</tr>
	<tr>
		<td>
			<a href="modificaAlunno.php">
				<button>Modifica alunno</button>
			</a>
		</td>
		<td></td><td></td><!--Lascio spazio tra le celle--->
		<td>
			<a href="AggiungiOmodificaVoto.php">
				<button>Voto: aggiungi o modifica</button>
			</a>
		</td>
</table>

<br/><h4>Accedi come Genitore:</h4>
<form action="loginGenitore.php", method="POST">
	<table>
		<tr>
			<td>Username</td>
			<td>
				<input type="text" name="username"/>
			</td>						
		</tr>
		<tr>
			<td>Password</td>
			<td>
				<input type="password" name="pwd"/>
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="loginGenitore">
			</td>
		</tr>
	</table>
</form>

<?php
	make_footer();
?>
</body>
 </html>