<!DOCTYPE html>
<html">
<head>
</head>
<body>
    <?php

require_once('Config.php');
$conn = new mysqli($servername, $username, $password, $dbname);

$CareerID = $_POST["CareerID"];
$EmployeeID = $_POST["EmployeeID"];
$ServiceDate = $_POST["ServiceDate"];
$Description = $_POST["Description"];
$State = $_POST["State"];

$sql = "INSERT INTO CareerService (CareerID, EmployeeID, ServiceDate, Description, State) VALUES ('$CareerID', '$EmployeeID', '$ServiceDate', '$Description', '$State')";

$resultado = mysqli_query($conn, $sql);
header("Location: CareerService.php");
mysqli_close($conn);


   ?>
   </body>
   </html>
</body>
</html>