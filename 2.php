<?php
	function generateString($jumlah)
	{
		$str = 'abcdefghijklmnopqrstuvwxyz1234567890';
		$out = array();
		for($i = 0; $i < $jumlah; $i++){
			$out[$i] = '';
			for($a = 0; $a < 32; $a++){
				$index = rand(0, 32);
				$sub = substr($str, $index, 1);
				$out[$i] .= $sub;
			}
		}

		return $out;
	}
	$s = generateString(2);
	echo "A. ".json_encode($s);

	function checkString($string)
	{
		$a = count($string);
		$data = $string;
		$out = '';
		for($i = 1; $i < $a; $i++){
			if($data[$i-1] == $data[$i]){
				$j = $i - 1;
				$out .= "Data duplikat ditemukan di index ".$j." dan index ".$i."<br>";
			}
			else{
				$out = 'Data duplikat tidak ditemukan';
			}
		}
		return $out;
	}
	echo "<br>B. ".checkString($s);
?>