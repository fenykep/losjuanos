<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<meta charset="UTF-8">
	<script src="https://use.typekit.net/snf4utc.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
?>

<ul>
  <li><a class="active" href="index.php">Index</a></li>
  <li><a href="bolt.php">Bolt</a></li>
  <li><a href="kapcsolat.php">Kapcsolat</a></li>
  <li><a href="admin.php">admin</a></li>
</ul>

<h1>
<?php
echo "My first PHP script!";
?>
</h1>
<h3>A méret a lényeg, hatalomból élek, csináljunk egy képet, utazzunk el kérlek!</h3>
 
</body>
</html>