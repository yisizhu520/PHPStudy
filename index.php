<?php

function testEmpty($var){
	if(empty($var)){
		echo $var." is empty </br>";
	}else{
		echo $var." is NOT empty </br>";
	}
}

function testIsset($var){
	if(isset($var)){
		echo $var." is isset </br>";
	}else{
		echo $var." is NOT isset </br>";
	}
}

$var = "";
testEmpty($var);
$var = 0;
testEmpty($var);
$var = null;
testEmpty($var);
$var = NULL;
testEmpty($var);
testIsset($var);
unset($var);
testIsset($var);
?>