# Arena-server
Server side for an android app that is for ordering food and get it delivered to your location in a stadium. Link to the app: https://github.com/DominykasD/Arena

## What is does
Connects to database. Creates a database in MySQL, table users, and inserts some values. Creates a table product to store foodNames, descriptions, etc.

## Set up
creatDatabase.php only run once, next time it is enough to run Apache, MySQL on XAMPP

First time:
1) Install XAMPP
2) Run Apache, MySQL
3) Create a folder and put the repository files in XAMPP htdocs folder
4) Go to http://localhost/folderName/createDatabase.php (creates a database, table users, foodModel and inserts some values)
5) http://localhost/folderName/getFoodData.php to create a JSON file called food.json which contain foodModel table data or copy the one in the repository
6) put JSON file in *\main\res\raw folder if folder not present create new one
5) Start the android app

Next time:
1) Start Apache, MySQL
2) Start the android app

### Links
XAMPP: https://www.apachefriends.org/
