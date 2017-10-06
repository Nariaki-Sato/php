<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>アクセスログ</title>
</head>
<body>
<table border="1">
<tr>
  <th>アクセス日時</th><th>スクリプト名</th>
  <th>ユーザエージェント</th><th>リンク元のURL</th>
</tr>
<?php
$file = fopen('access.log', 'rb');

//LOCK_SHは共有ロック: 読み込み中なので他者による書き込みを中止する
flock($file, LOCK_SH);
while ($line = fgetcsv($file, 1024, "\t")) {
// while ($fline = fgets($file, 1024)) {
//   $line = explode("\t", $fline);
  print '<tr>';
  foreach ($line as $value) {
    print '<td>' . $value . '</td>';
  }
  print '</tr>';
}

//ファイルクローズの前にアンロックする
flock($file, LOCK_UN);
fclose($file);
?>
</table>
</body>
</html>