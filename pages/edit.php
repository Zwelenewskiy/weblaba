<?php
	include "../scripts/DataBase.php";	

	echo "<title>Редактирование страницы</title>";	
	
	$p = $_GET['p'];	
	$c = 0;
	$res = DB::doQuery("SELECT content FROM webpage WHERE url = '" . $p . "'", $c, false, true);	
	
	echo "<form method=\"post\" action=\"../scripts/saveSite.php\"> <textarea rows=\"20\" cols=\"100\" name=\"edit\">" . $res[0] ."</textarea> <input type = \"submit\" name = \"submit\" value = \"Сохранить\"> 
	<input type=\"hidden\" name=\"page\" value=\"" . $_GET['p'] . "\">  </input></form>";