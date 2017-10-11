<?php

function checkStatic(): int {
	static $x = 0;
	return ++$x;
}

print checkStatic(); //結果: 1
print checkStatic(); //結果: 2
print $x; //結果: null
