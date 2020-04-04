<?php
	//echo $_POST["title"]." , ".$_POST["text"];
	$db =  mysqli_connect('localhost','root','');
	$ret = true;
	
	if (!$db) {
		//die('Ошибка соединения: ' . mysql_error());
		$ret = false;
	} else
	{	
		//echo 'Успешно соединились';
		mysqli_select_db($db,'ajax');
		mysqli_query($db,"SET NAMES utf8");
	
	
		mysqli_query($db,"INSERT news(title, text) VALUES('".$_POST["title"]."','".$_POST["text"]."')");
		mysqli_close($db);	
	}	
	
	echo $ret;
?>