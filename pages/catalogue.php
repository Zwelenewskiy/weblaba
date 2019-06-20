<div id="content">
<h2>Каталог книг</h2>

<table border="0" width="50%" cellpadding="5" style="margin: auto;">
	<tr>
		<?php 	
			include "scripts/DataBase.php";
			
			$res = DB::doQuery("SELECT COUNT(*) FROM `book`", $c, false, true);
			$page_count = ceil($res[0]/10);
			
			$url = "index.php?page=catalogue&p=1";
			echo "<th><a href=\"". $url ."\">". "<<" ."</a></th>";
			
			if(isset($_GET['p']))
			{
				if($_GET['p'] == "1")
				{
					echo "<th> < </th>";
				}
				else
				{
					$number = (int)$_GET['p'] - 1;
					$url = "index.php?page=catalogue&p=" . $number;
					echo "<th><a href=\"". $url ."\">". "<" ."</a></th>";
				}
			}
			else
			{
				echo "<th> < </th>";
			}
			
			for ($i = 1 ; $i <= $page_count ; $i++) {
				$url = "index.php?page=catalogue&p=" . $i;
				
				echo "<th><a href=\"". $url ."\">". $i ."</a></th>";
			}
			
			if(isset($_GET['p']))
			{
				if((int)$_GET['p'] == $page_count)
				{
					echo "<th> > </th>";
				}
				else
				{
					$number = (int)$_GET['p'] + 1;
					$url = "index.php?page=catalogue&p=" . $number;
					echo "<th><a href=\"". $url ."\">". ">" ."</a></th>";
				}
			}
			else
			{
				echo "<th> > </th>";
			}
			
			$url = "index.php?page=catalogue&p=" . $page_count;
			echo "<th><a href=\"". $url ."\">". ">>" ."</a></th>";		
		?>
	</tr>

<table border="2" width="100%" cellpadding="5">
	<tr>
		<th>Автор</th>
		<th>Название</th>
		<th>Издательство</th>
		<th>Год издания</th>
		<th>Кол-во страниц</th>
	</tr>

	<?php 
		
		$res = DB::doQuery("SELECT COUNT(*) FROM `book`", $c, false, true);
		$page_count = ceil($res[0]/10);
		
		for ($i = 0 ; $i < $page_count ; $i++) {
			if(isset($_GET['p']))
			{
				
			}
		}
		
		if(isset($_GET['p']))
		{
			$n = 10*((int)$_GET['p'] - 1);
			$result = DB::doQuery("SELECT DISTINCT `author`.`LastName`, `author`.`Name`, `author`.`Patronymic`, `book`.`Name`, `book`.`Publisher`, `book`.`Published_in`, `book`.`Pages`" .  
				"from `author` JOIN `author_has_book` on `Author_ID` = `author`.`ID` JOIN `book` on `book`.`ID` = `author_has_book`.`Book_ID` LIMIT " . $n . ", 10", $count, true, true);
		}
		else
			$result = DB::doQuery("SELECT DISTINCT `author`.`LastName`, `author`.`Name`, `author`.`Patronymic`, `book`.`Name`, `book`.`Publisher`, `book`.`Published_in`, `book`.`Pages`" .  
				"from `author` JOIN `author_has_book` on `Author_ID` = `author`.`ID` JOIN `book` on `book`.`ID` = `author_has_book`.`Book_ID` LIMIT 0, 10", $count, true, true);		
	 	      
		for ($i = 0 ; $i < $count ; $i++)
		{
			$row = mysqli_fetch_row($result);
			
			echo "<tr>";
				echo "<th>$row[0] $row[1] $row[2]</th>";
				echo "<th>$row[3]</th>";
				echo "<th>$row[4]</th>";
				echo "<th>$row[5]</th>";
				echo "<th>$row[6]</th>";
			echo "</tr>";
		}			
	?>	
	
</table><br><br><br>

<h6>Приветствуются любые пожертвования. Подробнее в разделе "<a href = "index.php?page=contacts">Контактная информация</a>".</h6>

</div>