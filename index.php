<?php		
	$pages = array
	(
		'header' => 'pages/header.html',
		'index' => 'pages/index.php',
		'about' => 'pages/about.php',
		'catalogue' => 'pages/catalogue.php',
		'contacts' => 'pages/contacts.php',
		'edit' => 'pages/edit.php',
		'footer' => 'pages/footer.html',
		'modal' => 'pages/modal.php',
	);	
	session_start();
	
	include $pages['header'];	
	
	if(isset($_GET['page']))
	{
		$_SESSION['page'] = $_GET['page'];	
		include $pages[$_GET['page']];
	}
	else
		include $pages['index'];
	
	include $pages['footer'];
?>