<?php
function create($length)
{
	$a = $length;
	if($a%2 == 0){
		echo "Jumlah Harus Ganjil";
	}
	else{
		for($i=1;$i<=$length;$i++){
			for($j=1;$j<=$length;$j++){
				if($j/$i == 1 || $j/$a == 1){
					echo "x ";
				}
				else{
					echo "= ";
				}
			}
			echo "<br>";
			$a--;
		}
	}
}

create(7);
?>