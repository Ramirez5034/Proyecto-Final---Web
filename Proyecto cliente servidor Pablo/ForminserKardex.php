<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <center>
        <form class="col-6" action="InserKardex.php" method="post">
            <label class="form-label" for="Grade"><h1>Grade:</h1></label><br>
            <input class="form-control" type="text" id="Grade" name="Grade" required> <br>

            <label class="form-label" for="ClassID"><h1>Class:</h1></label><br>
            <select class="form-control" id="ClassID" name="ClassID" required>
                <?php
                    require_once('Config.php');
                    $conn = new mysqli($servername, $username, $password, $dbname);

                    $consultaClass = "SELECT ClassID, EmployeeID, CourseID, PeriodID FROM Class WHERE Status = 1";
                    $resultadoClass = $conn->query($consultaClass);

                    while ($rowClass = $resultadoClass->fetch_assoc()) {
                        echo '<option value="' . $rowClass['ClassID'] . '">' . $rowClass['EmployeeID'] . ' - ' . $rowClass['CourseID'] . ' - ' . $rowClass['PeriodID'] . '</option>';
                    }

                    $conn->close();
                ?>
            </select><br>

            <label class="form-label" for="OpportunityID"><h1>Opportunity:</h1></label><br>
            <select class="form-control" id="OpportunityID" name="OpportunityID" required>
                <?php
                    require_once('Config.php');
                    $conn = new mysqli($servername, $username, $password, $dbname);

                    $consultaOpportunity = "SELECT OpportunityID, Number, Name FROM Opportunity WHERE Status = 1";
                    $resultadoOpportunity = $conn->query($consultaOpportunity);

                    while ($rowOpportunity = $resultadoOpportunity->fetch_assoc()) {
                        echo '<option value="' . $rowOpportunity['OpportunityID'] . '">' . $rowOpportunity['Number'] . ' - ' . $rowOpportunity['Name'] . '</option>';
                    }

                    $conn->close();
                ?>
            </select><br>

            <label class="form-label" for="StudentID"><h1>Student:</h1></label><br>
<select class="form-control" id="StudentID" name="StudentID" required>
    <?php
    require_once('Config.php');
    $conn = new mysqli($servername, $username, $password, $dbname);

    $consultaStudent = "SELECT StudentID, FirstName FROM Student WHERE Status = 1";
    $resultadoStudent = $conn->query($consultaStudent);

    while ($rowStudent = $resultadoStudent->fetch_assoc()) {
        echo '<option value="' . $rowStudent['StudentID'] . '">' . $rowStudent['FirstName'] . '</option>';
    }

    $conn->close();
    ?>
</select>

            </select><br>

            <input class="btn btn-primary" type="submit" value="Insertar">
        </form>
    </center>
</body>
</html>
