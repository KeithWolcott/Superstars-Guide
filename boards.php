<!DOCTYPE HTML>
<html lang="en-US">
<head>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<title>Boards - Mario Party Superstars Guide</title>
<link rel="stylesheet" href="stylesheet.css" />
</head>
<body>
<div class="center">
<a href="index.php"><img class="boximage" src="images/mainpage/mariopartysuperstars.jpg" alt="Mario Party Superstars" /></a>
<a id="boards"></a><h1>Boards</h1>
<p>The first thing you do is select the board you will be playing on.</p>
<div class="chooseboard">
<img src="images/boardpage/leftarrow.png" alt="Previous Board" class="arrow" onclick="previousboard();">
<img src="images/boardpage/YoshisTropicalIsland.png" alt="Yoshi's Tropical Island" id="board" onclick="gotoboard();" />
<img src="images/boardpage/rightarrow.png" alt="Next Board" class="arrow" onclick="nextboard();" >
</div>
<p id="description">Explore two islands connected by bridges. Pay attention to which you want to be on!</p>
<p>Then, there's three options for Bonus Stars.</p>
<div class="bonusstars">
<img src="images/boardpage/nobonusstars.png" alt="No Bonus Stars" />
<div class="bonusstarheading">No Bonus Stars</div>
<p>When this is selected, there will be no bonus stars. The results after the last minigame are the final results.</p>
<hr>
<img src="images/boardpage/bonusstars.png" alt="Bonus Stars" />
<div class="bonusstarheading">Bonus Stars</div>
<p>When this is selected, two bonus stars will be handed at the end of the game. There's a total of <em>nine</em>, and any of them can be selected. Due to this, it is rather unrealistic to try to go for every one, but knowing what they are can help you know whether these can help you or not. They are:</p>
<ul>
<li><strong>Minigame Bonus</strong> - Awarded to the player(s) who won the most minigames. It is not based on the number of coins received, like in other Mario Party titles. For Coin Minigames, collecting any coins at all is considered a win.</li>
<li><strong>Rich Bonus</strong> - Awarded to the player(s) who collected the most coins. Unlike the Coin Star, this is not whoever had the highest coin total at any point in the game. Rather, it's the coin received everywhere, from Blue and Lucky spaces, to events that give coins, to every minigame. Thus, this favors players who do well in minigames, possibly more than the Minigame Bonus.</li>
<li><strong>Eventful Bonus</strong> - Awarded to the player(s) who landed on the most <img class="smallspace" src="images/spaces/Event Space.png" alt="Event Space" /> Event Spaces.</li>
<li><strong>Item Bonus</strong> - Awarded to the player(s) who used the most items.</li>
<li><strong>Shopping Bonus</strong> - Awarded to the player(s) who bought the most items from shops. This is not based on the coins spent.</li>
<li><strong>Unlucky Bonus</strong> - Awarded to the player(s) who landed on the most <img class="smallspace" src="images/spaces/Red Space.png" alt="Red Space" /> Red Spaces. Does not include Bowser Spaces.</li>
<li><strong>Bowser Space Bonus</strong> - Awarded to the player(s) who landed on the most <img class="smallspace" src="images/spaces/Bowser Space.png" alt="Bowser Space" /> Bowser Spaces.</li>
<li><strong>Sightseer Bonus</strong> - Awarded to the player(s) who travelled the most spaces - or who had the highest collected roll from dice blocks.</li>
<li><strong>Slowpoke Bonus</strong> - The opposite of the Sightseer Bonus, it is awarded to the player(s) who travelled the least amount of spaces - or who had the smallest total from dice blocks.</li>
</ul>
<hr>
<img src="images/boardpage/classicbonusstars.png" alt="Classic Bonus Stars" />
<div class="bonusstarheading">Classic Bonus Stars</div>
<p>When this is selected, there will always be three bonus stars handed out at the end of the game, and they are locked to be the <strong>Rich Bonus</strong>, <strong>Minigame Bonus</strong>, and <strong>Rich Bonus</strong>. This makes it more in line with the Mario Parties on the Nintendo 64, albeit with the Rich Bonus instead of the Coin Bonus. If this is on, then it does become possible to center your game around going for bonus stars. Doing well in minigames and landing on as many Event Spaces as possible is key.</p>
</div>
<a id="spaces"></a><p>Boards are made up 9 different spaces.</p>
<table class="spaces">
<tr>
<td class="spacerow"><a href="bluespaces.php"><img src="images/spaces/Blue Space.png"><p>Blue Space</p></a></td>
<td class="spacerow"><a href="redspaces.php"><img src="images/spaces/Red Space.png"><p>Red Space</p></a></td>
<td class="spacerow"><a href="eventspaces.php"><img src="images/spaces/Event Space.png"><p>Event Space</p></a></td>
</tr>
<tr>
<td class="spacerow"><a href="itemspaces.php"><img src="images/spaces/Item Space.png"><p>Item Space</p></a></td>
<td class="spacerow"><a href="luckyspaces.php"><img src="images/spaces/Lucky Space.png"><p>Lucky Space</p></a></td>
<td class="spacerow"><a href="bowserspaces.php"><img src="images/spaces/Bowser Space.png"><p>Bowser Space</p></a></td>
</tr>
<tr>
<td class="spacerow"><a href="vsspaces.php"><img src="images/spaces/VS Space.png"><p>VS Space</p></a></td>
<td class="spacerow"><a href="chancetime.php"><img src="images/spaces/Chance Time.png"><p>Chance Time Space</p></a></td>
<td class="spacerow"><a href="bankspaces.php"><img src="images/spaces/Bank Space.png"><p>Bank Space (not on Mario Party 1 boards)</p></a></td>
</tr>
</table>
<div class="twovideos">
<video width="540" height="360" autoplay muted loop>
  <source src="videos/Koopa.mp4" type="video/mp4">
