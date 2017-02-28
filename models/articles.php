<?php
 
	function articles_all($link){
		$query ="SELECT * FROM articles ORDER BY id DESC";
		$result = mysqli_query($link, $query);

		if (!$result) {
			die(mysqli_error($link));
		}

		$n = mysqli_num_rows($result);
		$articles = [];

		for ($i=0; $i < $n; $i++) { 
			$row = mysqli_fetch_assoc($result);
			$articles[] = $row;
		}

		return $articles;
	}

	function article_get($link,$id_article){ 
		$query = "SELECT * FROM articles WHERE id=$id_article";
		
		$result = mysqli_query($link, $query);

		if(!$result){
				die(mysqli_error($link));
		}


		$article = mysqli_fetch_assoc($result);

		return $article;

	}

	function article_new($link, $title, $date, $content){

		if ($title == '') {
			return false;
		}

		$query = "INSERT INTO articles(title,data_post,content) VALUES('$title','$date','$content')";

		$result= mysqli_query($link,$query);

		if(!result){
			die(mysqli_error($link));
		}

		return true;

		
	}

	function article_edit($link,$id,$title,$date,$content){

		$id =(int)$id;

		if($title == '')
			return false;
		
		$query = "UPDATE articles SET title='$title', data_post='$date',content='$content' WHERE id='$id'";

		$result = mysqli_query($link,$query);

		if (!$result) {
			die(mysqli_error($link));
		}

		return mysqli_affected_rows($link);


	}

	function article_delete($link,$id){
		$id =(int)$id;

		if($id == 0)
			return false;

		$query="DELETE FROM articles WHERE id='$id'";

		$result = mysqli_query($link,$query);

		if(!result) die(mysqli_error($link));

		return mysqli_affected_rows($link);

	}

	function articles_intro($text,$len = 500){
		return mb_substr($text,0,$len);
	}
?>