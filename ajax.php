<?php
	require_once('./config.php');
	if($_SERVER['HTTP_X_REQUESTED_WITH']=='XMLHttpRequest') {
		if(isset($_POST['a'])) {
			$action=$_POST['a'];
			if($action=="ukr_server") {		
				$ukr_status=$_POST['ukr_status'];
				$ukr_short_comments=$_POST['ukr_short_comments'];
				$ukr_comments=$_POST['ukr_comments'];
				$sql1=$db->query("UPDATE `servers` SET `status`='$ukr_status',`short_comments`='$ukr_short_comments',`comments`='$ukr_comments' WHERE `name`='ukr'"); 			
			}			
			if($action=="de_server") {		
				$de_status=$_POST['de_status'];
				$de_short_comments=$_POST['de_short_comments'];
				$de_comments=$_POST['de_comments'];
				$sql1=$db->query("UPDATE `servers` SET `status`='$de_status',`short_comments`='$de_short_comments',`comments`='$de_comments' WHERE `name`='de'"); 
			}			
			if($action=="inf_server") {		
				$inf_status=$_POST['inf_status'];
				$inf_short_comments=$_POST['inf_short_comments'];
				$inf_comments=$_POST['inf_comments'];
				$sql1=$db->query("UPDATE `servers` SET `status`='$inf_status',`short_comments`='$inf_short_comments',`comments`='$inf_comments' WHERE `name`='inf'"); 
			}		
			if($action=="main_information") {		
				$main_information=$_POST['main_information'];
				$sql1=$db->query("UPDATE `news` SET `datetime`=NOW(),`content`='$main_information' WHERE `type_news`='main_page'"); 				
			}
			if($action=="news") {		
				$news=$_POST['news'];
				$news_short_comments=$_POST['news_short_comments'];
				$final_time=$_POST['final_time'];
				$sql1=$db->query("INSERT INTO `news`(`start_time`,`final_time`, `short_comment`, `content`) VALUES ('$start_time','$final_time','$news_short_comments','$news')"); 				
			}
			$db->close();
		}
	}
?>