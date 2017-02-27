<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Мой первый блог</title>
	<link rel="stylesheet" href="style/style.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1>Статья блога</h1>

		<div class="article">
			<h3><?=$article['title']?></h3>
			<em>Опубликовано: <?=$article['date']?></em>
			<p><?=$article['content']?></p>
		</div>

		<footer>
			<p>Мой первый блог<br>Copyright&copy;</p>
		</footer>
	</div>
</body>
</html>