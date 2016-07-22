<html>

<head>
	<meta http-equiv="Content-type"; content="text/html; charset=utf-8">
	<title>State Of Servers</title>
	<link rel="stylesheet" href="css/style_panel.css" type="text/css" />	
	<link rel="stylesheet" href="css/jquery-ui-1.8.17.custom.css" type="text/css" media="all"/>	
	<script src="js/jquery-1.6.2.min.js" type="text/javascript"></script>
	<script src="js/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
	<script src="js/timepicker.js" type="text/javascript"></script>
	<script src="js/javascripts.js" type="text/javascript"></script>
</head>	


<body>

	<div id="dialog_ukr_dc" title="Ukraine DC">
			<br>
			<label for="ukr_status">Status:</label>
			<select name="ukr_status" id="ukr_status" class="text ui-widget-content ui-corner-all" >
				<option value="1">not problem</option>			
				<option value="2">problem</option>
			</select>
			
			<label for="ukr_short_comments">Status message:</label>
			<input type="text" name="ukr_short_comments" id="ukr_short_comments" class="text ui-widget-content ui-corner-all dc"/><br>
									
			<label for="ukr_comments">Full comments:</label>
			<textarea rows="13" cols="89" name="ukr_comments" id="ukr_comments" class="text ui-widget-content ui-corner-all textarea_cont"></textarea>
	</div>
	
	<div id="dialog_de_dc" title="Germany DC">
			<br>
			<label for="de_status">Status:</label>
			<select name="de_status" id="de_status" class="text ui-widget-content ui-corner-all" >
				<option value="1">not problem</option>	
				<option value="2">problem</option>
			</select>	
			
			<label for="de_short_comments">Status message:</label>
			<input type="text" name="de_short_comments" id="de_short_comments" class="text ui-widget-content ui-corner-all dc"/><br>

			<label for="de_comments">Full comments:</label><br>
			<textarea rows="13" cols="89" name="de_comments" id="de_comments" class="text ui-widget-content ui-corner-all textarea_cont"></textarea>
	</div>
	
	<div id="dialog_news_dc" title="News DC">
			<br>
			<label for="news_short_comments">Title of news:</label>
			<input type="text" name="news_short_comments" id="news_short_comments" class="text ui-widget-content ui-corner-all news" />
			
			<label for="final_time">&nbspFinal time:</label>
			<input type="text" name="final_time" id="final_time" class="text ui-widget-content ui-corner-all datatimepicker"/><br>
			
			<label for="news">News:</label><br>
			<textarea rows="13" cols="89" name="news" id="news" class="text ui-widget-content ui-corner-all textarea_cont"></textarea>
	</div>
	
	<div id="page">
			<div id="top">
				<div id="logo"><img src="images/logo.png" ></div>
				<div id="search">Учет статистики работы площадок Украины и Германии</div>
			</div>
			<div id="menu">
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td width="10"><img src="images/ml.png" width="10" height="58" alt=""></td>
					<td>
						<table border="0" align="center" cellpadding="0" cellspacing="0">
							<tr>
								<td class="item"><span style='cursor: pointer'><a href="http://hostlife.net">Site company</a></span></td>
								<td class="item"><span style='cursor: pointer'><a id='ukr_dc'>Ukraine DC</a></span></td>
								<td class="item"><span style='cursor: pointer'><a id='de_dc'>Germany DC</a></span></td>
								<td class="item"><span style='cursor: pointer'><a id='news_dc'>News</a></span></td>
							</tr>
						</table>
					</td>
					<td width="10"><img src="images/mr.png" width="10" height="58" alt=""></td>
				</tr>
				</table>
			</div>
		
			<div id="content_wrap">
					<br>
					<center><h1>Архив новостей.</h1></center>
					<br>
					<table align="center" border=1 id="news_tabl" class="ui-widget ui-widget-content" rules="all">
					<tr align="center" class="ui-widget-header">
							<th width="200px">Title of news</th>
							<th width="100px">Edit</th>
							<th width="150px">Delete</th>
					</tr>	
						{foreach $news as $item}
							<tr>	
								<td>{$item.short_comment}</td>
								<td><center><span style="cursor: pointer;"><a href= "?a=edit&id={$item.id}" style='color:blue' class="text ui-widget-content ui-corner-all" name="eitem[]" id="edit-item">Edit</a></span></center></td>
								<td><center><span style="cursor: pointer;"><a href= "?a=delete&id={$item.id}" style='color:blue' class="text ui-widget-content ui-corner-all" name="eitem[]" id="edit-item">Edit</a></span></center></td>
							</tr>
						{/foreach}
					
					</table>
					<br><br>
			</div>
			
		<div id="footer">
			<div id="bottom_addr">© 2012 HOSTLIFE. All Rights Reserved</div>
		</div>
		
	</div>
	
</body>

</html>