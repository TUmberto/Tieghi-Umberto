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
	$sql = "SELECT titolo FROM `testo` ";
	$result=$pdo->query($sql);
		
	
}catch(PDOException$e){
	$output="<br/>errore nell'elaborazione della query richiesta".$e->getMessage();
	
	include('output.html.php');
	exit;
}
while($row=$result->fetch()){
	$id[]=$row['titolo'];
}
include('id.html.php');

	?>
</body>
</html>