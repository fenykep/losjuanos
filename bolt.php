<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css" />
  <meta charset="UTF-8">
  <script src="https://use.typekit.net/snf4utc.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </head>
<body>

<div class="container">

<div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-center">
      <a class="mx-auto p-3" href="index.php">Index</a>
      <a class="mx-auto p-3 active" href="bolt.php">Bolt</a>
      <a class="mx-auto p-3" href="kapcsolat.php">Kapcsolat</a>
      <a class="mx-auto p-3" href="admin.php">Admin</a>
  </nav>    
</div>


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
else{/*echo("<h1>Mi kéne ha vóna?</h1>"."<br>");*/}

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

      //ez itt a bootstrap kód egy rendes thumbnailes gridhez
    /*
    echo "
    <div class="container">
      <h2>Image Gallery</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="/w3images/lights.jpg" target="_blank">
              <img src="/w3images/lights.jpg" alt="Lights" style="width:100%">
              <div class="caption">
                <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
              </div>
            </a>
          </div>
        </div>
        "
    */
        // ez pedig egy bootsrapes album example (@https://getbootstrap.com/docs/4.3/examples/album/#)
    /*
      <div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>

    */


    echo '
          <div class="container">
            <h2>Friss finom kenyér</h2>
            <div class="row">
        ';
    while($row = $result->fetch_assoc()) {
      echo '
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm border" style="width: 18rem;">
              <img src="/www/img/one1.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">' . $row["termeknev"]. '</h5>
                  <p class="card-text">Ide kerül majd a kártya szövege</p>
                </div>
                <ul class="list-group list-group-flush">

                ';
    	if ($row["szin"]=="" && $row["meret"]=="") {
    		echo '<li class="list-group-item">  Ár: ' . $row["ar"]."</li>";
    	}
    	elseif ($row["szin"]=="" && $row["meret"]!="") {
    		echo '<li class="list-group-item">  Ár: ' . $row["ar"]. '</li><li class="list-group-item">'. " Méret: " . $row["meret"]."</li>";
    	}
    	elseif ($row["szin"]!="" && $row["meret"]=="") {
    		echo '<li class="list-group-item"> Ár: ' . $row["ar"]. '</li><li class="list-group-item">'." Szín: " . $row["szin"]. "</li>";
    	}
    	else{
    		echo '<li class="list-group-item">  Ár: ' . $row["ar"]. '</li><li class="list-group-item">'." Szín: " . $row["szin"].'</li> <li class="list-group-item">'. " Méret: " . $row["meret"]."</li>";	
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
} else {
    echo "0 results";
}

mysqli_close($conn);

?>


</div>
</body>
</html>