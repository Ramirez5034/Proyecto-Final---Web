<?php

require_once('Config.php');
$conn = new mysqli($servername, $username, $password, $dbname);

$id=$_GET["CareerServiceID"];

$sql = "UPDATE CareerService SET status=0 where CareerServiceID=". $id;

$resultado = mysqli_query($conn,$sql);

header("Location: CareerService.php"); 
mysqli_close( $conn );


?>