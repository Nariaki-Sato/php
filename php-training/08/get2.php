<?php require_once './Encode.php' ?>

<!DOCTYPE html>
<html>
<head>
	<title>get2</title>
</head>
<body>

	こんにちは、<?= e($_GET['name']) ?>さん！
	<!-- 埋め込みは <?= ?> -->

</body>
</html>