<?php

function getTriangleArea(float $base, float $height) :float {
	return $base * $height / 2;
}

//print getTriangleArea([10, 5]); //エラー
print getTriangleArea(...[10, 5]); //25

//...演算子は配列の値を個々の値に展開(アンパックunpack)できる