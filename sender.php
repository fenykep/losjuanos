<!DOCTYPE html>
<html>
<head>
    <?php include 'header.html'?>
</head>
<body>
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

// Create connection (with the sql "server?")
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {die("Connection failed: " . mysqli_connect_error());}
else{echo("connected yeey!");}

//itt küldöm el az sql-nek a form változóit
$kephely = str_replace('-', '_', preg_replace('/\s+/', '', strtolower(transliterator_transliterate('Any-Latin; Latin-ASCII; [\u0080-\u7fff] remove', $_POST['termeknev'].'_'.$_POST['tag'].'_'.$_POST['szin'].".jpg"))));

$sql = "INSERT INTO termekek (`id`, `termeknev`, `tag`, `ar`, `szin`, `kep`) VALUES (NULL, '$_POST[termeknev]', '$_POST[tag]', '$_POST[ar]', '$_POST[szin]', '$kephely');";
    echo "<br>".$sql."<br>";
    if(mysqli_query($conn, $sql)===TRUE){echo("done!");};

echo "<br><h3>A kép neve ez lesz:</h3>".$kephely;


//if they DID upload a file...
if($_FILES['photo']['name']){
    if(!$_FILES['photo']['error']){move_uploaded_file($_FILES['photo']['tmp_name'], '/opt/lampp/htdocs/losjuanos/img/'.$kephely);}
}

//ez egy kopipésztelt fileupload function, még kell bele egy resize, és meg kéne csinálnom, hogy a filenamet automatikusan generálja
//felrakod a képet, ad neki egy új nevet (termeknev.tag.szin.png), ezt az elérést felrakja az sql szerverre, és bedobja a képet az img mappába
/*
if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
        $allowed = array("png" => "image/png");
        $filename = $_FILES["photo"]["name"];
        $filetype = $_FILES["photo"]["type"];
        $filesize = $_FILES["photo"]["size"];
    
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");

    
        // Verify MYME type of the file
        if($filesize == "png"){ //vagy "image/png
            // Check whether file exists before uploading it
            if(file_exists("upload/" . $filename)){
                echo $filename . " is already exists.";
            } else{
                move_uploaded_file($_FILES["photo"]["tmp_name"], "upload/" . $filename);
                echo "Your file was uploaded successfully.";
            } 
        } else{
            echo "Error: There was a problem uploading your file. Please try again."; 
        }
    }
*/
//itt van a kopipaszta vége
mysqli_close($conn);
?>

<div>Back to <a href="admin.php">reality</a></div>
</body>
</html>
