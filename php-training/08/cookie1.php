<?php require_once('./Encode.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Cookie1</title>
</head>
<body>

	<form method="POST" action="cookie2.php">
		<label for="email">メールアドレス: </label>
		<input type="text" name="email" id="email" size="40" value="<?= e($_COOKIE['email'] ?? '' ) ?>">
		<input type="submit" value="送信">
	</form>

</body>
</html>