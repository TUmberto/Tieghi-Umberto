<!DOCTYPE html>
<html>
	<head>
		<title>inserisci testo</title>
		<link type="text/css" rel="stylesheet" href="1.css"/>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	</head>
	<body>
	<div id="bok">
	<?php
		include('conoscenze.html.php');
	?>
	</div>
	<div id="contorno">
	
		<form method="post" action="primapg.html.php">
			<input type="submit" value="torna indietro" id='x'>
			</form>
			
		<form method="get" action="controllo.html.php">
			
			<h3 id="h3">aggiorna le tue conoscenze</h3><br/>
			<div id="h3">Titolo<input type="text" name="titolo"></div>
			<br/>
			<textarea name="sp" id="conoscenze"></textarea>
			<br/>
			
				<input type="submit" value="memorizza" id='submit'>
				<input type="reset" value="reset" id='submit'>
			</form>
		
		</div>
		
		
	
	</body>
</html>