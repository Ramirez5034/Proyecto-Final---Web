<!DOCTYPE html>
<html">
<head>
</head>
<body>
    <?php
require_once('Config.php');
$conn = new mysqli($servername, $username, $password, $dbname);
$id = $_POST["KardexID"];
$ClassID = $_POST["ClassID"];
$OpportunityID = $_POST["OpportunityID"];
$StudentID = $_POST["StudentID"];
$Grade = $_POST["Grade"];

$sql = "UPDATE Kardex SET ClassID='$ClassID', OpportunityID='$OpportunityID', StudentID='$StudentID', Grade='$Grade' WHERE KardexID=$id";

$resultado = mysqli_query($conn, $sql);

header("Location: Kardex.php");
mysqli_close($conn);




   ?>
   </body>
   </html>
</body>
</html>