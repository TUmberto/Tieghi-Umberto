<!DOCTYPE html>
<html>
<head>
	<title>inserimento</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
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
		$sql = "INSERT INTO `cv`.`testo` (`ID`, testo) VALUES (NULL, \"$conoscenza\");";
		$pdo->exec($sql);
		
		include'inserisci_contrnuti.html.php';
	
	}
	catch(PDOException$e){
		$output="<br/>errore nell'elaborazione della query richiesta".$e->getMessage();
	
		include('output.html.php');
		exit;
	}
?>
</body>
</html>
