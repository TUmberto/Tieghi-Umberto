<!DOCTYPE html>
<html>
	<head>
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
foreach($testo as $v){
		
			echo "
			<textarea name=\"cn\" id=\"modi\">".$v.'</textarea><br/>';
			echo"<a href=?id=$c><input type=button value=modifica ></a>";
		}
		echo'</form>';
		if($_GET['id'])
		{
			$conoscenza=htmlspecialchars($_GET["cn"], ENT_QUOTES);
			include'da_memorizzare.html.php';
		}
		
	?>
	</div>
	</body>
	</html>