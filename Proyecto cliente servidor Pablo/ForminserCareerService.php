<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <center>
        <form class="col-3" action="InserCareerService.php" method="post">
            <label class="form-label" for="CareerID"><h1>Career:</h1></label><br>
            <select class="form-control" id="CareerID" name="CareerID" required>
                <?php
                    require_once('Config.php');
                    $conn = new mysqli($servername, $username, $password, $dbname);

                    $consultaCareer = "SELECT CareerID, Name FROM Career WHERE Status = 1";
                    $resultadoCareer = $conn->query($consultaCareer);

                    while ($rowCareer = $resultadoCareer->fetch_assoc()) {
                        echo '<option value="' . $rowCareer['CareerID'] . '">' . $rowCareer['Name'] . '</option>';
                    }

                    $conn->close();
                ?>
            </select> <br>

            <label class="form-label" for="EmployeeID"><h1>Employee:</h1></label><br>
            <select class="form-control" id="EmployeeID" name="EmployeeID" required>
                <?php
                    require_once('Config.php');
                    $conn = new mysqli($servername, $username, $password, $dbname);

                    $consultaEmployee = "SELECT EmployeeID, FirstName FROM Employee WHERE Status = 1";
                    $resultadoEmployee = $conn->query($consultaEmployee);

                    while ($rowEmployee = $resultadoEmployee->fetch_assoc()) {
                        echo '<option value="' . $rowEmployee['EmployeeID'] . '">' . $rowEmployee['FirstName'] . '</option>';
                    }

                    $conn->close();
                ?>
            </select> <br>

            <label class="form-label" for="ServiceDate"><h1>Service Date:</h1></label><br>
            <input class="form-control" type="date" id="ServiceDate" name="ServiceDate" required> <br>

            <label class="form-label" for="Description"><h1>Description:</h1></label><br>
            <input class="form-control" type="text" id="Description" name="Description" required> <br>

            <label class="form-label" for="State"><h1>State:</h1></label><br>
            <input class="form-control" type="text" id="State" name="State" required> <br>

            <input class="btn btn-primary" type="submit" value="Insertar">
        </form>
    </center>
</body>
</html>
