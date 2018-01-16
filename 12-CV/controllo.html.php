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
				$conoscenza=$_GET['sp'];
				$titolo=$_GET['titolo'];
			
				$camp=(($conoscenza=='')&&($titolo==''))? 'perchè mi mandi un campo vuoto??' : '';
				if($camp==''){
						include'inserimento.html.php';
					}
					else
					{
						
						include('inserisci_contrnuti.html.php');
						echo $camp;
					}
			}
			
			//fare controlli se i campi sono vuoti
		?>
	</body>
</html>
	