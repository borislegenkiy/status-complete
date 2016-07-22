$(function() {
var	ukr_status = $( "#ukr_status" ),
	de_status = $( "#de_status" ),
	ukr_short_comments = $( "#ukr_short_comments" ),
	de_short_comments = $( "#de_short_comments" ),
	ukr_comments = $( "#ukr_comments" ),
	de_comments = $( "#de_comments" ),
	news = $( "#news" ),
	news_short_comments = $( "#news_short_comments" ),
	final_time = $( "#final_time" ),
	allFields = $( [] ).add(ukr_status).add(de_status).add(ukr_short_comments).add(de_short_comments).add(ukr_comments).add(de_comments).add(news).add(news_short_comments).add(final_time);
	
	function checkLength( o, n, min, max ) {
		if ( o.val().length > max || o.val().length < min ) {
			o.addClass( "ui-state-error" );
			updateTips( "Length of " + n + " must be between " +
				min + " and " + max + "." );
			return false;
		} else {
			return true;
		}
	}
	
	
	$( "#final_time" ).datetimepicker();
	$( "#final_time" ).datetimepicker( "option", "dateFormat", "dd.mm.yy");	
	
	
	$( "#dialog_ukr_dc" ).dialog({
			autoOpen: false,
			height: 550,
			width: 910,
			modal: true,
			buttons: {
				"Input status": function() {				
					var bValid = true;
					allFields.removeClass( "ui-state-error" );
					bValid = bValid && checkLength( ukr_short_comments, "ukr_short_comments", 1, 41);
					if (bValid) {					
						$.ajax({
							url: "ajax.php",
							type: "POST",
							cashe: false,
							data: "a=ukr_server"+"&ukr_status="+ ukr_status.val()+"&ukr_short_comments="+ ukr_short_comments.val()+"&ukr_comments="+ ukr_comments.val()
						});
					}
					$( this ).dialog( "close" );
					allFields.val( "" ).removeClass( "ui-state-error" );					
				},
				Cancel: function() {
					allFields.val( "" ).removeClass( "ui-state-error" );
					$( this ).dialog( "close" );
				}
			},
			close: function() {
				allFields.val( "" ).removeClass( "ui-state-error" );
			}
	});
		
	$( "#dialog_de_dc" ).dialog({
		autoOpen: false,
		height: 550,
		width: 910,
		modal: true,
		buttons: {
			"Input status": function() {				
				var bValid = true;
				bValid = bValid && checkLength( de_short_comments, "de_short_comments", 1, 41);
				if (bValid) {
					$.ajax({
						url: "ajax.php",
						type: "POST",
						cache: false,
						data: "a=de_server"+"&de_status="+ de_status.val()+"&de_short_comments="+ de_short_comments.val()+"&de_comments="+ de_comments.val()
					});
				}
				$( this ).dialog( "close" );
				allFields.val( "" ).removeClass( "ui-state-error" );
			},
			Cancel: function() {
				allFields.val( "" ).removeClass( "ui-state-error" );
				$( this ).dialog( "close" );
			}
		},
		close: function() {
			allFields.val( "" ).removeClass( "ui-state-error" );
		}
	});
		
	$( "#dialog_news_dc" ).dialog({
		autoOpen: false,
		height: 550,
		width: 910,
		modal: true,
		buttons: {
			"Input news": function() {				
				$( "#final_time" ).datetimepicker("option", "dateFormat", "yy-mm-dd");	
				var bValid = true;
				bValid = bValid && checkLength( news_short_comments, "news_short_comments", 1, 53);
				if(bValid) {
					$.ajax({
						url: "ajax.php",
						type: "POST",
						cashe: false,
						data: "a=news"+"&news="+ news.val()+"&news_short_comments="+ news_short_comments.val() + "&final_time="+ final_time.val()
					});
				}
				
				$( this ).dialog( "close" );
				allFields.val( "" ).removeClass( "ui-state-error" );
			},
			Cancel: function() {
				allFields.val( "" ).removeClass( "ui-state-error" );
				$( this ).dialog( "close" );
			}
		},
		close: function() {
			allFields.val( "" ).removeClass( "ui-state-error" );
		}
	});
			
	$( "#ukr_dc" )
		.click(function() {	
			$( "#dialog_ukr_dc" ).dialog( "open" );
	});
	
	$( "#de_dc" )
		.click(function() {
			$( "#dialog_de_dc" ).dialog( "open" );
	});
	
	$( "#news_dc" )
		.click(function() {	
			$( "#dialog_news_dc" ).dialog( "open" );		
	});
	
});