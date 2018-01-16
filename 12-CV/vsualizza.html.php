<!DOCTYPE html>
<html>
<head>
	<title>visualizzazione</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
</head>
<body>
	<?php

		try{
			$cx='mysql:host=localhost;dbname=cv';
			$pdo=new PDO($cx,'root','a_morte');
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
	$sql="SELECT  testo FROM persona";
	$result=$pdo->query($sql);
		
	
}catch(PDOException$e){
	$output="<br/>errore nell'elaborazione della query richiesta".$e->getMessage();
	
	include('output.html.php');
	exit;
}
while($row=$result->fetch()){
	$testo[]=$row['testo'];
	
}
include('risulta.html.php');

	?>
</body>
</html>