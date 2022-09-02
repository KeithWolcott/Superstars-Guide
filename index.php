<?php
  include 'config.php'; // Initialize database
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<title>Mario Party Superstars Guide</title>
<link rel="stylesheet" href="stylesheet.css" />
</head>
<body>
<div class="center">
<div class="container">
<img class="mainimage" src="<?php
$boards = array("Yoshis Tropical Island","Space Land","Peachs Birthday Cake","Woody Woods","Horror Land");
$minigames = array();
if ($conn) // if database connected
{
	$result = mysqli_query($conn, "select name from minigames order by rand() limit 5;");
	while ($row = mysqli_fetch_assoc($result))
	{
		array_push($minigames, $row["name"]);
	}
}
$selected = $boards[mt_rand(0, count($boards) - 1)];
echo "images/mainpage/" . str_replace(" ", "", $selected) . "main.png";
?>" alt="<?php echo $selected; ?>" />
<div class="mainheader"<?php
if ($selected == "Peachs Birthday Cake" || $selected == "Woody Woods" || $selected == "Yoshis Tropical Island")
	echo " style=\"color:black;\"";
?>>Mario Party Superstars Guide</div></div>
<div class="paragraph">
<p>Mario Party Superstars is the second installment in the Mario Party series for the Nintendo Switch. While the series is notorious for being reliant on luck, there can be some elements of skill that you can take advantage to help increase your chances of winning.</p>
</div>
<div class="options">
<div class="boardselect container">
<a href="boards.php">
<img alt="Boards" id="boards" src="<?php
$startingboard = mt_rand(0, count($boards) - 1);
$startingminigame = mt_rand(0, count($minigames) - 1);
echo "images/mainpage/" . str_replace(" ", "", $boards[$startingboard]) . ".png";
?>" />
<div class="optionheader">
Boards
</div></a>
</div>
<div class="minigameselect container">
<a href="minigames.php">
<img alt="Minigames" id="minigames" src="<?php
echo "images/minigamepage/" . $minigames[$startingminigame] . ".png";
?>" />
<div class="optionheader">
Minigames
</div></a>
</div>
</div>
<img class="boximage" src="images/mainpage/mariopartysuperstars.jpg" alt="Mario Party Superstars" />

<script>
var boards = ["YoshisTropicalIsland", "SpaceLand", "PeachsBirthdayCake", "WoodyWoods", "HorrorLand"];
var minigames = [<?php
for($i=0;$i<count($minigames);$i++)
{
	$minigames[$i] = '"' . $minigames[$i] . '"';
}
echo implode(", ", $minigames);
?>];
function gothroughimages(image, folder, arr, index)
{
	$("#" + image).delay(2500).fadeOut(function() {
        $(this).attr("src","images/" + folder + "/" + arr[index] + ".png").fadeIn(function() {
            gothroughimages(image, folder, arr, ((index + 1) % arr.length));
        });
    });    
}
gothroughimages("boards", "mainpage", boards, <?php echo ($startingboard + 1) % count($boards); ?>);
gothroughimages("minigames", "minigamepage", minigames, <?php echo ($startingminigame + 1) % count($minigames); ?>);
</script>
</body>
</html>