<?php
include_once 'dbconnect.php';
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
$id=$_GET['id'];
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
else{

$sql = "DELETE FROM tbl_images WHERE id='$id';";

if(mysqli_query($db, $sql)){
	header("Location:show_gallary_image.php");
}
}


?>