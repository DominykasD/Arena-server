# Arena-server
Server side for an Android app that is used for ordering food and getting it delivered to your location in a stadium.

Link to the app: https://github.com/DominykasD/Arena

## Server functionality
The server is used for the Android app to communicate with the database.

## Set up
Run creatDatabase.php only  once, next time it is enough to run Apache, MySQL on XAMPP.

First time:
1) Install XAMPP
2) Run Apache, MySQL
3) Create a folder with the name ArenaServer and put the repository files in XAMPP htdocs folder
4) Go to http://localhost/ArenaServer/createDatabase.php (creates a database, tables and inserts some values)
5) http://localhost/folderName/getFoodData.php to create a JSON file called food.json which contains foodModel table data or copy the one in the repository
6) put JSON file in *\main\res\raw folder if folder not present create new one
5) Start the Android app

Next time:
1) Start Apache, MySQL
2) Start the Android app

### Links
XAMPP: https://www.apachefriends.org/
