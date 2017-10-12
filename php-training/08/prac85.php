<?php require_once('./Encode.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>85-1</title>
</head>
<body>

<form method="POST" action="prac852.php">
	<label for="name">Name: </label>
	<input type="text" name="name" id="name" " size="40" value="<?= e($_COOKIE['email'] ?? '') ?>">
	<input type="submit" value="送信">
</form>

</body>
</html>