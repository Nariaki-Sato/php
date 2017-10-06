<h1>理解度チェック4</h1>
<?php

echo "4.1: 1〜100の範囲にある奇数値の合計<br/>";

$sum = 0;
for($i=1; $i<=100; $i++) {
	//echo $i.'<br/>';
	if ($i % 2 != 0) {
		$sum += $i;
	}
}

echo $sum.'<br/>';
echo "============================<br/>";

echo "4.2: 1〜100を加算し、合計値が1000を超えたら脱出<br/>";

$sum = 0;
$i = 0;
while ($i<100) {
	$i++;
	$sum += $i;
	//echo $i.': '.$sum.'<br/>';
	if ($sum > 1000) {
		break;
	}
}

echo "合計が1000を超えるのは1~{$i}を加算したときで合計は{$sum}です。<br/>";
echo "============================<br/>";

echo "4.3: 配列の値を一律に1.5倍にするためのスクリプト<br/>";

$data = [10, 25, 50];
foreach ($data as $item) {
	$item * 1.5;
}
print_r($data);
echo "<br/>============================<br/>";


echo "4.4: $languageの種類<br/>";
$data = ['PHP', 'JSP', 'ASP', 'JavaScript', 'VBScript'];
$language = $data[rand(0, count($data))];
echo $language.'<br/>';
switch ($language) {
	case 'PHP':
	case 'JSP':
	case 'ASP':
		echo 'サーバサイド技術';
		break;
	case 'JavaScript':
	case 'VBScript':
		echo 'クライアントサイド技術';	
	default:
		echo 'Default!';
		break;
}


?>