<!DOCTYPE html>
<html>
<head>
	<?php include 'header.html'?>
</head>
<body>
<?php include 'navicon.html';?>


<?php
include 'localserver.php';
/*
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
else{echo("");}

$sql = "SELECT * FROM termekek LIMIT 15;";
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

    echo '
          <div class="container">
            <h2>Friss finom kenyér</h2>
            <div class="row">
        ';
    while($row = $result->fetch_assoc()) {
      echo '
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm border" style="width: 16rem;">
              <img src="/losjuanos/img/'.$row["kep"].'" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">' . $row["termeknev"]. '</h5>
                  <p class="card-text">Finest handmade pieces designed by the hottest artist in Mid-Europe</p>
                </div>
                <ul class="list-group list-group-flush">

                ';
    	if ($row["szin"]=="") {
    		echo '<li class="list-group-item">  Ár: ' . $row["ar"]."</li>";}
    	else{
    		echo '<li class="list-group-item"> Ár: ' . $row["ar"]. '</li><li class="list-group-item">  <svg height="50" width="50">
  				<circle cx="25" cy="25" r="15" stroke="black" stroke-width="3" fill="'.$row["szin"].'" />
				</svg>  </li>';
			}
    	
    	echo ' 
            </ul>
            <div class="card-body">
              <a href="#" class="card-link">BuyMe</a>
              <a href="#" class="card-link">KnowMe</a>
            </div>
            </div>
          </div>
        ';    
    }
    echo '</div>
    </div>';
} 
else {echo "0 results";}

mysqli_close($conn);

?>


</div>
</body>
</html>

<!-- Ezzel tudsz képméretet optimalizálni, szerintem a bootstrap ezt nem kezeli

<img
    srcset="/resize:320w/kep.jpg 320w,
            /resize:480w/kep.jpg 480w,
            /resize:960w/kep.jpg 960w"

    sizes="(max-width: 320px) 320px,
           (max-width: 480px) 480px,
           960px"

    src="/resize:960w/kep.jpg"
    alt="ez a szöveg jelenik meg a kép helyett ha arra van szükség/missing file"
/>


 -->
