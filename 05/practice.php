<?php

$str = '住所は〒184-0000 鎌ケ谷市梶野町0-0-0です。';
echo $str.'<br/>';

if (preg_match('/([0-9]{3})-([0-9]{4})/', $str, $data)) {
	print "{$data[0]}";
}

echo "<br/>========================<br/>";

$str = 'お問い合わせはCQW15204@nifty.comまで';
echo $str.'<br/>';

print preg_replace('/[a-z0-9\.\-]+@([a-z0-9\-]+\.)+[a-z0-9\-]+/i', '<a href="mailto:$0">$0</a>', $str);

echo "<br/>========================<br/>";
