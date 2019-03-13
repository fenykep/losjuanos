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
  <li><a href="bolt.php">Bolt</a></li>
  <li><a href="kapcsolat.php">Kapcsolat</a></li>
  <li><a class="active" href="admin.php">admin</a></li>
</ul>

<form action="sender.php" method="post">
	<table>
		<tr>
			<td><input class="form-control" type="text" name="termeknev" placeholder="Név"></td>
			<td><input class="form-control" type="text" name="tag" placeholder="Típus"></td>
			<td><input class="form-control" type="text" name="ar" placeholder="Ár"></td>
			<td><input class="form-control" type="text" name="szin" placeholder="Szín"></td>
			<!--<td><input class="form-control" type="text" name="meret" placeholder="Méret"></td>-->
			<td><input type="checkbox" name="meret[]" multiple="yes" value="S">S</td>
			<td><input type="checkbox" name="meret[]" multiple="yes" value="M">M</td>
			<td><input type="checkbox" name="meret[]" multiple="yes" value="L">L</td>
			<td><input type="checkbox" name="meret[]" multiple="yes" value="XL">XL</td>
			<td><input type="file" name="photo" id="fileSelect"></td>
			<td><input type="submit" value="Send"></td>
		</tr>
	</table>
	
	
</form>



</body>
</html>