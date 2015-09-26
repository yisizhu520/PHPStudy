<?php


function jia($a,$b){
	return $a+$b;
}

function pinfanghe($a,$b){
	return $a*$a + $b*$b;
}
/*
 *变量函数，类似于多态的感觉
*/
$result = 'pinfanghe';
// echo "运算结果是：{$result(3,4)}";

/**
 * 通过变量函数来接受一个函数名来应用回调
 * @param callback $fun
 */
function callbackOne($fun){
	echo "运算结果是：".$fun(2,5);
}

// callbackOne($result);

/**
 * 通过使用系统函数call_user_func_array来执行回调
 * @param unknown $fun
 */
function callbackTwo($fun){
// 	call_user_func($fun,2,4)
	echo "运算结果是：".call_user_func_array($fun,array(2,4));
}

callbackTwo($result);