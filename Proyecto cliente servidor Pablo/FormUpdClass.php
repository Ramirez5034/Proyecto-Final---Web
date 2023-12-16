<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>  
<?php
 $id=$_GET["ClassID"];
 require ('cn.php');
$consulta = "SELECT ClassID, EmployeeID, CourseID, PeriodID FROM Class WHERE ClassID = $id";
$datos = $conn->query($consulta);

if ($datos->num_rows > 0) {
    $registro = $datos->fetch_assoc();
    echo '<center>
    <form class="col-3" action="UpdClass.php" method="post">
        <label class="form-label" for="EmployeeID"><h1>Employee:</h1></label><br>
        <select class="form-control" id="EmployeeID" name="EmployeeID" required>';

    $consultaEmployee = "SELECT EmployeeID, FirstName FROM Employee";
    $resultadoEmployee = $conn->query($consultaEmployee);

    while ($rowEmployee = $resultadoEmployee->fetch_assoc()) {
        $selected = ($rowEmployee['EmployeeID'] == $registro['EmployeeID']) ? 'selected' : '';
        echo '<option value="' . $rowEmployee['EmployeeID'] . '" ' . $selected . '>' . $rowEmployee['FirstName'] . '</option>';
    }

    echo '</select><br>';

    echo '<label class="form-label" for="CourseID"><h1>Course:</h1></label><br>';
    echo '<select class="form-control" id="CourseID" name="CourseID" required>';

    $consultaCourse = "SELECT CourseID, Name FROM Course";
    $resultadoCourse = $conn->query($consultaCourse);

    while ($rowCourse = $resultadoCourse->fetch_assoc()) {
        $selected = ($rowCourse['CourseID'] == $registro['CourseID']) ? 'selected' : '';
        echo '<option value="' . $rowCourse['CourseID'] . '" ' . $selected . '>' . $rowCourse['Name'] . '</option>';
    }

    echo '</select><br>';

    echo '<label class="form-label" for="PeriodID"><h1>Period:</h1></label><br>';
    echo '<select class="form-control" id="PeriodID" name="PeriodID" required>';

    $consultaPeriod = "SELECT PeriodID, Name FROM Period";
    $resultadoPeriod = $conn->query($consultaPeriod);

    while ($rowPeriod = $resultadoPeriod->fetch_assoc()) {
        $selected = ($rowPeriod['PeriodID'] == $registro['PeriodID']) ? 'selected' : '';
        echo '<option value="' . $rowPeriod['PeriodID'] . '" ' . $selected . '>' . $rowPeriod['Name'] . '</option>';
    }

    echo '</select><br>';

    echo '<input class="btn btn-primary" type="submit" value="Modificar">';
    echo '<input class="form-label" type="hidden" id="ClassID" name="ClassID" value="' . $id . '">';
    echo '</form>
    </center>';
}
?>
</body>
</html>
