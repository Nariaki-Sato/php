<?php

function refCheck(int &$num) { //1のアドレス###が代入されて
	print $num. '<br />'; //###の値1を表示
	$num++; //###の値をインクリメント => 2
	unset($num); //ローカル変数を破棄(グローバル変数には影響しない)
	print $num . '<br />'; //2
}

$num = 1; //numはグローバル変数
refCheck($num);
print $num;