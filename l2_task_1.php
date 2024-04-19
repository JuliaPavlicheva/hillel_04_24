<?php

$bool_true = true;
$bool_false = false;
$int = 9;
$int_zero = 0;
$float = 1.1;
$str_int = "9";
$str_float = "1.1";
$str_null = "null";
$str_true = "true";
$str_false = "false";
$null = null;

var_dump($bool_true === $str_true); // false
var_dump($bool_true == $str_true); // true
var_dump($bool_true == $int); // true
var_dump($bool_false == $int_zero); // true
var_dump($bool_false === boolval($int_zero)); // true
var_dump($int_zero === $null); // false
var_dump($int_zero == $null); // true
var_dump($bool_false === $null); // false
var_dump($str_int == $int); // true
var_dump($bool_false == $str_false); // false
var_dump($bool_false == boolval($str_false)); // false
var_dump($float == $str_float); // true
var_dump($str_null === $null); // false
var_dump($float === floatval($str_float)); // true
var_dump($null == intval($null)); // true
var_dump(boolval($str_int) === $bool_true); // true
var_dump(strval($bool_false) == boolval($int_zero)); // true





