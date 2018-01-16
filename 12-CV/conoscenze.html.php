<!DOCTYPE html>
<html>
	<head>
		<link type="text/css" rel="stylesheet" href="1.css"/>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8">
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<meta name="viewport" content="width=device-width">
		<title>Tieghi Umberto</title>
	</head>
	<body>

	<div id="tutto">
	<div id="testa">
	<div  id="uno" >
	<aside id="cont6">
		<?php
	
include'intestazione.html';
	?>
	</aside>
<div  id="cont1" >
		<h1 id="su" class="list-group-item" ><i class="fa fa-book"></i> il Curriculum vitae</h1>
		</div>
	<aside id="cont5">
	<?php
	include'area_riservata.html.php';
	?>
	</aside>
	</div>
	<?php
		include'menu.html';
	?>
	
		
		<div  id="cont1" >
		
			<?php
				include'testi.html.php';
			?>
			<h3 id="competenze">competenze</h3>
			<p>C++</p>
			<div class="competenze">			
				<span class="competenze1" style="width:10%;"></span>
			</div>
			<p>ASSEMBLY</p>
			<div class="competenze">			
				<span class="competenze1" style="width:10%;"></span>
			</div>
			<p>JAVA</p>
			<div class="competenze">			
				<span class="competenze1" style="width:70%;"></span>
			</div>
			<p>Google Maps: applicazioni GIS</p>
			<div class="competenze">			
				<span class="competenze1" style="width:90%;"></span>
			</div>	
			<p>HTML</p>
			<div class="competenze">			
				<span class="competenze1" style="width:80%;"></span>
			</div>
			<p>CSS</p>
			<div class="competenze">			
				<span class="competenze1" style="width:60%;"></span>
			</div>
			<p>PHP</p>
			<div class="competenze">			
				<span class="competenze1" style="width:60%;"></span>
			</div>
			<p>SQL</p>
			<div class="competenze">			
				<span class="competenze1" style="width:80%;"></span>
			</div>
				
			
			<a href="#su" id="a"><strong> torna all'inizio</strong> </a><hr>
		</div>
		<aside id="cont2">
		<div id="spostati">
		<h2 >Archivio</h2>
		
			<?php
				include('archivio.html.php')
			?>
			<a href="#competenze">competenze</a>
		</div>
		</aside>
		</div>
		
		
	</div>
		</body>
	</html>