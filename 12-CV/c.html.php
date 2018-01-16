<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	</head>
	<body>
			<?php
	if(!$_GET)
			{
				echo '<strong>inserisci il testo ora</strong>';
			}
			else
			{				
				$conoscenza=htmlspecialchars($_GET['sp'], ENT_QUOTES);
			
				$camp=($conoscenza=='')? 'perchè mi mandi un campo vuoto??' : '';
				if($camp==''){
						include'inserisci.html.php';
					}
					else
					{
						
						include('chi_sono.html.php');
						echo $camp;
					}
			}
			
			//fare controlli se i campi sono vuoti
		?>
	</body>
</html>