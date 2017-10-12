<?php

require_once('./Encode.php');
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Session1</title>
</head>
<body>

<form method="POST" action="session2.php">
	<label for="email">メールアドレス: </label>
	<input type="text" name="email" id="email" size="40" value="<?= e($_SESSION['email'] ?? '') ?>">
	<input type="submit" value="送信">
	
</form>

</body>
</html>