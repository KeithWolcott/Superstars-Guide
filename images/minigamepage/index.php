<?php
$g = glob("*.png");
$servername = "127.0.0.1"; // ip address for database
  $username = "root";
  $password = "";
  $port = "3306";
  $db = "thekeithwolcott"; // database name
  $conn = mysqli_connect($servername, $username, $password, $db, $port); // create connection
 
usort($g, function($x, $y) {
    return filectime($x) < filectime($y);
});
foreach ($g as $minigame)
{
	$minigame = substr($minigame, 0, -4);
	$query = "insert into minigames (name, title, image)
						VALUES ('" . mysqli_real_escape_string($conn, $minigame) . "', '1', 'images/minigamepage/" . mysqli_real_escape_string($conn, $minigame) . ".png');"; // insert with no phone number
		/*if ($query != "" && mysqli_query($conn, $query)) // if everything is okay
	{
	}
	*/
}
mysqli_close($conn);
?>