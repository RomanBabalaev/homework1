<?php

$rows = 10; // количество строк, tr
$cols = 10; // количество столбцов, td

echo '<table border="1">';

for ($tr=1; $tr<=$rows ; $tr++){ //  счётчик $tr  всегда равен текущему номеру строки.
     
    	echo '<tr>';
    for ($td=1; $td<=$cols; $td++){ //  счётчик $td аналогичен счётчику $tr
                                    
		
		$sum = $tr*$td;
		if ($sum %2 ==0){
		echo '<td>'.'('. $sum .')'.'</td>';
		}
		else {
		echo '<td>'.'['. $sum .']'.'</td>';
		}
    }
    echo '</tr>';
}

echo '</table>';
