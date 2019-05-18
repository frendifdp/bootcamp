<?php
	function minmax($array)
	{
		$a = 'abcdefghijklmnopqrstuvwxyz';
		$itemp = strlen($a);
		$xtemp = 0;
		for($i=0;$i<count($array);$i++){
			for($j=0;$j<strlen($a);$j++){
				if($array[$i] == substr($a, $j, 1)){
					if($j < $itemp){
						$itemp = $j;
						$data[0] = $array[$i];
					}
					elseif($j > $xtemp) {
						$xtemp = $j;
						$data[1] = $array[$i];
					}
				}
			}
		}
		echo json_encode($data);
	}
	$data = array('b','a','f','h','g');
	minmax($data);
?>