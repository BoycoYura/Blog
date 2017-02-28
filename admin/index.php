<?php
	ob_start();
	require('../database.php');
	require('../models/articles.php');

	$link = db_connect();
	
//Some conditionals
	if(isset($_GET['action'])){
		$action = $_GET['action'];
	}
	else{
		$action="";
	}
//Some conditionals

switch ($action) {
//If we want add post
    case 'add':
	{if(!empty($_POST)){
		article_new($link,$_POST['title'],$_POST['date'],$_POST['content']);
		header('Location:index.php');
	}
	include '../views/articles_add.php';
	}
    break;
//If we want add post

//If we want edit post    
    case 'edit':
	{if (!isset($_GET['id'])){
		header('Location:index.php');
	}

	$id = (int)$_GET['id'];

	if(!empty($_POST)&& $id>0){
		article_edit($link,$id,$_POST['title'],$_POST['date'],$_POST['content']);
		header('Location:index.php');
	}

	$article = article_get($link,$id);
	include ('../views/articles_edit.php');
	}
    break;
//If we want edit post 

//If we want delete post 
    case 'delete':
	{$id = (int)$_GET['id'];
	 $article = article_delete($link,$id);
	 header('Location:index.php');
	}
    break;
//If we want delete post


//Default action
    default:
    {$articles = articles_all($link);
	 include ('../views/articles_admin.php');
	}
//Default action 
}

ob_flush();
?>