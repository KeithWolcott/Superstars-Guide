<?php
include 'config.php';
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<title>Minigames - Mario Party Superstars Guide</title>
<link rel="stylesheet" href="stylesheet.css" />
</head>
<body>
<div class="center">
<a href="index.php"><img class="boximage" src="images/mainpage/mariopartysuperstars.jpg" alt="Mario Party Superstars" /></a>
<a id="boards"></a><h1>Minigames</h1>
<div class="minigametypes">
<div class="minigametype selectminigame">
<img src="images/minigamepage/alltypes.png" alt="All Types">
<p>All Types</p>
</div>
<div class="minigametype">
<img src="images/minigamepage/family.png" alt="Family">
<p>Family</p>
</div>
<div class="minigametype">
<img src="images/minigamepage/action.png" alt="Action">
<p>Action</p>
</div>
<br>
<div class="minigametype">
<img src="images/minigamepage/nintendo64.png" alt="Nintendo 64">
<p>Nintendo 64</p>
</div>
<div class="minigametype">
<img src="images/minigamepage/gamecube.png" alt="GameCube">
<p>GameCube</p>
</div>
<div class="minigametype">
<img src="images/minigamepage/skill.png" alt="Skill">
<p>Skill</p>
</div>
</div>
<div class="minigamesection">
<a name="4player"></a><h2>4-Player Minigames</h2>
<?php
function printminigames($conn, $databasename)
{
	$finalstr = "";
	if ($conn) // if database connected
	{
		$result = mysqli_query($conn, "select $databasename.id, name, title, image from minigames inner join $databasename on minigames.id = $databasename.id;");
		while ($row = mysqli_fetch_assoc($result))
		{
			$finalstr .= "<div class=\"minigame\" id=\"{$row["id"]}\"><a href=\"minigame.php?id={$row["id"]}\"><img class=\"minigameimg\" src=\"{$row["image"]}\" alt=\"{$row["name"]}\" title=\"{$row["name"]}\"><br><img src=\"images/titles/{$row["title"]}.png\" alt=\"Mario Party {$row["title"]}\"><br>{$row["name"]}</a></div>\r\n";
		}
	}
	return $finalstr;
}
echo printminigames($conn, "4playerminigames");
?>
</div>
<div class="minigamesection">
<a name="1vs3"></a><h2>1-vs-3 Minigames</h2>
<?php
echo printminigames($conn, "1vs3minigames");
?>
</div>
<div class="minigamesection">
<a name="2vs2"></a><h2>2-vs-2 Minigames</h2>
<?php
echo printminigames($conn, "2vs2minigames");
?>
</div>
<div class="minigamesection">
<a name="coin"></a><h2>Coin Minigames</h2>
<?php
echo printminigames($conn, "coinminigames");
?>
</div>
<div class="minigamesection">
<a name="duel"></a><h2>Duel Minigames</h2>
<?php
echo printminigames($conn, "duelminigames");
?>
</div>
<div class="minigamesection">
<a name="bowser"></a><h2>Bowser Minigames</h2>
<?php
echo printminigames($conn, "bowserminigames");
?>
</div>