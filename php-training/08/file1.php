<!DOCTYPE html>
<html>
<head>
	<title>file1</title>
</head>
<body>

<!-- フォームデータのエンコード形式を指定 -->
<form method="POST" action="file2.php" enctype="multipart/form-data">
	<label for="upfile">ファイルのパス: </label>
	<input type="hidden" name="max_file_size" value="1000000">
	<input id="upfile" type="file" name="upfile" size="40">
	<input type="submit" value="アップロード">
	
</form>

</body>
</html>