<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="robots" content="noindex" />
	<title>check.php</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
	$title = $_POST['title'];
	$content = $_POST['content'];

	//タグ使えるようにダブルクォーテーション変換
	$content = str_replace('\"', "\"", $content);
	//content = "<a href=\"http://redirect.blog-api.tk/\">リンク先</a>";
?>
	<div id="blog-form-wrap">
		<form action="submit.php" method="post" id="blog-form">
			<div id="title"><?php print $title; ?></div>
			<hr>
			<div id="content-check"><?php print $content; ?></div>
			<input type="hidden" name="title" value="<?php print $title; ?>">
			<input type="hidden" name="content" value='<?php print $content; ?>'>
			<input type="submit" id="submit" value="送信">
			<INPUT type="button" value="編集" onClick="history.back()" id="back">
		</form>
	</div>
</body>
</html>