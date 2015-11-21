<!DOCTYPE html>

<?php
	include("common.php");
	?>
	
	<div id="back">
		<h1> Welcome to Schedule Me </h1>
	
		<?php
			if (isset($_COOKIE['user'])) {
			?>
				<div id="logging">
					<a href="start.php"> <img src="schedule.png" alt="schedule" /> </a>
				</div>
		<?php
			} else {
				require_once 'Facebook/src/Facebook/autoload.php';
				session_start();
				$fb = new Facebook\Facebook([
				  'app_id' => '182514175427057',
				  'app_secret' => '{bcc9a0ead0cca5775dcd8b8c9e68baf4}',
				  'default_graph_version' => 'v2.5',
				]);

				$helper = $fb->getRedirectLoginHelper();

				$permissions = ['email']; // Optional permissions
				$loginUrl = $helper->getLoginUrl('http://localhost/Hackathon/fb-callback.php', $permissions);
				$loginUrl = htmlspecialchars($loginUrl);
			?>
				
				<div id="logging">
					<a href=<?=$loginUrl?>> <img src="facebook-login-button.png" alt="facebook" /> </a>
				</div>
		<?php
			}
			?>
	</div>

	
	<?php bar(); ?>