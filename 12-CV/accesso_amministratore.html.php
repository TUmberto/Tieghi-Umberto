<!DOCTYPE html>
<html>
	<head>
	
		<title>amministratore</title>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8">
		<link type="text/css" rel="stylesheet" href="1.css"/>
	</head>
	<body>
		
		<?php
			$n=htmlspecialchars($_POST['log'], ENT_QUOTES);
			$p=htmlspecialchars($_POST['pass'], ENT_QUOTES);
		
					if($n=='amministratore' && $p=='W_La_figa'){
						include('primapg.html.php');
					}
				else {
					include('amm.html.php');
				echo'<h4 id=\'h3\'> O non sei l\'amministratore o username o login sono errate</h4> ';
				}
		?>
	</body>
</html>