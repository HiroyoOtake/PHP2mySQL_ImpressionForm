<?php

$name = $_POST['name'];
$impression = $_POST['impression'];

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>投稿確認画面</title>
	</head>
	<body>
		<h1>下記の内容が投稿されました</h1>
		<p>名前:<?php echo $name; ?></p>
		<p>感想:<?php echo $impression; ?></p>
	</body>
</html>
