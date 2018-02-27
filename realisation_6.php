<?php

$bmw  =["model"=>"X5","speed"=>"120","door"=>"5","year"=>"2015"];
$toyta  = ["model"=>"RAV4","speed"=>"100","door"=>"5","year"=>"2010"];
$opel = ["model"=>"Astra","speed"=>"130","door"=>"5","year"=>"2011"];

$cars = ['bmw'=>$bmw, 'toyta'=>$toyta, 'opel'=>$opel];

foreach ($cars as $key =>  $value) {
	
	echo '$cars ' . $key . '<br>'; 
echo $value['model'] .  $value['speed'] .' '. $value['door'] . ' ' . $value['year'] . "<br>";  	
}




/**
 * Created by PhpStorm.
 * User: 1
 * Date: 26.02.2018
 * Time: 0:23
 */
