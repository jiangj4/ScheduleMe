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
		$db = newPDO();
		for ($i = 7; $i <= 22; $i++) {
		?>
			<tr id=<?=$i?>>
				<td><?=$i?>:00</td>
			
		<?php
			for ($j = 0; $j < 5; $j++) {
	
				$query = "SELECT distinct c.name, c.start FROM class c WHERE $i >= c.start AND $i <= c.end AND c.studentid = $id LIMIT 1";
			
				$rows = $db->query($query);
				if ($rows->rowCount() > 0) {
					$row = $rows->fetch();
					if ($row["start"] == $i) {
						
					?>	
						<td class="selected"><?=$row["name"]?></td>
					<?php
					} else {
						?>
						<td class="selected"></td>
						
			<?php
					}
				} else {
				?>
					<td></td>
			<?php
				}
			}
				?>
				
			</tr>
		<?php	
		}
			?>
			
	
	</table>
	
	<form id="loginform" action="classmatch.php" method="post">
		<div><input name="department" type="text" size="8" /> <strong>Department</strong></div>
		<div><input name="class" type="text" size="8" autofocus="autofocus" /> <strong>Class</strong></div>
		<div><input name="start" type="text" size="8" /> <strong>Start time</strong></div>
		<div><input name="end" type="text" size="8" /> <strong>End time</strong></div>
		<div><input type="submit" value="add class" /></div>
		<div><input type="submit" value="find other" /></div>
	</form>
	
	<a href="https://www.facebook.com/search/str/<?=$row["name"]?>/keywords_groups">Find Groups</a>

	
<?php bar(); ?>

