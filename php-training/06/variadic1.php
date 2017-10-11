<?php

function sum (float ...$args) : float {
	//結果を格納するための$result
	$result = 0;

	//取得した引数と順番に加算処理
	foreach ($args as $arg) {
		$result += $arg;
	}
	return $result;
}

print sum(7,3,10); //20
print sum(11,-5,4,88); //98