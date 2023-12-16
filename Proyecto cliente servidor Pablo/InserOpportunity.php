<!DOCTYPE html>
<html">
<head>
</head>
<body>
    <?php
require_once('Config.php');
$conn = new mysqli($servername, $username, $password, $dbname);

$Number = $_POST["Number"];
$Name = $_POST["Name"];

$sql = "INSERT INTO Opportunity (Number, Name) VALUES ('$Number', '$Name')";

$resultado = mysqli_query($conn, $sql);
header("Location: Opportunity.php"); 
mysqli_close($conn);



   ?>
   </body>
   </html>
</body>
</html>