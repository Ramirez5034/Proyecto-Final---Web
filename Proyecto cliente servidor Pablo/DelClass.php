<?php

require_once('Config.php');
$conn = new mysqli($servername, $username, $password, $dbname);

$id=$_GET["ClassID"];

$sql = "UPDATE Class SET status=0 where ClassID=". $id;

$resultado = mysqli_query($conn,$sql);

header("Location:Class.php"); 
mysqli_close( $conn );


?>