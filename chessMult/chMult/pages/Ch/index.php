<?php
	
	session_start();
	/* 
		If New opponent button is pushed the player is redirected to indexMult.
		This page checks if it has a gameId and if so it deletes the gameId for the user
		and the opponent
		The function DisplayMessageInGame() in chatBoxInGame.js is displaying the chats with a timeinterval. 
		It also check whether a user has 
		a gameId, if not it is also redirected to intexMult.php
	*/
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<META HTTP-EQUIV=Refresh; 
		<meta charset="utf-8">
		<meta name="keywords" content="Chess, Engine, Javascript, Play Chess, Chess Program, Javascript Chess, Game">
		<link rel="stylesheet" href="styles.css"> 
		<title>Multiplayer Chess Game</title>
		<link href="js/styles.css" rel="stylesheet" type="text/css">
		<script type="text/javascript"> if (!window.console) console = {log: function() {}}; </script>
	</head>
	<body>
		<header>
			<h3><marquee direction="right">Welcome To Multiplayer Chess Game</marquee></h3>		
			
		</header>
		   
		<input type="submit" onclick="parent.location='../indexMult.php'" id="deleteGame-submit" value="New Opponent">
		<h2>Welcome <span style="color:green"><?php echo $_SESSION['UserName'];?>! </span>You are playing against <span style="color:red"><?php echo $_SESSION['Opponent'];?>! </span>
		</h2>	
		<div id="FenInDiv">			
			<input type="text" id="fenIn"/>		
			<button type="button" id="SetFen">Status Of Game At Particular Move</button>	
		</div>	
		<div id="Board">
		</div>				
		<div id="ChatMessages">
		</div>
		<div id="AvailablePlayers"></div>
		
		<div id="ChatMessages"></div>
		<div id="ChatBig"> 
			<span style="color:green">Chat</span><br/>
			<textarea id="ChatText" name="ChatText"></textarea>
		</div>
		<button type="button" id="NewGameButton">New Game</button><br/>
		<span id="GameStatus"></span>
		<div id="EngineOutput"><br/>
			<button type="button" id="FlipButton">Flip Board To see Oppenent View</button><br/><br/>
			
		</div>
		

		<script src="js/jquery-1.10.1.min.js"></script>
		<script src="js/defs.js"></script>
		<script src="js/io.js"></script>
		<script src="js/board.js"></script>
		<script src="js/movegen.js"></script>
		<script src="js/makemove.js"></script>
		<script src="js/perft.js"></script>
		<script src="js/evaluate.js"></script>
		<script src="js/pvtable.js"></script>
		<script src="js/search.js"></script>
		<script src="js/protocol.js"></script>
		<script src="js/guiMultiPlayer.js"></script>
		<script src="js/main.js"></script>
		<script src="js/deleteDB.js"></script>
		<script src="../../js/chatboxInGame.js"></script>	
	</body>
</html>