
<?php
	
	include("common.php");
	
	//remember to set cookie
	if (isset($_COOKIE['user'])) {
		$user = $_COOKIE['user'];
		$id = $_COOKIE['id'];
		$db = newPDO();
	//	echo($id);
	//	echo($user);
	//	echo(verifyUser($id, $db));
		if(verifyUser($id, $db))
			header('Location: home.php');
		else
			header('Location: userinfo.php');
	} else {
		header('Location: index.php');
	}


	// check user exists in our database, if so, redirect to home.php 
	//if not, store the user, ask its university, class standing...
	
	?>