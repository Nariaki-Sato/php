<?php

function square(int $base, int $height) : int {
	return $base * $height;
}

$area = square(8, 100);
print $area.'<br />';