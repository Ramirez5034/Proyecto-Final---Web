<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <?php
    require_once('Config.php');
    $conn = new mysqli($servername, $username, $password, $dbname);

    $EmployeeID = $_POST["EmployeeID"];
    $CourseID = $_POST["CourseID"];
    $PeriodID = $_POST["PeriodID"];
    $id = $_POST["ClassID"];

    $sql = "UPDATE Class SET EmployeeID='$EmployeeID', CourseID='$CourseID', PeriodID='$PeriodID' WHERE ClassID=" . $id;

    $resultado = mysqli_query($conn, $sql);

    header("Location: Class.php"); 
    mysqli_close($conn);
    ?>
</body>
</html>

