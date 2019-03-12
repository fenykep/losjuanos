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
/*
$servername = "fdb14.biz.nf";
$username = "2033976_abel";
$password = "1kurvaberci";
$dbname = "2033976_abel";
*/


$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {die("Connection failed: " . mysqli_connect_error());}
else{echo("<h1>Mi kéne ha vóna?</h1>"."<br>");}

$sql = "SELECT * FROM termekek LIMIT 14;";

/*if(mysqli_query($conn, $sql)===TRUE)
	{
		echo("done!");
	}
*/
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    //ezt majd egy array-jal csináld meg szerintem:
    /*
    	$cars = array
  		(
  		array("Volvo",22,18),
  		array("BMW",15,13),
  		);
  		echo $cars[0][0];
  	*/
    while($row = $result->fetch_assoc()) {
    	if ($row["szin"]=="" && $row["meret"]=="") {
    		echo "Terméknév: " . $row["termeknev"]. " - Ár: " . $row["ar"]."<br>";
    	}
    	elseif ($row["szin"]=="" && $row["meret"]!="") {
    		echo "Terméknév: " . $row["termeknev"]. " - Ár: " . $row["ar"]. " - Méret: " . $row["meret"]."<br>";
    	}
    	elseif ($row["szin"]!="" && $row["meret"]=="") {
    		echo "Terméknév: " . $row["termeknev"]. " - Ár: " . $row["ar"]. " - Szín: " . $row["szin"]. "<br>";
    	}
    	else{
    		echo "Terméknév: " . $row["termeknev"]. " - Ár: " . $row["ar"]. " - Szín: " . $row["szin"]. " - Méret: " . $row["meret"]."<br>";	
    	}
    	echo "<br>";

        
    }
} else {
    echo "0 results";
}

mysqli_close($conn);

?>



</body>
</html>