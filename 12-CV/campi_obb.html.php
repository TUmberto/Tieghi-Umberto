<!DOCTYPE html>
<html>
	<head>
		<title>inserisci le tue intenzioni</title>
		<link type="text/css" rel="stylesheet" href="1.css"/>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	</head>
	<body>
<?php
	if(!$_POST)
			{
				echo 'campi obbligatori';
			}
			else
			{//controllo tutti i campi del form per evitare che qualche duno inserisca codice al posto di quello che in vece deve inserire. tutte le variabili sono in ordine relativo al form
				
				$n=htmlspecialchars($_POST['nome'], ENT_QUOTES);
				$cg=htmlspecialchars($_POST['cognome'], ENT_QUOTES);
				$ct=htmlspecialchars($_POST['citta'], ENT_QUOTES);
				$ind=htmlspecialchars($_POST['ind'], ENT_QUOTES);
				$n_t=htmlspecialchars($_POST['tel'], ENT_QUOTES);
				$m=htmlspecialchars($_POST['mail'], ENT_QUOTES);
				$motivo_del_contatto=htmlspecialchars($_POST['moti'], ENT_QUOTES);
			
				$camp=(($n=='')||($cg=='')||($ct=='')||($ind=='')||($n_t=='')||($m=='')||($motivo_del_contatto==''))? 'campi obbligatori' : '';
				
					if($camp==''){		
						
						include'memorizzazione.html.php';
					}
					else{
						
						include('referenze.html.php');
						echo'<h3 id=h3>'.$camp.'</h3>';
					}
			
			}
			//fare controlli se i campi sono vuoti
		?>
		</body>
		</html>