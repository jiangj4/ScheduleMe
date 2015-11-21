<?php
	include("common.php");
	if (isset($_COOKIE['user'])) {
		$user = $_COOKIE['user'];
		$id = $_COOKIE['id'];
	} else {
		header('Location: index.php');
	}


	// the case that add an item to the list
	if(!$_POST["university"]){
		// empty item dispaly error message and redirect to todolist.php
		header('Location: userinfo.php');
	}
	$university = $_POST["university"];
	$standing = $_POST["standing"];
	$db = newPDO();

	$deletecolum = "DELETE FROM Users WHERE facebookid = $id";

	$query = "INSERT INTO users(name, university, classStanding, facebookid) VALUES ('$user', '$university', '$standing', '$id')";

	$db->exec($deletecolum);
	$db->exec($query);

	header('Location: home.php');

?>