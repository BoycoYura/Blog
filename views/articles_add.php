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
		<h1>Добавление новой статьи</h1>
		<div>

		<form method="post" action="index.php?action=add">
			<label for="">
				Название
				<input type="text" name="title" value="" class="form-control form-item" autofocus required>
			</label>

			<label for="">
				Дата
				<input type="date" name="date" value="" class="form-control form-item" autofocus required>
			</label>

			<label for="">
				Содержимое
				<textarea name="content" class="form-item form-control" rows="5" required></textarea>
			</label>
			<input type="submit" value="Сохранить" class="btn">
		</form>

		</div>

		<footer>
			<p>Мой первый блог<br>Copyright&copy;</p>
		</footer>
	</div>
</body>
</html>