<?php

	include("common.php");
	function redirect($url, $message = NULL){
		if($message){
			$_SESSION["message"] = $message;
		}
		header("Location: $url");
		die();
	}

	// the case that add an item to the list
	if(!$_POST["username"]){
		// empty item dispaly error message and redirect to todolist.php
		redirect("userinfo.php", "User name can not be empty!");
	}
	$name = $_POST["username"];
	$db = newPDO();

	if(findID($name, $db)){
?>
	<p> User name exists </p>
<?php
	}
?>