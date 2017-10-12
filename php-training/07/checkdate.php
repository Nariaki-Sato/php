<?php

function calendar($year, $month) {
	//1~31までの関数をループ処理
	for ($i=1; $i < 32 ; $i++) { 
		if(checkdate($month, $i, $year)) { //該当付きの妥当な値が存在するか
			print "{$i} &nbsp;"; //存在すれば表示
		}
	}
}


print '2016年2月のカレンダー: <br/>';
calendar(2016, 2);
print '<br />';

print '2017年10月のカレンダー: <br/>';
calendar(2017, 10);
print '<br />';

print '2017年12月のカレンダー: <br/>';
calendar(2017, 9);
print '<br />';

print '===================================<br />';

$fmt = 'YYYY/MM/DD';
$time = '2016年12月04日';

$dt = DateTime::createFromFormat($fmt, $time);
print $dt;