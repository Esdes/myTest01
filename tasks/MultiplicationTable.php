<?php 

function getTable($n = 10) {
	$table = "<table>";
	$number = 1;
	$cols = 5;
	$rows = 2;

	for($i = 0; $i < $rows; $i++) {
		$table .= '<tr>';

		for($j = 0; $j < $cols; $j++) {
			$table .= '<td>';

			for($k = 1; $k < $n+1; $k++) {
				$table .= '<p>';

				$table .=  $number .'*'. $k.'='.$number * $k;

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