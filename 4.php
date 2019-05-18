<?php

$num_char 	 = 7; 

$onehalf 	 = floor($num_char / 2);
$onehalf_var = $onehalf;
$char1 		 = '=';
$char2 		 = 'x';
$dump_numchar = $num_char+1;

echo '<div style="font:bold 16px courier new; line-height:10px">';
// loop baris
for ($row = 1; $row <= $num_char; $row++)
{
	$dump_numchar = $dump_numchar -1;
	// loop kolom
	for ($col = 1; $col <= $num_char; $col++)
	{

		
		if($col==$row) { echo $char2; }
		elseif ($dump_numchar==$col) {
			echo $char2;
		}

		else echo $char1;
		
	}
	$row <= $onehalf ? $onehalf_var-- : $onehalf_var++;	
	echo '<br/>';
}
echo '</div>';
?>