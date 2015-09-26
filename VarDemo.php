<?php

/**
 *可变变量
 */
function kebianVar() {
	$hi = "hello";
	$$hi = "world"; // 可变变量
	echo "$hi $hello";
	echo "</br>";
	echo "$hi" . " $hello";
	echo "</br>";
	echo $hi . " " . $hello;
}

/**
 * 变量的引用赋值
 * 变量总是传值赋值，和java一样
 * 想要引用赋值，则需要“&”
 */
function yinyon(){
	//传值赋值
	$foo = "hehe";
	$yinyon = $foo;
	$foo = "dada";
	echo "foo is $foo,yinyon is $yinyon </br>";
	
	//引用赋值
	$foo = "hehe";
	$yinyon = &$foo;
	$yinyon = "dada";
	echo "foo is $foo,yinyon is $yinyon </br>";
}

/**
 * 字符串的三种不同的格式
 */
function  stringFormat(){
	$foo = "heheda";
	//单引号的字符串,不会解析字符串里的变量，也不会转义除'/之外的转义字符，所以执行效率高一些
	echo 'this is $foo';
	//双引号的字符串,会解析字符串里的变量，也会转义
	echo "this is $foo";
	//定界符，方便输出大段文字
	//FIXME 这里的PHP版本貌似不支持zhe
// 	foo = <<<EOT
// 	挥洒很对啊是多啊手机号放假卡号即可啊降低哦鸡窝
// EOT;//结尾的标识符必须是单独一行的第一列，后面不能带空格
// 	echo foo;
}

/**
 * 5个魔术常量的含义
 */
function magicConstant(){
	echo "现在的文件是：".__FILE__."</br>";
	echo "现在的行数是：".__LINE__."</br>";
	echo "现在的函数是：".__FUNCTION__."</br>";
	echo "现在的类是：".__CLASS__."</br>";
	echo "现在的方法是：".__METHOD__."</br>";
	
}

/**
 * 常量声明
 */
function defineConstant(){
	//常量声明需要加“”或者‘’
	// define("DEFAULT_SIZE", 100);
	// echo DEFAULT_SIZE;
}
// yinyon();
// stringFormat();
magicConstant();




























