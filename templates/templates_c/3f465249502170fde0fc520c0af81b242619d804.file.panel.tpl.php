<?php /* Smarty version Smarty-3.1.3, created on 2012-02-27 15:50:05
         compiled from "templates/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3351907354f2bb539c99f22-13770884%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f465249502170fde0fc520c0af81b242619d804' => 
    array (
      0 => 'templates/panel.tpl',
      1 => 1330350604,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3351907354f2bb539c99f22-13770884',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_4f2bb539cf7f5',
  'variables' => 
  array (
    'num_news' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f2bb539cf7f5')) {function content_4f2bb539cf7f5($_smarty_tpl) {?><!DOCTYPE XHTML>

<html>

<head>
	<meta http-equiv="Content-type"; content="text/html; charset=utf-8">
	<title>HOSTLIFE: Status Page</title>
	<link rel="stylesheet" href="/css/style_panel.css" type="text/css" media="all"/>	
	<link rel="stylesheet" href="/css/jquery-ui-1.8.17.custom.css" type="text/css" media="all"/>	
	<script src="/js/jquery-1.6.2.min.js" type="text/javascript"></script>
	<script src="/js/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
	<script src="/js/functions.js" type="text/javascript"></script>
	<script src="/js/panel.js" type="text/javascript"></script>
	<script src="/js/jquery.jqpagination.js" type="text/javascript"></script>
	<script src="/js/jquery.jqpagination.min.js" type="text/javascript"></script>
	<script src="/js/jquery.listen.js" type="text/javascript"></script>
</head>	

<body>

	<div id="dialog_status_content_de" title="Техническое описание Немецкой площадки">
		<p><div name="status_content_de" id="status_content_de"></div></p>
	</div>
	
	<div id="dialog_status_content_ukr" title="Техническое описание Украинской площадки">
		<p><div name="status_content_ukr" id="status_content_ukr"></div></p>	
		
	</div>
	
	<div id="page">
		<div id="top">
			<div id="logo"><img src="images/logo.jpg" width="72" height="62" alt=""></div>
			<div id="company_name"><span>NOC&nbsp</span>HOSTLIFE</div>
			<div id="search">Статистика работы площадок Украины и Германии</div>
		</div>
		<div id="menu">
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td width="10"><img src="images/ml.png" width="10" height="58" alt=""></td>
				<td>
					<table border="0" align="center" cellpadding="0" cellspacing="0">
						<tr>
							<td class="item"><span style='cursor: pointer'><a href="http://hostlife.net">Hostlife</a></span></td>
							<td class="item"><span style='cursor: pointer'><a href="index.php">Площадки "HOSTLIFE"</a></span></td>
							<td class="item"><span style='cursor: pointer'><a href="main.html">Информация</a></span></td>
							<td class="item"><span style='cursor: pointer'><a href="?a=logout">Выход</a></span></td>
						</tr>
					</table>
				</td>
				<td width="10"><img src="images/mr.png" width="10" height="58" alt=""></td>
			</tr>
			</table>
		</div>
		
		<div id="content_wrap">
					<div id="title_1" class="title"></div><br>
					<table width="100%">
					<tr>
						<td valign="top" align="center" width="50%">
							<span style='cursor: pointer'><div id="de_server" class="ui-widget-content ui-corner-all"></div></span>
						</td>
						<td valign="top" align="center" width="50%">
							<span style='cursor: pointer'><div id="ukr_server" class="ui-widget-content ui-corner-all"></div></span>
						</td>
					</tr>
					</table><br>

					<div id="title_2" class="title"></div><br>
					<div id="news"></div>
					<div class="pagination" id="pagination">
							<a href="#" class="first" data-action="first">&laquo;</a>
							<a href="#" class="previous" data-action="previous">&lsaquo;</a>
							<input type="text" readonly="readonly" data-max-page="<?php echo $_smarty_tpl->tpl_vars['num_news']->value;?>
" value="1"/>
							<a href="#" class="next" data-action="next">&rsaquo;</a>
							<a href="#" class="last" data-action="last">&raquo;</a>
					</div>
					
		</div>
		
		<div id="footer">
			<div id="bottom_addr">© 2012 HOSTLIFE. All Rights Reserved</div>
		</div>
	</div>

	<div style="position:absolute;left:-3072px;top:0" align="center"><a href="http://smarttop.info">Рейтинг сайтов</a> <a href="http://ds-webevent.com">Шаблоны сайтов</a></div>
	
</body>

</html>
<?php }} ?>