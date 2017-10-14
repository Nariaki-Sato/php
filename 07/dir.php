<!DOCTYPE html>
<html>
<head>
	<title>Dir.php</title>
</head>
<body>

<table border = "1">
	<tr>
		<th>ファイル</th><th>サイズ</th><th>最終アクセス日</th><th>最終更新日</th>
	</tr>

<?php 
	$dir = new DirectoryIterator('./'); //ファイルを開いている
	foreach ($dir as $file) { //フォルダ配下の要素を順に取得する
		if($file->isFile()) {
?>
	<tr>
		<td><?php print mb_convert_encoding(
			$file->getFileName(), 'UTF-8', 'SJIS-WIN')?></td>
		<td><?php print $file->getSize(); ?>B</td>
		<td><?php print date('Y/m/d H:i:s', $file->getAtime()); ?></td>
		<td><?php print date('Y/m/d H:i:s', $file->getMtime()); ?></td>
	</tr>
<?php 			
		}
	}
?>

</table>

</body>
</html>