<?php
	//echo $_POST["title"]." , ".$_POST["text"];
	$db =  mysqli_connect('localhost','root','');
	
	if (!$db) {
		echo 'Ошибка соединения: ' . mysql_error();
	} else
	{	
		mysqli_select_db($db,'ajax');
		mysqli_query($db,"SET NAMES utf8");
	
	
		$result = mysqli_query($db,"SELECT * FROM news ORDER BY id DESC");
		
		$news = array();
		
		while($row = mysqli_fetch_assoc($result)){
			$news[] = $row;
		}	
		
		mysqli_close($db);	
	}	
	
	$news = array_reverse($news);
	
	echo json_encode($news);
?>