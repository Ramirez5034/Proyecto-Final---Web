<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>  
<?php
$id = $_GET["CareerServiceID"];
require ('cn.php');

// Obtener datos de la tabla CareerService
$consulta = "SELECT * FROM CareerService WHERE CareerServiceID = $id";
$datos = $conn->query($consulta);

if ($datos->num_rows > 0) {
    $registro = $datos->fetch_assoc();
    
    echo '<center>
        <form class="col-3" action="UpdCareerService.php" method="post">';

    // Menú desplegable para CareerID
    echo '<label class="form-label" for="CareerID"><h1>Career:</h1></label><br>
            <select class="form-control" id="CareerID" name="CareerID" required>';

    // Obtener opciones de la tabla Career
    $consultaCareer = "SELECT CareerID, Name FROM Career";
    $resultadoCareer = $conn->query($consultaCareer);

    while ($rowCareer = $resultadoCareer->fetch_assoc()) {
        $selected = ($rowCareer['CareerID'] == $registro['CareerID']) ? 'selected' : '';
        echo '<option value="' . $rowCareer['CareerID'] . '" ' . $selected . '>' . $rowCareer['Name'] . '</option>';
    }

    echo '</select><br>';

    // Menú desplegable para EmployeeID
    echo '<label class="form-label" for="EmployeeID"><h1>Employee:</h1></label><br>
            <select class="form-control" id="EmployeeID" name="EmployeeID" required>';

    // Obtener opciones de la tabla Employee
    $consultaEmployee = "SELECT EmployeeID, FirstName FROM Employee";
    $resultadoEmployee = $conn->query($consultaEmployee);

    while ($rowEmployee = $resultadoEmployee->fetch_assoc()) {
        $selected = ($rowEmployee['EmployeeID'] == $registro['EmployeeID']) ? 'selected' : '';
        echo '<option value="' . $rowEmployee['EmployeeID'] . '" ' . $selected . '>' . $rowEmployee['FirstName'] . '</option>';
    }

    echo '</select><br>';

    // Otros campos de CareerService
    echo '<label class="form-label" for="ServiceDate"><h1>Service Date:</h1></label><br>
            <input class="form-control" type="date" id="ServiceDate" name="ServiceDate" value="' . $registro["ServiceDate"] . '" required><br>';

    echo '<label class="form-label" for="Description"><h1>Description:</h1></label><br>
            <input class="form-control" type="text" id="Description" name="Description" value="' . $registro["Description"] . '" required><br>';

    echo '<label class="form-label" for="State"><h1>State:</h1></label><br>
            <input class="form-control" type="text" id="State" name="State" value="' . $registro["State"] . '" required><br>';

    echo '<input class="btn btn-primary" type="submit" value="Modificar">';
    echo '<input class="form-label" type="hidden" id="CareerServiceID" name="CareerServiceID" value="' . $id . '">';
    echo '</form></center>';
}


    ?>
</body>
</html>