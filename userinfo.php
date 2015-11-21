<!DOCTYPE html>
<!-- Common header and footer for all pages and display error message if there's any -->

<html>
	<head>
		<meta charset="utf-8" />
		<title>User Info</title>
	</head>


	<body>
		<h1>user info</h1>


			<form id="userinfo" action="submit.php" method="post">	

				<p>
					What university are you in?
				</p>
			 	<input name="university" type="text" size='20'/>

				<p>
					What is your class standing?
				</p>
				<select name = "standing">
					<option value="Freshman">Freshman</option>
					<option value="Sophomore">Sophomore</option>
					<option value="Junior">Junior</option>
					<option value="Senior">Senior</option>
				</select>
			</br>
				<p>
				<input type="submit" value="Submit" />
			</p>
		</form>

	</body>
</html>
