<?php 

require('database.php');
require('models/articles.php');

	$link = db_connect();

	$articles= articles_all($link);

require("views/articles.php")?>