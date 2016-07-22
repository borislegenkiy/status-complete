<?php
	require_once('libs/smarty/Smarty.class.php');
	require_once('./config.php');
	session_start();
	
	$smarty = new Smarty ();
	
	$smarty->template_dir='templates/';
	$smarty->compile_dir='templates/templates_c/';

	//check password
	if (isset($_POST['login']) && isset($_POST['password'])) {
		$login = $_POST['login'];
		$password = $_POST['password'];
		if ($login==USER && $password==PASS) {
			$_SESSION['auth'] = 1;
		}
		else {
		  $vars['response']="Неверный логин и/или пароль.";
		}
	}	
	
	if($_SESSION['auth'] == 1) {
		$sql = $db->query("SELECT `id`,`final_time`,`short_comment`,`content` FROM `news` ORDER BY `id` DESC");
		$news = array();
		while ($row = $sql->fetch_assoc()) {				 
			$news[] = $row;
		}
		$sql->close();
		$vars['news'] = $news;	
		$template = 'main';			
		//close DB
		$db->close(); 
	}
	else {		
		$template = 'check_users';		
	}
	
	$smarty->assign($vars);
	$smarty->display($template . '.tpl');
?>