<?php
$global1 = 'one';
$global2 = 'two';

/**
 * 函数里的临时变量会覆盖全局变量
 */
function tempVar(){
	echo "$global1,$global2 is not the extern global var";
}

/**
 * 访问全局变量需要用到$GLOBALS
 */
function globalVar(){
	echo "global1 and global2 is ".$GLOBALS['global1'].','.$GLOBALS['global2'];
}

/**
 * 引用传值，必须传递一个引用，而不是基本类型
 * 函数会改变传入的引用的具体内容
 * @param unknown $array
 */
function yinyonFunction(&$array){
	$array[0] = 'hehe';
}

/**
 * 值传递，函数不会改变传递进来的参数的内容
 * @param unknown $array
 */
function valueFunction($array){
	$array[0] = 'hehe';
}



// tempVar();
// globalVar();
// $array = array(1,2,5,3,4);
// valueFunction($array);
// print_r($array);
// yinyonFunction($array);
// print_r($array);





