<?php

require_once('Config.php');
$conn = new mysqli($servername, $username, $password, $dbname);

$id=$_GET["CourseID"];

$sql = "UPDATE course SET status=0 where CourseID=". $id;

$resultado = mysqli_query($conn,$sql);

header("Location: Course.php"); 
mysqli_close( $conn );


?>