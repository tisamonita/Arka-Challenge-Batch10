<?php
/*
 * Create a random string
 * @author	XEWeb <>
 * @param $length the length of the string to create
 * @return $str the string
 */
function randomString($length = 32) {
	$str = "";
	$characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
	$max = count($characters) - 1;

		for ($i = 0; $i < $length; $i++) {
			$rand = mt_rand(0, $max);
			$str .= $characters[$rand];
		}
		return $str;


}

function generateString($jumlah){

	for($x=0; $x<$jumlah; $x++){
		$string[$x] = randomString();
		
	}
	return $string;

}

function cekduplikat($string){
	 $x = count($string);
	 for($y=0 ; $y<$x; $y++){

	 	for($z=$x-1; $z>$y; $z--){
	 		if($string[$y]== $string[$z]) {
	 			$string[$y] = generateString(1);
	 		}
	 	}
	 	
	 }
}

$string = generateString(5);
cekduplikat($string);
print_r($string);

?>