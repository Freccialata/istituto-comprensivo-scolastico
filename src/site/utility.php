<!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="GlobalFormat.css">
</head>
<?php

function make_header(){
	/*Togliere il margine con CSS*/
	echo '
		<header>
			<table id="tabInTesta">
				<tr>
					<td>
						<a href="home.php">
							<img id="homeButton" src="book.svg">
						</a>
					</td>
					<td>
						<h2>Istituto Comprensivo Statale</h2>
						<h1>Giuseppe Ungaretti</h1>
					</td>
				</tr>
			</table>
		</header>
	';
}

function make_footer(){
	echo ' 
		<footer>
			<h6>Qualcosa :::: Questo è un footer</h6>
		</footer>

	';
}
?>

</html>