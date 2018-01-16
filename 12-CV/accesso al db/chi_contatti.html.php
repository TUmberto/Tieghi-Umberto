<!DOCTYPE html>
<html>
	<head>
		<title>visualizza chi mi ha contattato</title>
		<link type="text/css" rel="stylesheet" href="1.css"/>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	</head>
	<body id="contorno">
<form method="post" action="primapg.html.php">
			<input type="submit" value="torna in dietro" id='x'>
			</form><br/>
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
	$sql = "SELECT `nome`, `cognome`,`e_mail`, `citta`, `indirizzo`, `n_telefono`, `motivo_del_contatto` FROM `contatti` ";
	$result=$pdo->query($sql);
		
	
}catch(PDOException$e){
	$output="<br/>errore nell'elaborazione della query richiesta".$e->getMessage();
	
	include('output.html.php');
	exit;
}
while($row=$result->fetch()){
	$c=['nome'=>$row['nome'],'cognome'=>$row['cognome'],'e_mail'=>$row['e_mail'],'città'=>$row['citta'],'indirizzo '=>$row['indirizzo'],'n°telefono'=>$row['n_telefono'],'motivazioni '=>$row['motivo_del_contatto']];
	// 
}
include('visua.php');

	?>
	
</body>
</html>