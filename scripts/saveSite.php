<?php
	include "../scripts/DataBase.php";	
	
	$content = $_POST['edit'];
	$url = $_POST['page'];
	
	$res = DB::doQuery("UPDATE webpage SET Content = '$content' WHERE url = '$url'");
	
	$dot = strpos($_POST['page'], ".");
	$page = substr($_POST['page'], 0, $dot);
	header('Location: http://localhost/test.xxx/index.php?page=' . $page);