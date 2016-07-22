<?php /* Smarty version Smarty-3.1.3, created on 2012-03-04 15:48:51
         compiled from "templates/check_users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9952108974e985a282eb0b4-73958943%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df01d783fb918a9201ee8493521b3ef94ee54ac9' => 
    array (
      0 => 'templates/check_users.tpl',
      1 => 1330868800,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9952108974e985a282eb0b4-73958943',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_4e985a283386d',
  'variables' => 
  array (
    'response' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4e985a283386d')) {function content_4e985a283386d($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
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
				
				<div id="content" class="ui-corner-all"><?php echo $_smarty_tpl->tpl_vars['response']->value;?>
</div>
			</div>
		</div>
	</form>
	
</body>

</html>
<?php }} ?>