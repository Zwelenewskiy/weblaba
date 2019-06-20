<div id="content">
<h2>Контактная информация</h2>
<h4>
	<?php 		
		include "scripts/DataBase.php";	
		$result = DB::doQuery("SELECT * FROM `contact_info`", $count, true, true);
		
		for ($i = 1 ; $i <= $count ; $i++)
		{
			$row = mysqli_fetch_row($result);
			
			echo "Разработчик $i: <a href=$row[4]>  $row[1] $row[2] $row[3] </a> <br>";
		}			
	?>	
</h4>

<br><br><br>

<h6>***Приветствуются любые пожертвования.***</h6>

</div>	