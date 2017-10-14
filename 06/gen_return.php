<?php

function readLines(string $path) {
	$i = 0;
	$file = fopen($path, 'rb') or die('Files not found!');
	//行単位にテキストを出力&yield
	while ($line = fgets($file, 1024)) {
		$i++;
		yield $line;
	}
	fclose($file);
	//読み込んだテキストの行数を返す
	return $i;
}

//sample.dat から行単位にテキストを出力

$gen = readLines('sample.dat');
foreach ($gen as $line) {
	print $line.'<br />';
}

//最終的に読み込んだ行数を取得
print "{$gen->getReturn()}行ありました";