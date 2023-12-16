<?php

require_once('Config.php');
$conn = new mysqli($servername, $username, $password, $dbname);

$id=$_GET["KardexID"];

$sql = "UPDATE Kardex SET status=0 where KardexID=". $id;

$resultado = mysqli_query($conn,$sql);

header("Location: Kardex.php"); 
mysqli_close( $conn );


?>