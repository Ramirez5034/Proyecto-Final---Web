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
$id = $_POST["CourseID"];

$sql = "UPDATE Course SET Name='$Name', Credits='$Credits', Code='$Code' WHERE CourseID=" . $id;

$resultado = mysqli_query($conn, $sql);

header("Location: Course.php");
mysqli_close($conn);



   ?>
   </body>
   </html>
</body>
</html>