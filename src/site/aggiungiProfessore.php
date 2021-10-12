<!DOCTYPE html>
<html>
<?php 
	require 'connessioneDB.php';
	require 'utility.php'
	?>
<head>
	<title>Homepage</title>
</head>
<body>
<?php
make_header();
?>

<form action="aggProfessoreDB.php" method="GET">
	<table>
		<tr>
				<td>
					Codice Fiscale
				</td>
				<td>
					<input type="text" name="cfInsegnante">
				</td>
			</tr>
			<tr>
				<td>
					Nome
				</td>
				<td>
					<input type="text" name="nomeInsegnante">
				</td>
			</tr>
			<tr>
				<td>
					Cognome
				</td>
				<td>
					<input type="text" name="cognomeInsegnante">
				</td>
			</tr>
			<tr>
  				<td>Titolo di studio:</td>
  				<br>
  				 <td><input type="checkbox" name="titoloStudio[]" value="1"> Laurea Triennale</input>
  				<br> 
  				<input type="checkbox" name="titoloStudio[]" value="2"> Laurea Magistrale</input>
 				 <br>
   				<input type="checkbox" name="titoloStudio[]" value="3"> Laurea Specialistica
  				<br>
  				<input type="checkbox" name="titoloStudio[]" value="4"> Scienze Educazione
  				<br>
  				<input type="checkbox" name="titoloStudio[]" value="5"> Scienze Pedagogiche
			</tr>
				
			<tr>
  				<td>Abilitato/a a:</td>
  				<br>
  				 <td><input type="checkbox" name="abilitazioneMateria[]" value="1"> Italiano</input>
  				<br> 
  				<input type="checkbox" name="abilitazioneMateria[]" value="2"> Inglese</input>
 				 <br>
   				<input type="checkbox" name="abilitazioneMateria[]" value="3"> Storia
  				<br>
  				<input type="checkbox" name="abilitazioneMateria[]" value="4"> Geografia
  				<br>
  				<input type="checkbox" name="abilitazioneMateria[]" value="5"> Matematica
  				<br>
  				<input type="checkbox" name="abilitazioneMateria[]" value="6"> Scienze
  				<br>
  				<input type="checkbox" name="abilitazioneMateria[]" value="7"> Musica
  				<br>
  				<input type="checkbox" name="abilitazioneMateria[]" value="8"> Arte e immagine
  				<br>
  				<input type="checkbox" name="abilitazioneMateria[]" value="9"> Educazione fisica
  				
  				<br>

			</tr>

			<tr>
				<td>
					Di ruolo?
				</td>
				<td>
					<input type="checkbox" name="diRuolo" value="true">
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="aggProfessore">
				</td>
			</tr>


	</table>

<?php
make_footer();
?>
</body>
</html>