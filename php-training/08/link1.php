<!DOCTYPE html>
<html>
<head>
	<title>link1</title>
</head>
<body>
	<h1>"link2.php?keyword=<?= urlencode('クエリ情報(&%)') ?>"</h1>
	<a href="link2.php?keyword=<?= urlencode('クエリ情報(&%)') ?>">
		結果を確認
	</a>

</body>
</html>