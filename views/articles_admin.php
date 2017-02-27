<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Мой первый блог</title>
	<link rel="stylesheet" href="../style/style.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1>Админ панель</h1>
		<div>
		<a href="index.php?action=add">Добавить статью</a>
			<table border="1">
				<tr>
					<th>Дата</th>
					<th>Заголовок</th>
					<th>EDIT</th>
					<th>DELETE</th>
				</tr>
				<?php foreach($articles as $a): ?>
				<tr>
					<td><?=$a['data_post']?></td>
					<td><?=$a['title']?></td>
					<td>
						<a href="index.php?action=edit&id=<?=$a['id']?>">Редактировать</a>
					</td>
					<td>
						<a href="index.php?action=delete&id=<?=$a['id']?>">Удалить</a>
					</td>
				</tr>
				<?php endforeach ?>
			</table>
		</div>

		<footer>
			<p>Мой первый блог<br>Copyright&copy;</p>
		</footer>
	</div>
</body>
</html>