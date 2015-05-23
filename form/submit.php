<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="robots" content="noindex" />
	<title>submit.php</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
	$title = $_POST['title'];
	$content = $_POST['content'];

	//￥マーク削除
	$content=str_replace("\\","",$content);

	require "../blog/fc2.php";
	//require "../blog/goo.php";
	//require "../blog/jugem.php";
	//require "../blog/seesaa.php";
?>
<div id="blog-form-wrap">
	記事投稿完了	
</div>
<div>
	<a href="../index.php">トップに戻る</a>
</div>
</body>
</html>