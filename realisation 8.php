<?php

$str = "123 456 789";
$str = explode(" ",$str);

print_r($str);
echo '','<br>';
$i = count($str);
while ($i > 0) {
    $i--;
    echo $str[$i] . ' | ';
}
