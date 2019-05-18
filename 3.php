<?php

function myCountChar($string, $char){

	$jumlah = 0;
	$arr_string =str_split($string);
	$count = count($arr_string);
	for($x=0; $x<$count; $x++){
		
		if($char== $arr_string[$x]){
			$jumlah = $jumlah +1;
		}

	}
	return $jumlah;
	
}

 $jumlah = myCountChar("bootcamp",'o');
 echo $jumlah;
?>