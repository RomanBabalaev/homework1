<?php

$age = "30";
$a = "18";
$b = "65";
$c = "1";
$d = "17";

if($age>=$a and $age<=$b ){
    echo 'Вам еще работать и работать';
}
if ($age>$b ){
    echo 'Вам пора на пенсию';
}
if ($age>=$c and $age<=$d ){
    echo 'Вам пора в школу!';
}
elseif ($age<$c  )
    echo 'Неизвестный возраст';
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 25.02.2018
 * Time: 23:23
 */
