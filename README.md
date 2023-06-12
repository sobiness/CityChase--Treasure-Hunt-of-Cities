# CityChase--Treasure-Hunt-of-Cities
City Chase: Treasure Hunt Game with Mapbox GL JS

Introduction:
The CityChase is a web-based interactive game that allows players to search for hidden treasure on a map using Mapbox GL JS, a powerful and versatile mapping library. The game is designed to be engaging, fun, and challenging, with players using their geographic skills to locate the hidden treasure by making guesses and receiving clues based on their proximity to the treasure location.

Technologies Used:
Mapbox GL JS: A JavaScript library that provides tools for displaying interactive maps with vector tiles, including features like zooming, panning, and adding custom markers.
HTML/CSS: For creating the user interface and styling the game components.
JavaScript: For implementing the game logic, handling user interactions, and communicating with the Mapbox GL JS library.
Geolocation API: For obtaining the user's current location (optional feature).
Mapbox API: For obtaining map tiles and geocoding services (optional feature).


Game Mechanics:
The game is played on a map displayed using Mapbox GL JS. The player starts by clicking on any location on the map to make a guess for the treasure location.
The game logic checks if the guess is within a certain distance (e.g., 100 meters) of the actual treasure location.
If the guess is within the acceptable distance, the player wins the game and the treasure location is revealed with a pop-up message. Otherwise, the player receives a clue indicating whether the guess is too far to the north, south, east, or west of the treasure location.
The player can continue to make guesses and receive clues until they correctly guess the treasure location or choose to end the game.
The game can be ended by clicking on an "End Game" button or using a designated command (e.g., typing "/end" in a chat-based game).
Once the game is ended, the actual treasure location is revealed to the player, and the game is over. The player can choose to start a new game by refreshing the page or using a designated command (e.g., typing "/newgame" in a chat-based game).
User Interface:
The game interface includes a map displayed using Mapbox GL JS, with the ability to zoom in/out, pan, and click on locations to make guesses.
The game interface also includes a pop-up message for displaying clues, messages, and game results.
Optionally, the game interface may include additional features such as displaying the user's current location using the Geolocation API, or using the Mapbox API for geocoding services to allow the player to search for specific locations.


Device Requirements :
To run the code locally:
1. web server[appache] and php interpreter- for this purpose use XAMPP, run the appache as well as the sql server.
2. Open localhost/myphpadmin
3. create a db called 'loginsystem' and a table called 'users'
4. connect to the data base by pasting this code snippet in db.php,  $con = mysqli_connect("127.0.0.1","root","","loginsystem");
  [host, user, password, database]
5. copy all the files in the zip and paste it under the folder 'htdocs' in XAMPP folder.
6. run localhost/index.php, type your credentials. The credentials should be stored in the database.
