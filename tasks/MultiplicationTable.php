<?php 

define('COLORS', ['red',
				  'green',
				  'yellow',
				  'blue'
				]);

function getTable($colorized = false, $n = 10) {
	$table = "<table>";
	$number = 1;
	$cols = 5;
	$rows = 2;

	for($i = 0; $i < $rows; $i++) {
		$table .= '<tr>';

		for($j = 0; $j < $cols; $j++) {
			$table .= '<td>';

			for($k = 1; $k < $n+1; $k++) {
				$result = $number * $k;

				$table .= '<p>';
				if($colorized === true){
					$table .=  getColorizedNumber($number) .' * '. getColorizedNumber($k).' = '.getColorizedNumber($result);
				} else{
					$table .=  $number .'*'. $k.'='.$result;
				}
				

				$table .= '</p>';
			}

			$table .= '</td>';
			$number++;
		}
		$table .= '</tr>';
	}

	$table .= '</table>';

	return $table;
}

function getColorizedNumber($number){
	$result;	

	$num = strrev($number);

	while ($number  >= 1) {
		$rand = random_int(0, 4);
		$result .= '<span class="'.COLORS[$rand].'">'.($num % 10).'</span>';
		$number /= 10;
		$num /= 10;
	}

	return $result;
}
