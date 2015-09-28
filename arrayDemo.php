<?php

/**
 * 数组的声明
 */
function arrayDef() {
	$one = array (
			'呵呵',
			'棒棒',
			'萌萌',
			'哒' 
	);
	$array = array (
			"name" => "steven",
			"age" => 22,
			"gender" => "male" 
	);
	var_dump ( $array );
	print_r ( $array );
	echo $array ['name'];
	
	for($var = 0; $var < count ( $one ); $var ++) {
		var_dump ( $one [$var] );
	}
	
	foreach ( $array as $var ) {
		var_dump ( $var );
	}
	
	foreach ( $array as $key => $value ) {
		var_dump ( $key . '=>' . $value );
	}
}

/**
 * 超全局变量
 */
function superVar() {
	// var_dump($_SERVER);
	var_dump ( $_POST );
}

/**
 * 一些基础的数组操作函数
 */
function someArrayFunc() {
	$array = array (
			"name" => "steven",
			"age" => 22,
			"gender" => "male" 
	);
	var_dump($array);
	//取出数组中的值封装成一个数组返回，可以将关联数组转化成索引数组
	$values = array_values ( $array );
	var_dump($values);
	//取出数组中的键封装成一个数组返回
	$keys = array_keys($array);
	var_dump($keys);
	//查询数组中的值是否包涵某字符串
	$flag = in_array('steven', $array,true);
	var_dump($flag);
	array_reverse($array);
	
}

someArrayFunc();

// superVar();