</video>
<video width="540" height="360" autoplay muted loop>
  <source src="videos/spaces/BankSpaceFirst.mp4" type="video/mp4">
</video>
<p>Koopa has a role on every board. On the boards from Mario Party (Yoshi's Tropical Island and Peach's Birthday Cake), he appears right before the first space of the board. Players who pass by him receive 10 coins. On the other boards, there's the Koopa Bank, which you can check out by viewing the Bank Space page.</p>
</div>
<div class="twovideos">
<video width="540" height="360" autoplay muted loop>
  <source src="videos/BooCoins.mp4" type="video/mp4">
</video>
<video width="540" height="360" autoplay muted loop>
  <source src="videos/BooStar.mp4" type="video/mp4">
</video>
<p>Every board except Peach's Birthday Cake has Boo. When a player passes by Boo, they can either steal coins or a Star from another player. There's no fee for stealing coins, but stealing a star costs 50 coins. The amount of coins Boo steals is based on the board and the amount of mashing a player does, but Boo will usually steal around 8 to 14 coins. There's no way to prevent Boo from stealing a star, though, which is why one of your goals is to keep the competition from being able to afford to steal a star from you, since you lack protection from a star steal. You <em>cannot</em> choose to not steal anything. Check the map to see which player will be at the largest loss from even just a few less coins. It doesn't have to be the player with the most stars or whoever is in 1st place. For example, if they have a Golden Pipe but only around 25 coins, you can use Boo to make it so the player can't afford to use the Golden Pipe to buy a star. This can matter if you do it before their last turn. Or, if another player is approaching Boo, you can take some coins from them so they can't afford to steal a star from you. As for stealing stars, if bonus stars are on (particuarly Classic Bonus Stars), think about which player is likely to get a bonus star. Taking a star away from a player who will get a bonus star at the end anyway is a good move. However, if one player has a lot more stars than others, then it's probably better to just take from them.</p>
</div>
<div class="twovideos">
<video width="540" height="360" autoplay muted loop>
  <source src="videos/Last5TurnsYoshis.mp4" type="video/mp4">
</video>
<video width="540" height="360" autoplay muted loop>
  <source src="videos/Last5Turns Item.mp4" type="video/mp4">
</video>
<p>During the last five turns, the standings will be presented. Then, a Non Playable Character will suggest a winner. The player selected can be in 2nd, 3rd, or 4th place, but not first. The chance of it being 4th is higher than 2nd or 3rd. Said player will then receive a bonus, which is an item or coins. The items can be a Double Dice, Triple Dice, Warp Block, Golden Pipe, or even items not obtainble from shops, like a Boo Bells, a Super Warp Block, or a Dueling Glove. The coin amounts are either 10 or 20 coins. There's an equal chance for all of these. Then, there will be some changes for the rest of the game. Blue spaces will now give 6 coins instead of 3, while red spaces will now take away 6 coins. If you land on the same space as another player, you'll initiate a duel, much like using the Dueling Glove. Check this section to learn more about duels.</p>
<div class="twovideos">
<video width="540" height="360" autoplay muted loop>
  <source src="videos/Last5TurnsBank.mp4" type="video/mp4">
</video>
<video width="540" height="360" autoplay muted loop>
  <source src="videos/spaces/BankSpaceLast5Turns.mp4" type="video/mp4">
</video>
<p>Finally, on boards with a Koopa Bank, the amount each player puts in while passing the bank is increased from 3 coins to 5 coins. On the other boards (Yoshi's Tropical Island and Peach's Birthday Cake), the amount of coins he gives to players is <em>not</em> increased to 20, a difference from the original.</p>
</div>
</div>
</div>
</div>
<script>
var boards = ["Yoshi's Tropical Island", "Space Land", "Peach's Birthday Cake", "Woody Woods", "Horror Land"];
var links = ["yoshistropicalisland.php", "spaceland.php", "peachsbirthdaycake.php", "woodywoods.php", "horrorland.php"];
var descriptions = ["Explore two islands connected by bridges. Pay attention to which you want to be on!", "Venture into the galaxy, but beware of runaway spaceships and Bowser beams!", "Make your way around a delicious cake, and plant strawberries to your advantage!", "Wander into the woods and follow the signs. Aim for a win, and try not to get lost!", "Be careful! This eerie place guarded by ghosts is different between day and night."];
var index = 0;
function fixboard(board)
{
	return board.replace("'", "").replace(/ /g, "");
}
function previousboard()
{
	index = (index - 1) % boards.length;
	if (index < 0)
	{
		index = boards.length - 1;
	}
	updateboard();
}
function nextboard()
{
	index = (index + 1) % boards.length;
	updateboard();
}
function updateboard()
{
	document.getElementById('board').src = "images/boardpage/" + fixboard(boards[index]) + ".png";
	document.getElementById('board').alt = boards[index];
	document.getElementById('description').innerHTML = descriptions[index];
}
function gotoboard()
{
	window.location.href = links[index];
}
</script>
</body>
</html>