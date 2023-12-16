<?php

require_once('Config.php');
$conn = new mysqli($servername, $username, $password, $dbname);

$id=$_GET["OpportunityID"];

$sql = "UPDATE Opportunity SET status=0 where OpportunityID=". $id;

$resultado = mysqli_query($conn,$sql);

header("Location:Opportunitty.php"); 
mysqli_close( $conn );


?>