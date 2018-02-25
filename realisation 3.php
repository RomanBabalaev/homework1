<?php
define("KONS", 30, true);// Объявляем константу



if (defined("KONS") == true );

echo "Все пошло по плану!"; //Скрипт выведет 'Константа объявлена!'

define("KONS", 35 );// смена значения

echo '<br>', (KONS);



/**
 * Created by PhpStorm.
 * User: 1
 * Date: 25.02.2018
 * Time: 23:04
 */