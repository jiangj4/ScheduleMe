
<?php
	
	
	//remember to set cookie
	if (isset($_COOKIE['user'])) {
		$user = $_COOKIE['user'];
		$id = $_COOKIE['id'];
	} else {
		header('Location: index.php');
	}
	// check user exists in our database, if so, redirect to home.php 
	//if not, store the user, ask its university, class standing...
	
	header('Location: home.php');
	
	?>