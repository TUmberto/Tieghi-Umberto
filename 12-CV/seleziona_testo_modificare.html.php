<?php
	echo '<form action="" method=get>';
foreach($testo as $v){
		
			echo "
			<textarea name=\"cn\" >".$v.'</textarea><br/>';
			echo"<input type=button value=modifica >";
		}
		echo'</form>';
?>
