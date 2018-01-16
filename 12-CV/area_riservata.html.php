<!DOCTYPE html>
<html>
	<head>
		<link type="text/css" rel="stylesheet" href="1.css"/>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8">
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

		
	</head>
	<body>

	
		<form action='' method='get'>
			<a href="amm.html.php?id=1" id="loop"><i class="fa fa-lock"></i><br/>login</a>
		</form>
	<?php
			if($_GET)
			{
				$a=$_GET['id'];
				if($a==1)
				include('amm.html.php');
			}
		?><br/><br/>
			</body>
	</html>