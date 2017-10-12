<?php require_once './Encode.php'; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>チェックボックス</title>
</head>
<body>
	<!-- 指定された要素の値が配列として渡される -->
	選択されたのは、<?=e(implode(',', $_POST['arch'])) ?>です。
</body>
</html>
