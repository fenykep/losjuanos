<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "abel";





$termeknev = "kalap";
$szin = "piros";
$meret = "XL";
$ar = 32000;

//------NEMTOM MIRE VAN!!-------------------

//$limit = intval($_GET['limit']); //casting to int type!
//$query = "SELECT * FROM table LIMIT $limit";

//------NEMTOM MIRE VAN!!-------------------

// Create connection (with the sql "server?")
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());


}
else{echo("connected yeey!");}

//itt küldöm el az sql-nek a form változóit, csak még szarul
//------------------HUGE MESS!!!-----------------------------

$sql = "INSERT INTO termekek (`id`, `termeknev`, `ar`, `szin`, `meret`) VALUES (NULL, '$_POST[termeknev]', '$_POST[ar]', '$_POST[szin]', '$_POST[meret]');";

$sql2 = "SELECT * FROM termekek;";

echo $sql;
if(mysqli_query($conn, $sql)===TRUE){echo("done!");};
//mysqli_query($conn, $sql);
//$rownum = mysqli_num_rows($lolo);
//echo($rownum);
mysqli_close($conn);
//mysqli_close();
//echo "Connected successfully";

?>

<div>Back to <a href="admin.php">reality</a></div>