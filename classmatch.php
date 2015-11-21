<?php

include("common.php");
$db = newPDO();
$query = "SELECT distinct u2.name, u2.facebookid FROM Class c1, class c2, Users u1, Users u2 WHERE c1.name = c2.name AND c1.studentid = u1.facebookid AND c2.studentid = u2.facebookid";
$rows = $db->query($query);
if($rows->rowcount() >0){
	foreach($rows as $row){
	?>
	<a href="https://facebook.com/<?=$row["facebookid"]?>">
		<?=$row["name"]?>
	</a>
	</br>
<?php 
	}
}
?>