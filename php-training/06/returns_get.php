<?php

require_once 'returns.php';

$result = max_min(10, 2, -5, 3, 78); //$resultには配列が代入されている

print_r($result); //結果: Array([0]=>78, [1]=>-5);

list($max, $min) = max_min(10, 2, -5, 3, 78); //list命令で配列を代入
print "最大値: {$max}, 最小値: {$min}"; //結果: 最大値: 78, 最小値: -5;

//list命令
//list(変数1、[, 変数2, ...]) = 配列