<!--
	common header and footer
	
	-->
<?php
	function newPDO(){
		$db = new PDO("mysql:dbname=scheduleme;host=localhost;charset=utf8", "root","");
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		return $db;
	}

	function findID($username, $db){
		$usernamequote = $db->quote($username);
	
		$query = "SELECT name
				  FROM Users
				  WHERE facebookid = $usernamequote
				  LIMIT 1";
		$rows = $db->query($query);

		if($rows->rowCount() > 0){
			// the actor is in the database, return its ID
			return true;
		}
		return false;
	}
?>
<html>
	<head>
	
		<title>Schedule Me</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="style.css" />
		<link rel="icon" type="image/png" href="icon.png" />
	</head>
	
	<body>
		

	<?php function bar() { ?>
		
		
	</body>

</html>

	<?php } ?>