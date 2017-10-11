<?php

function factorial(int $num) : int {
	if($num !== 0) { //$num = 5, 4, 3, 2, 1
		return $num * factorial($num - 1);
	}
	return 1; //$num = 0
}

print factorial(5);