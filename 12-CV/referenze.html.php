<!DOCTYPE html>
<html>
	<head>
		<title>inserisci le tue intenzioni</title>
		<link type="text/css" rel="stylesheet" href="1.css"/>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	</head>
	<body id="contorno">
	
	
	<form method="post" action="contatti.html.php">
			<input type="submit" value="torna in dietro" id='x'>
		</form><br/>
		<table id="bianco">
		<form method="post" action="campi_obb.html.php">
			<tr><td>nome</td><td>
			<input type="text" name="nome"></td></tr>
			<tr><td>cognome</td><td>
			<input type="text" name="cognome"></td></tr>
			
			<tr><td>città</td><td>
			<input type="text" name="citta"></td></tr>
			<tr><td>indirizzo</td><td>
			<input type="text" name="ind"></td></tr>
			<tr><td>n° telefono</td><td>
			<input type="text" name="tel"></td></tr>
			<tr><td>e-mail</td><td>
			<input type="text" name="mail"></td></tr>
			<tr><td>
			motivazioni perchè mi hai contattato</td><td>
			<textarea name="moti"></textarea></td></tr>
			<tr><td><input type="submit" value="Accedi"></td>
			<td><input type="reset" value="reset"></td>
		</form>
		
		</table>

	</body>
</html>