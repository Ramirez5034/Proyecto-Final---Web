<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>  
<?php
 $id=$_GET["KardexID"];
 require ('cn.php');
$consulta = "SELECT KardexID, ClassID, OpportunityID, StudentID, Grade FROM Kardex WHERE KardexID = $id";
$datos = $conn->query($consulta);

if ($datos->num_rows > 0) {
    $registro = $datos->fetch_assoc();
    echo '<center>
    <form class="col-3" action="UpdKardex.php" method="post">
        <label class="form-label" for="ClassID"><h1>Class:</h1></label><br>
        <select class="form-control" id="ClassID" name="ClassID" required>';

    $consultaClass = "SELECT ClassID FROM Class WHERE Status = 1";
    $resultadoClass = $conn->query($consultaClass);

    while ($rowClass = $resultadoClass->fetch_assoc()) {
        $selected = ($rowClass['ClassID'] == $registro['ClassID']) ? 'selected' : '';
        echo '<option value="' . $rowClass['ClassID'] . '" ' . $selected . '>' . $rowClass['ClassID'] . '</option>';
    }

    echo '</select><br>';

    echo '<label class="form-label" for="OpportunityID"><h1>Opportunity:</h1></label><br>';
    echo '<select class="form-control" id="OpportunityID" name="OpportunityID" required>';

    $consultaOpportunity = "SELECT OpportunityID, Name FROM Opportunity WHERE Status = 1";
    $resultadoOpportunity = $conn->query($consultaOpportunity);

    while ($rowOpportunity = $resultadoOpportunity->fetch_assoc()) {
        $selected = ($rowOpportunity['OpportunityID'] == $registro['OpportunityID']) ? 'selected' : '';
        echo '<option value="' . $rowOpportunity['OpportunityID'] . '" ' . $selected . '>' . $rowOpportunity['Name'] . '</option>';
    }

    echo '</select><br>';

    echo '<label class="form-label" for="StudentID"><h1>Student:</h1></label><br>';
    echo '<select class="form-control" id="StudentID" name="StudentID" required>';

    $consultaStudent = "SELECT StudentID, FirstName FROM Student WHERE Status = 1";
    $resultadoStudent = $conn->query($consultaStudent);

    while ($rowStudent = $resultadoStudent->fetch_assoc()) {
        $selected = ($rowStudent['StudentID'] == $registro['StudentID']) ? 'selected' : '';
        echo '<option value="' . $rowStudent['StudentID'] . '" ' . $selected . '>' . $rowStudent['FirstName'] . '</option>';
    }

    echo '</select><br>';

    echo '<label class="form-label" for="Grade"><h1>Grade:</h1></label><br>';
    echo '<input class="form-control" type="text" id="Grade" name="Grade" value="'.$registro["Grade"].'" required><br>';

    echo '<input class="btn btn-primary" type="submit" value="Modificar">';
    echo '<input class="form-label" type="hidden" id="KardexID" name="KardexID" value="' . $id . '">';
    echo '</form>
    </center>';
}
?>
</body>
</html>

