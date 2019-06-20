<?php	
	include "scripts/DataBase.php";	
	
	$c = 0;
	$res = DB::doQuery("SELECT content FROM `webpage` WHERE url = 'index.html'", $c, false, true);
	
	echo $res[0];