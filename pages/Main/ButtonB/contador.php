<?php
  include('../../../config/checkSessions.php');
	$sessions = new CheckSession();
	
	$nro = $_POST['nro'];

	$string = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
	$values = array();

	for($i = 0; $i < $nro; $i++){
			
		$valToReturn = substr_replace(substr_replace(substr(str_shuffle($string), 0, 10), 'A', 1, 1), 'B', 8, 1);

		if(in_array($valToReturn, $values)){
				$i--;
		}else{
				array_push($values, $valToReturn);
		}
	}
	exit(json_encode($values));
?>