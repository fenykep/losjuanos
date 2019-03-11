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

<ul>
  <li><a href="index.php">Index</a></li>
  <li><a class="active" href="bolt.php">Bolt</a></li>
  <li><a href="kapcsolat.php">Kapcsolat</a></li>
  <li><a href="admin.php">admin</a></li>
</ul>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "abel";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());


}
else{echo("connected yeey!");}

$sql = "SELECT * FROM termekek;";

echo $sql;
if(mysqli_query($conn, $sql)===TRUE){echo("done!");};
//mysqli_query($conn, $sql);
//$rownum = mysqli_num_rows($lolo);
//echo($rownum);
mysqli_close($conn);
//mysqli_close();
//echo "Connected successfully";

?>

<h1>Mi kéne ha vóna?</h1>

</body>
</html>