<?php

function getPrime() {
	$num = 2; //素数の開始値
	//2から順に素数判定し、素数の場合だけyield(無限ループ)
	while (true) {
		if (isPrime($num)) { yield $num; }
		$num++;
	}
}

function isPrime(int $value) : bool {
	$prime = true; //素数かどうかを返すフラグ
	for ($i=2; $i <floor(sqrt($value)) ; $i++) { 
		if ($value % $i === 0) {
			$prime = false; //割り切れるものがあれば素数でない
			break;
		}
	}
	return $prime;
}

//素数を順に出力
foreach (getPrime() as $prime) {
	//素数が10以上になったら終了
	if ($prime > 100) {
		die();
	}
	print $prime. ',';
}