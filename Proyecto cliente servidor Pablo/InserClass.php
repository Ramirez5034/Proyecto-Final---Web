<!DOCTYPE html>
<html">
<head>
</head>
<body>
    <?php

require_once('Config.php');
$conn = new mysqli($servername, $username, $password, $dbname);

$EmployeeID = $_POST["EmployeeID"];
$CourseID = $_POST["CourseID"];
$PeriodID = $_POST["PeriodID"];

$sql = "INSERT INTO Class (EmployeeID, CourseID, PeriodID) VALUES ('$EmployeeID', '$CourseID', '$PeriodID')";

$resultado = mysqli_query($conn, $sql);
header("Location: Class.php"); 
mysqli_close($conn);
?>

</body>
</html>
