<?php

function my_array_walk(array $array, callable $func) {
  foreach ($array as $key => $value) {
    $func($value, $key);
  }
}

$result = 0;
function sum(float $value, int $key) {
	global $result; //global変数を定義
	$result += $value; //配列の値を$resultに加算
}

$data = [100, 50, 10, 5];
my_array_walk($data, 'sum'); //配列の合計値を求めることになる
print "合計値: {$result}";

//大元のmy_array_walkは一切書き換えてない
//より汎用性の高い関数を定義できる

