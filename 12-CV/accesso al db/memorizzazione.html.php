<!DOCTYPE html>
<html>
<head>
	
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<link type="text/css" rel="stylesheet" href="1.css"/>
</head>
<body>
	<?php

		try{
			$cx='mysql:host=localhost;dbname=my_tieghiumberto';
			$pdo=new PDO($cx,'tieghiumberto','begtekokme31');
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$pdo->exec('SET NAMES "utf8"');
	//exec metodo usato per inviare query al db
	
			
		}
	catch(PDOException $e)
	{
		$output="errore di connessione al db";
		include('output.html.php');
		exit;
	}
	try{
		$sql = "INSERT INTO `cv`.contatti (`ID`, e_mail, nome, cognome, citta, indirizzo, n_telefono, motivo_del_contatto) VALUES (NULL, \"$m\", \"$n\", \"$cg\", \"$ct\", \"$ind\", \"$n_t\",\"$motivo_del_contatto\");";
		$pdo->exec($sql);
		echo"<body id=contorno>
		
		<form method=\"post\" action=\"contatti.html.php\">
			<input type=\"submit\" value=\"torna in dietro\" id='x'>
		</form><br/>";
		$output='<h1 id=h3>messaggio inviato</h3>';
		include('output.html.php');
		echo"</body>";
		
	
	}
	catch(PDOException$e){
		$output="<br/>errore nell'elaborazione della query richiesta".$e->getMessage();
	
		include('output.html.php');
		exit;
	}
?>
</body>
</html>
