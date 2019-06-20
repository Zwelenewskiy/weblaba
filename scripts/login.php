<?php
	include "../scripts/DataBase.php";	
	
	$log = $_POST['login'];
	$pass = $_POST['password'];
	
	if((preg_match('/^[a-zA-Z0-9]+$/', $log) == 1) && (preg_match('/^[a-zA-Z0-9\!\@\#\%\&\*]+$/', $pass) == 1))
	{
		$c = 0;
		$res = DB::doQuery("SELECT level FROM users WHERE login = '$log' AND password = '$pass'", $c, false, true);

		if($res[0] != NULL)
		{					
			session_start();
			ini_set('session.gc_maxlifetime', 3);
			
			$_SESSION['log'] = $log;
			$_SESSION['level'] = $res[0];
			
			header('Location: http://localhost/test.xxx/index.php?auth=true');		
		}
		else		
		{	
			header('Location: http://localhost/test.xxx/pages/login.php');
		}
	}
	else
	{		
		header('Location: http://localhost/test.xxx/pages/login.php?error=true');
	}	
?>