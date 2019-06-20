<?php
	class DB
	{	
		public static function doQuery($query, &$count = 0, $needAll = false, $needAnsw = false)
		{
			$host = 'localhost'; 
			$database = 'weblaba'; 
			$user = 'root'; 
			$password = '121958';
			
			$link = mysqli_connect($host, $user, $password, $database);
			mysqli_set_charset($link, "utf8");		
			
			$res= mysqli_query($link, $query);
			
			if($res == '')
				return NULL;
			
			if($needAnsw)
				$count = mysqli_num_rows($res);
			
			mysqli_close($link);
			
			if($needAll)
				return $res;		
			
			$result = null;
			if($needAnsw)
				$result = mysqli_fetch_row($res);			
			
			return $result;
		}
		
		public static function foo(){}
	}