<!DOCTYPE html>
<html>
<?php 
	require 'connessioneDB.php';
	require 'utility.php';
	?>
<head>
	<title>aggGenitore</title>
</head>
<body>
	<?php
		make_header();
	?>

	<h4>Dati Genitore:</h4>
	<form action="aggGenitoreDB.php" method="GET" name="aggGenitore">
		<table>
			<tr>
				<td>
					Nome Genitore
				</td>
				<td>
					<input type="text" name="nomeGenitore">
				</td>
			</tr>
			<tr>
				<td>
					Cognome Genitore
				</td>
				<td>
					<input type="text" name="cognomeGenitore">
				</td>
			</tr>
			<tr>
				<td>
					Codice Fiscale Genitore
				</td>
				<td>
					<input type="text" name="cfGenitore">
				</td>
			</tr>
			<tr>
				<td>
					Professione
				</td>
				<td>
					<input type="text" name="professioneGenitore">
				</td>
			</tr>
			<tr>
				<td>
					Username
				</td>
				<td>
					<input type="text" name="username">
				</td>
			</tr>
			<tr>
				<td>
					Password
				</td>
				<td>
					<input type="password" name="psw">
				</td>
			</tr>
			<tr>
				<td>
					Codice Fiscale Figlio
				</td>
				<td>
					<input type="text" name="cfFiglio">
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="aggGenitoreDB">
				</td>
			</tr>
		</table>
	</form>

	<?php
		make_footer();
	?>
</body>
</html>