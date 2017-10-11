<?php

function product (...$args) : int {
	$result = 1;
	foreach ($args as $arg) {
		$result *= $arg;
	}
	return $result;
}

$product = product(10, 2);
echo $product;

$product = product(10, 2, 5);
echo $product;

$product = product(10, 2, 3, 5, 2, 6, 2);
echo $product;