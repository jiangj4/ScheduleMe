<!DOCTYPE html>
<?php
	include("common.php");
	if (isset($_COOKIE['user'])) {
		$user = $_COOKIE['user'];
		$id = $_COOKIE['id'];
	} else {
		header('Location: index.php');
	}

	?>
	
	<h1> <?=$user?>'s Schedule </h1>
	
	<table id=schedule>
		<tr>
			<th></th>
			<th>Monday</th>
			<th>Tuesday</th>
			<th>Wednesday</th>
			<th>Thursday</th>
			<th>Friday</th>
		</tr>

	<?php
		for ($i = 7; $i <= 22; $i++) {
		?>
			<tr>
				<td><?=$i?>:00</td>
				
			</tr>
		<?php	
		}
			?>
			
	
	</table>

	
<?php bar(); ?>

