<?php
	function countChar($string, $char)
	{
		$j = 0;
		for($i = 0; $i < strlen($string); $i++){
			$a = substr($string, $i, 1);
			if($a == $char){
				$j++;
			}
		}
		return $j;
	}

	$string = "bootcamp";
	$char = "o";
	echo "String = $string, Char = $char<br>Jumlah = " .countChar($string, $char);
?>