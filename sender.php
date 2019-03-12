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

// Create connection (with the sql "server?")
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());


}
else{echo("connected yeey!");}

//itt küldöm el az sql-nek a form változóit
echo count($_POST['meret']) ;
print_r($_POST['meret']); 
for ($i = 0; $i < count($_POST['meret']); $i++) {
	$nagysag = $_POST['meret'][$i];
    $sql = "INSERT INTO termekek (`id`, `termeknev`, `tag`, `ar`, `szin`, `meret`) VALUES (NULL, '$_POST[termeknev]', '$_POST[tag]', '$_POST[ar]', '$_POST[szin]', '$nagysag');";
    echo "<br>".$sql."<br>";
    if(mysqli_query($conn, $sql)===TRUE){echo("done!". $i);};

}

mysqli_close($conn);
?>

<div>Back to <a href="admin.php">reality</a></div>