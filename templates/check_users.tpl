<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
	<meta http-equiv="Content-type"; content="text/html; charset=utf-8">
	<title>HOSTLIFE: Status Page</title>
	<link rel="stylesheet" href="/css/jquery-ui-1.8.17.custom.css" type="text/css" media="all"/>	
	<link rel="stylesheet" href="/css/check_user.css" type="text/css" media="all"/>	
	<script src="/js/jquery-1.6.2.min.js" type="text/javascript"></script>
	<script src="/js/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
	<script src="/js/panel.js" type="text/javascript"></script>
</head>	

<body>
	<form action="index.php" method="post">
		<div id="main" class="ui-corner-all">
			<div id="block_pad">	
				
				<h1>Авторизация</h1>
				
				<div id="login_field">
					<label for="login">Логин:</label>
					<input type="text" name="login" id="login" class="text ui-widget-content ui-corner-all"/>
				</div>
				
				<div id="password_field">								
					<label for="password">Пароль:</label>
					<input type="password" name="password" id="password" class="text ui-widget-content ui-corner-all"/>
				</div>
				
				<div id="button_field">
					<input type="submit" name="check" id="check" class="text ui-widget-content ui-corner-all" value="Вход"/>
				</div>
				
				<div id="content" class="ui-corner-all">{$response}</div>
			</div>
		</div>
	</form>
	
</body>

</html>
