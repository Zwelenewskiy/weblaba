<?php if(isset($_GET['error'])) 
	echo "ОШИБКА"; 

echo "<form method=\"post\" action=\"../scripts/login.php\">
	<fieldset>
	<legend>Вход</legend>
	Логин: <input type = \"text\"  name = \"login\" value =  \"login2\"> <br> <br>
	Пароль: <input type = \"password\" name = \"password\" value =  \"pass\"> <br> <br>
	
	<input type = \"submit\" name = \"submit\" value = Oтправить>
	</fieldset>
</form>";