<?php


function minmax($data){
	$dump_max = 'a';
	$min= min($data);
	$count = count($data);
	for($x=0; $x<$count; $x++){
		if($data[$x]==$min){
			$indeksmin = $x;
		}
	}

	for($y=$indeksmin+1; $y<$count; $y++){
		if($data[$y] > $dump_max) {
			$dump_max = $data[$y];
		}
	}

	$arraybaru[0] =  $min;
	$arraybaru[1] = $dump_max;
	return $arraybaru;
}

$array = ['d', 'c', 'a', 'b', 'y', 'l'];
$arraybaru = minmax($array);
echo '['.' '.$arraybaru[0].','.$arraybaru[1].' ]';

?>