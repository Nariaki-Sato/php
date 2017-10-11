<?php

function replaceContents(string $path, string  ...$args) : string {
	//指定されたパスからファイルを読み込み
	$data = file_get_contents($path);
	//可変長引数を順番に渡して{0},{1}と置き換え
	for ($i=0; $i < count($args); $i++) { 
		$data = str_replace('{'.($i).'}', $args[$i], $data);
		//str_replace($search, $replace, $subject)
		//subjectの中のsearchをreplaceに変換する
		//daata.datの中には{0}{1}の文章が入っている
		//これを'鈴木太郎','2016,5,1'に変換
	}
	return $data;
}

//$data.datを読み込み&出力
print replaceContents('data.dat', '鈴木太郎', '2016年5月1日');