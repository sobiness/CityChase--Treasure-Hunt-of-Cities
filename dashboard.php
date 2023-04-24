<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="form">
    <h1 class="login-title">CityChase</h1>
        <p><h2 class="login-title">Hey, <?php echo $_SESSION['username']; ?>!</h2></p>
        <h3 class="login-title">Here are the Rules:</h3>
    
        <h3 class="login-title"><ul li>The game is played on a map with longitude and latitude coordinates.</ul li>

<ul li>The player starts by clicking on any location on the map to guess the treasure location.</ul li>
<ul li>After the player makes a guess, the game checks if the guess is within a certain distance (e.g., 50kms) of the actual treasure location.</ul li>
<ul li>If the guess is within the acceptable distance of the treasure location, the player wins the game and the treasure location is revealed with a pop-up message.</ul li>
<ul li>If the guess is outside the acceptable distance of the treasure location, the player receives a clue indicating whether the guess is too far to the north, south, east, or west of the treasure location.</ul li>
<ul li>The player continues to make guesses and receive clues until they correctly guess the treasure location or choose to end the game.</ul li>
<ul li>Once the game is ended, the actual treasure location is revealed to the player, and the game is over.
The player can choose to start a new game by clicking the restart button.</ul li></h3>
<p><center><a href="Tresht.html" class="login-button">Click to play</a></center></p>

    </div>
</body>
</html>
