<?php
try{
	$cx='mysql:host=localhost;dbname=cv';
	$pdo=new PDO($cx,'root','a_morte');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec('SET NAMES "utf8"');
	
}
catch(PDOException $e)
{
	$output="errore di connessione al db";
	include('output.html.php');
	exit;
}

try{
	
	$sql="UPDATE `testo` SET`testo`=\"$conoscenza\" WHERE ID=$c";
	$affectedRow=$pdo->exec($sql);
		
	
}catch(PDOException$e){
	$output="<br/>errore nell'elaborazione della query richiesta".$e->getMessage();
	
	include('output.html.php');
	exit;
}

?>