<?php
  include('../../../config/checkSessions.php');
	$sessions = new CheckSession();
	
	$nro = $_POST['nro'];
	
	$string = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
	$values = array();

	for($count = 0; $count < 1; $count++){
		for($i = 0; $i < $nro; $i++){
			$valToReturn = substr_replace(substr_replace(substr(str_shuffle($string), 0, 10), 'A', 1, 1), 'B', 8, 1);
			$values[$i] = $valToReturn;	
		}

		$xpto = count(array_unique($values);
		if($xpto < $nro){
			$count--;
			$nro = ($i - $xpto);
		}
	}

	/*$array_strings = array();
	for($i = 0; $i < $nro; $i++){
		$valToReturn = substr_replace(substr_replace(substr(str_shuffle($string), 0, 10), 'A', 1, 1), 'B', 8, 1);
		if(isset($array_strings[$valToReturn]))
		{
			$i--;
		}
		else{
			$array_strings[$valToReturn] = true;
		}
	}*/


	exit(json_encode($values));
?>