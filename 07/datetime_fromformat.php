<?php

$fmt = 'Y年m月d日 H時i分s秒';
$time = '2016年08月05日 11時58分32秒';
//createFromFormat で日本語混在の値$timeを認識させる
$dt = Datetime::createFromFormat($fmt, $time);
print $dt->format('Y-m-d H:i:s');
print '<br ?>';


$dt = new DateTime('2016/5/15 10:58:31');
print $dt->format('Y年m月d日 H:i'); //2016年05月15日 10:58
print '<br ?>';

$dt->add(new DateInterval('P1YT10H'));
print $dt->format('Y年m月d日 H:i'); //2017年05月15日 20:58
print '<br ?>';

$dt->sub(new DateInterval('P3MT20M'));
print $dt->format('Y年m月d日 H:i'); //2017年02月15日 20:38
print '<br ?>';

//'P日付間隔　T時間間隔' 間隔: 数値 + 単位
