<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <center>
        <form class="col-6" action="InserClass.php" method="post">
            <label class="form-label" for="EmployeeID"><h1>Employee:</h1></label><br>
            <select class="form-control" id="EmployeeID" name="EmployeeID" required>
                <?php
                    require_once('Config.php');
                    $conn = new mysqli($servername, $username, $password, $dbname);
    
                    $consultaEmployees = "SELECT EmployeeID, FirstName FROM Employee WHERE Status = 1";
                    $resultadoEmployees = $conn->query($consultaEmployees);
    
                    while ($rowEmployees = $resultadoEmployees->fetch_assoc()) {
                        echo '<option value="' . $rowEmployees['EmployeeID'] . '">' . $rowEmployees['FirstName'] . '</option>';
                    }
    
                    $conn->close();
                ?>
            </select><br>

            <label class="form-label" for="CourseID"><h1>Course:</h1></label><br>
            <select class="form-control" id="CourseID" name="CourseID" required>
                <?php
                    require_once('Config.php');
                    $conn = new mysqli($servername, $username, $password, $dbname);
    
                    $consultaCourses = "SELECT CourseID, Name FROM Course WHERE Status = 1";
                    $resultadoCourses = $conn->query($consultaCourses);
    
                    while ($rowCourses = $resultadoCourses->fetch_assoc()) {
                        echo '<option value="' . $rowCourses['CourseID'] . '">' . $rowCourses['Name'] . '</option>';
                    }
    
                    $conn->close();
                ?>
            </select><br>

            <label class="form-label" for="PeriodID"><h1>Period:</h1></label><br>
            <select class="form-control" id="PeriodID" name="PeriodID" required>
                <?php
                    require_once('Config.php');
                    $conn = new mysqli($servername, $username, $password, $dbname);
    
                    $consultaPeriods = "SELECT PeriodID, Name FROM Period WHERE Status = 1";
                    $resultadoPeriods = $conn->query($consultaPeriods);
    
                    while ($rowPeriods = $resultadoPeriods->fetch_assoc()) {
                        echo '<option value="' . $rowPeriods['PeriodID'] . '">' . $rowPeriods['Name'] . '</option>';
                    }
    
                    $conn->close();
                ?>
            </select><br>

            <input class="btn btn-primary" type="submit" value="Insertar">
        </form>
    </center>
</body>
</html>



