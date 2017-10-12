<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>ポストデータ</title>
</head>
<body>
	<!-- method にPOSTを指定 actionに転送先post2.phpを指定 -->
	<form method="POST" action="post2.php">

		<label for="name">名前：</label>
		<!-- name属性は"name" -->
		<input id="name" type="text" name="name" size="15" />
		<input type="submit" value="送信" />
	</form>

</body>
</html>