<?php
include 'config.php';
$minigameid = $_GET["id"];
if (!$conn || !isset($_GET["id"]) || !is_numeric($_GET["id"]))
{
	header("Location: minigames.php");
}
$minigames = array();
$result = mysqli_query($conn, "select name, image, minigames.title, previousminigame, nextminigame, youtubeurl, youtubestart, youtubeend, consolename, description from minigames inner join youtube on minigames.id = youtube.minigame inner join games on minigames.title = games.id inner join consoles on games.console = consoles.id inner join minigameinstructions on minigames.id = minigameinstructions.id where minigames.id = $minigameid;");
$invalidminigame = false;
if (mysqli_num_rows($result) < 1)
{
	$invalidminigame = true;
}
else
{
	$row = mysqli_fetch_assoc($result);
	$name = $row["name"];
	$image = $row["image"];
	$title = $row["title"];
	$youtubeurl = $row["youtubeurl"];
	$youtubestart = $row["youtubestart"];
	$youtubeend = $row["youtubeend"];
	$console = $row["consolename"];
	$description = str_replace("\r\n","<br>",$row["description"]);
	$result2 = mysqli_query($conn, "select * from minigames where id = {$row["previousminigame"]};");
	$result3 = mysqli_query($conn, "select * from minigames where id = {$row["nextminigame"]};");
	$row2 = mysqli_fetch_assoc($result2);
	$row3 = mysqli_fetch_assoc($result3);
	$previnfo = array($row2["id"], $row2["name"], $row2["image"]);
	$nextinfo = array($row3["id"], $row3["name"], $row3["image"]);
}
if (!$invalidminigame)
{
	$result4 = mysqli_query($conn, "select name from minigames where id <> $minigameid and id <> {$previnfo[0]} and id <> {$nextinfo[0]} order by rand() limit 5;");
	while ($row = mysqli_fetch_assoc($result4))
	{
		array_push($minigames, $row["name"]);
	}
	$startingminigame = mt_rand(0, count($minigames) - 1);
}
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<title><?php
if ($invalidminigame)
{
	echo "Invalid Minigame";
}
else
{
	echo $name;
}
?> - Mario Party Superstars Guide</title>
<link rel="stylesheet" href="stylesheet.css" />
</head>
<body><div class="center"><div class="minigameinstruction">
<?php
if ($invalidminigame)
{
	echo "<div class=\"minigameinfo\"><h1>Invalid Minigame</h1></div></div><p><a href=\"minigames.php\">Back to minigames</a></p>";
}
else
{
	echo "<div class=\"minigameinfo\"><h1>$name</h1><span class=\"consoleinfo\"><img src=\"images/consoles/$console.png\" alt=\"$console\"> <img src=\"images/titles/big/$title.png\" alt=\"Mario Party $title\"></span></div>\r\n\r\n<div class=\"minigamevideodiv\"><iframe width=\"630\" height=\"354\" src=\"https://www.youtube.com/embed/{$youtubeurl}?start={$youtubestart}&end={$youtubeend}\" frameborder=\"0\" allow=\"accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe><div class=\"controls\"><img src=\"images/minigamecontrols/header.png\" width=\"500\" alt=\"Controls\"><br><img src=\"images/minigamecontrols/$minigameid.png\" width=\"500\"></div></div><div class=\"minigameinfo\"><img src=\"images/Toad.png\" alt=\"Toad\" class=\"speechbubble\"> <div class=\"minigameinstructions\"><img src=\"images/speechbubble.png\" class=\"speechbubble\"><div class=\"minigameinstructionbox\">$description</div></div></div></div>";
	
	include 'minigameinfo/' . $minigameid . '.html';
	
	echo "<hr>\r\n<table class=\"minigameselect\"><tr><td><div class=\"minigame\"><a href=\"minigame.php?id={$previnfo[0]}\"><img class=\"minigameimg\" src=\"{$previnfo[2]}\" alt=\"{$previnfo[1]}\" title=\"{$previnfo[1]}\"><br>Previous Minigame</a></div></td>\r\n<td><div class=\"minigame\"><a href=\"minigames.php\"><img class=\"minigameimg\" src=\"images/minigamepage/" . $minigames[$startingminigame] . ".png\" id=\"allminigames\" alt=\"Minigames\" title=\"All Minigames\"><br>Back to Minigames</a></div></td>\r\n<td><div class=\"minigame\"><a href=\"minigame.php?id={$nextinfo[0]}\"><img class=\"minigameimg\" src=\"{$nextinfo[2]}\" alt=\"{$nextinfo[1]}\" title=\"{$nextinfo[1]}\"><br>Next Minigame</a></div></td></tr></table><script>
var minigames = [";
for($i=0;$i<count($minigames);$i++)
{
	$minigames[$i] = '"' . $minigames[$i] . '"';
}
$firstminigame = ($startingminigame + 1) % count($minigames);
echo implode(", ", $minigames) . "];
function gothroughimages(image, folder, arr, index)
{
	$(\"#\" + image).delay(2500).fadeOut(function() {
        $(this).attr(\"src\",\"images/\" + folder + \"/\" + arr[index] + \".png\").fadeIn(function() {
            gothroughimages(image, folder, arr, ((index + 1) % arr.length));
        });
    });    
}
gothroughimages(\"allminigames\", \"minigamepage\", minigames, $firstminigame);
</script>";
}
?></div>

</body>
</html>