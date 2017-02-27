<?php
	ob_start();
	require('../database.php');
	require('../models/articles.php');

	$link = db_connect();

	if(isset($_GET['action'])){
		$action = $_GET['action'];
	}
	else{
		$action="";
	}

	if($action == 'add'){
		if(!empty($_POST)){
			article_new($link,$_POST['title'],$_POST['date'],$_POST['content']);
			header('Location:index.php');
		}
		include '../views/articles_add.php';
	}else if($action == 'edit'){
		if (!isset($_GET['id'])){
			header('Location:index.php');
		}
		$id = (int)$_GET['id'];

		if(!empty($_POST)&& $id>0){
			article_edit($link,$id,$_POST['title'],$_POST['date'],$_POST['content']);
			echo 'No-more';
		}

		$article = article_get($link,$id);
		include ('../views/articles_edit.php');
	}

	else{
		$articles = articles_all($link);
		include ('../views/articles_admin.php');
	}
ob_flush();
?>