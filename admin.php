<!DOCTYPE html>
<html>
<head>
	
	<?php include 'header.html'?>
</head>
<body>



<?php include 'navicon.html';?>

<form action="sender.php" method="post" enctype="multipart/form-data">
	<table>
		<tr>
			<td><input class="form-control" type="text" name="termeknev" placeholder="Név"></td>
			<td><input class="form-control" type="text" name="tag" placeholder="Típus"></td>
			<td><input class="form-control" type="text" name="ar" placeholder="Ár"></td>
			<td><input class="form-control" type="text" name="szin" placeholder="Szín"></td>
			<td><input type="file" name="photo" id="fileSelect"></td>
			<td><input type="submit" class="btn btn-warning" value="Send"></td>
		</tr>
	</table>
	
	
</form>



</body>
</html>