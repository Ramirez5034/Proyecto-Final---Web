<!DOCTYPE html>
<html">
<head>
</head>
<body>
    <?php

require_once('Config.php');
$conn = new mysqli($servername, $username, $password, $dbname);

$Name = $_POST["Name"];
$Credits = $_POST["Credits"];
$Code = $_POST["Code"];

$sql = "INSERT INTO Course (Name, Credits, Code) VALUES ('" . $Name . "','" . $Credits . "','" . $Code . "')";

$resultado = mysqli_query($conn, $sql);
header("Location: Course.php");
mysqli_close($conn);



   ?>
   </body>
   </html>
</body>
</html>