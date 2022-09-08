<!DOCTYPE HTML>
<html lang="en-US">
<head>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<title>Space Land - Mario Party Superstars Guide</title>
<link rel="stylesheet" href="stylesheet.css" />
</head>
<body>
<img src="images/horrorland/starspaces.png" class="cornerimage" id="boardlayout" alt="Board Layout">
<audio controls id="audio" name="HorrorLand">
<source src="audio/boards/HorrorLand.mp3" type="audio/mpeg">
</audio>
<span id="looptime">6.32</span>
<div class="center">
<?php include 'boardsheader.txt'; ?>
<div id="boardcontents">
<img src="images/mainpage/HorrorLand.png" style="width:50%;">
<p><strong>Horror Land</strong> is a large board made up of
<ul class="spacerundown">
<li>34 <img class="smallspace" src="images/spaces/Blue Space.png" alt="Blue Space" /> Blue Spaces</li>
<li>8 <img class="smallspace" src="images/spaces/Red Space.png" alt="Red Space" /> Red Spaces</li>
<li>7 <img class="smallspace" src="images/spaces/Event Space.png" alt="Event Space" /> Event Spaces</li>
<li>7 <img class="smallspace" src="images/spaces/Item Space.png" alt="Item Space" /> Item Spaces</li>
<li>25 <img class="smallspace" src="images/spaces/Lucky Space.png" alt="Lucky Space" /> Lucky Spaces</li>
<li>4 <img class="smallspace" src="images/spaces/Bowser Space.png" alt="Bowser Space" /> Bowser Spaces</li>
<li>4 <img class="smallspace" src="images/spaces/VS Space.png" alt="VS Space" /> VS Spaces</li>
<li>2 <img class="smallspace" src="images/spaces/Chance Time.png" alt="Chance Time Space" /> Chance Time Spaces</li>
<li>and 3 <img class="smallspace" src="images/spaces/Bank Space.png" alt="Bank Space" /> Bank Spaces</li>
<li>for a total of 94 spaces.</li></ul>
</ul>
<div class="boardoverview">
<p>This board has eight star spaces, which you can see from the image in the bottom right corner. Like Space Land and Woody Woods, only four star spaces can be the first star, and they are highlighted in red in the following image:</p>
<img src="images/horrorland/firststars.png" alt="First Stars" style="width:90%;">
</div>
<div class="twovideos">
<video width="540" height="360" autoplay muted loop>
  <source src="videos/horrorland/Day to Night.mp4" type="video/mp4">
</video>
<video width="540" height="360" autoplay muted loop>
  <source src="videos/horrorland/Night to Day.mp4" type="video/mp4">
</video>
<p>The main gimmick of Horror Land was one used for every board in Mario Party 6. This board has a day/night cycle. The board starts during the day, and every two turns, the time of day changes from day to night. And then it goes back to day two turns later.</div>
<div class="someimages">
<img src="images/horrorland/Day 1.png" class="fourimages" alt="Day 1">
<img src="images/horrorland/Day 2.png" class="fourimages" alt="Day 2">
<img src="images/horrorland/Night 1.png" class="fourimages" alt="Night 1">
<img src="images/horrorland/Night 2.png" class="fourimages" alt="Night 2">
<p>On the right side of the screen, you have this indicator to show what time of day it is. If there are clouds by the sun or moon, the time of day will change the next turn.</p>
</div>
<div class="twovideos">
<video width="540" height="360" autoplay muted loop>
  <source src="videos/horrorland/Day to Night Event.mp4" type="video/mp4">
</video>
<video width="540" height="360" autoplay muted loop>
  <source src="videos/horrorland/Night to Day Event.mp4" type="video/mp4">
</video>
<p>However, the cycle can be thrown out of whack. One way is with the Event Spaces. All of them change the time of day right away for two turns.</p>
</div>
<div class="twovideos">
<video width="540" height="360" autoplay muted loop>
  <source src="videos/horrorland/Day to Night Event.mp4" type="video/mp4">
</video>
<video width="540" height="360" autoplay muted loop>
  <source src="videos/horrorland/Dance Party Horror Land.mp4" type="video/mp4">
</video>
<p>The other way is with board events that you pass by. On the top is a house with Kamek. For 5 coins, he'll change day to night. The other is a dance party around the center of the board. For a random price between 3 and 7 coins (I assume), you'll dance away the night and make it day again.</p>
</div>
<div class="someimages">
<img src="images/horrorland/Kamek at Night Horror Land.png" class="twoimages" alt="Kamek at Night">
<img src="images/horrorland/Party Event At Day Horror Land.png" class="twoimages" alt="Party Event at Day">
<p>However, you must visit Kamek during the day and the Dance Party at night for them to function. Otherwise, nothing happens.</p>
</div>
<div class="boardoverview">
<p>There's several differences between day and night. For one, take the Whomps. During the day, you can pay 5 coins to take the route they are blocking. In older Mario Party titles, if you took the other way, they would end up blocking that way, and if you paid the Whomp, he would go back to blocking your path. But it's different in this variation of the board. Here, the Whomp will not move if you take the other path, and if you do take his path, he'll end up blocking the other route.</p>
</div>
<div class="onevideo">
<video width="540" height="360" autoplay muted loop>
  <source src="videos/horrorland/Whomp at Day.mp4" type="video/mp4">
</video>
</div>
<div class="boardoverview">
<p>At night, however, the Whomps cannot be moved. As it says, "Magic is binding this Whomp in its place, making it unable to move at night."</p>
</div>
<div class="threevideos">
<video width="540" height="360" autoplay muted loop>
  <source src="videos/horrorland/Whomp at Night 1.mp4" type="video/mp4">
</video>
<video width="540" height="360" autoplay muted loop>
  <source src="videos/horrorland/Whomp at Night 2.mp4" type="video/mp4">
</video>
<video width="540" height="360" autoplay muted loop>
  <source src="videos/horrorland/Whomp at Night 3.mp4" type="video/mp4">
</video>
</div>
</div>
</div>
<script src="boards.js"></script>
</body>
</html>