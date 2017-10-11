<?php

function increment(int $num) : int {
	$num++;
	return $num;
}

$value = 10;
print increment($value); //$numには$valueの値がコピーされるだけ
print $value; //$valueは影響を受けない



function increment2(int &$num) : int {
	$num++;
	return $num;
}

$value = 10;
print increment2($value); //$numには$valueのアドレスがコピー!
print $value; //$valueは影響を受ける


