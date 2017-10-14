<?php

function my_array_walk(array $array, callable $func) {
  foreach ($array as $key => $value) {
    $func($value, $key);
  }
}

$data = [100, 50, 10, 5];
$result = 0; //結果値を求めるための変数
my_array_walk($data, 
	function(float $value, int $key) use(&$result) {
		$result += $value;
	}
);

print "合計値: {$result}";