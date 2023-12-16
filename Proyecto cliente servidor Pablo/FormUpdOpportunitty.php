<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>  
<?php

$id = $_GET["OpportunityID"];
require('cn.php');
$consulta = "SELECT * FROM Opportunity WHERE OpportunityID = $id";
$datos = $conn->query($consulta);

if ($datos->num_rows > 0) {
    $registro = $datos->fetch_assoc();
    echo '<center>
    <form class="col-3" action="UpdOpportunitty.php" method="post">
        <label class="form-label" for="Number"><h1>Number: </h1></label><br>
        <input class="form-control" type="text" id="Number" name="Number" value="' . $registro["Number"] . '"><br>
        <label class="form-label" for="Name"><h1>Name:</h1></label><br>
        <input class="form-control" type="text" id="Name" name="Name" value="' . $registro["Name"] . '"><br>
        <input class="btn btn-primary" type="submit" value="Modificar">
        <input class="form-label" type="hidden" id="OpportunityID" name="OpportunityID" value="' . $id . '">
    </form>
</center>';
}
?>

</body>
</html>