<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="keywords" content="Chess, Engine, Javascript, Play Chess, Chess Program, Javascript Chess, Game">
		<title>JMultiplayer Chess Game</title>	
		<script type="text/javascript"> if (!window.console) console = {log: function() {}}; </script>
	</head>
	<body>
		<header>
			<h3><marquee direction="right">Welcome to multiplayer Chess Game</marquee></h3>
		</header>
			<input type="submit" id="multiplayer_submit" 
			onclick="parent.location='chMult/pages/UserLogin.php'" 
			value="Multiplayer game">				
		</div>
		<?php include 'php_pages/loginForm.php'; ?>	
	
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="chMult/js/bootstrap.min.js"></script>		
		<script src="chMult/js/jquery-1.10.1.min.js"></script>
		<script src="chMult/js/buttons/loginlogout.js"></script>
		<script src="chMult/js/buttons/register.js"></script>
	</body>
</html>
