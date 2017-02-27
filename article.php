<?php 
require('database.php');
require('models/articles.php');

	$link = db_connect();

	$article = article_get($link, $_GET['id']);

require('views/article.php');
?>