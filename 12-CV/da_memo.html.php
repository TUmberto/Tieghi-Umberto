<!DOCTYPE html>
<html>
<head>
	<title>visualizza il testo da modificare</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
</head>
<body>
<form method="post" action="primapg.html.php">
			<input type="submit" value="torna in dietro" id='x'>
			</form><br/>
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
	if($_GET['id']){
			$c=$_GET['id'];
			
			
	try{
	$sql="SELECT testo FROM testo WHERE id=\"$c\"";
	$result=$pdo->query($sql);
		
	
}catch(PDOException$e){
	$output="<br/>errore nell'elaborazione della query richiesta".$e->getMessage();
	
	include('output.html.php');
	exit;
}
while($row=$result->fetch()){
	$testo[]=$row['testo'];
	
}
include('ciao.php');
}
	?>
</body>
</html>