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
$id = $_POST["CareerServiceID"];

$sql = "UPDATE CareerService SET CareerID='$CareerID', EmployeeID='$EmployeeID', ServiceDate='$ServiceDate', Description='$Description', State='$State' WHERE CareerServiceID=" . $id;

$resultado = mysqli_query($conn, $sql);

header("Location: CareerService.php");
mysqli_close($conn);



   ?>
   </body>
   </html>
</body>
</html>