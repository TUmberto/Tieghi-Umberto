<!DOCTYPE html>
<html>
	<head>
		<title>modifica il testo</title>
		<link type="text/css" rel="stylesheet" href="1.css"/>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	</head>
	<body>
	
	<div id="contorno">
	<form method="post" action="primapg.html.php">
			<input type="submit" value="torna indietro" id='x'>
			</form><br/>
	<?php
	
		echo '<form action="" method=get>';
		
		foreach($testo as $i=>$v){
			$i++;
			echo "
			<textarea name=\"sp\" id=\"modi\">".$v.'</textarea><br/>';
			echo"<a href=da_memo.html.php?id=$i><input type=button value=modifica ></a>";
		}
		echo'</form>';
		include'da_memo.html.php';
		
	?>
</div>
</body>
</html>