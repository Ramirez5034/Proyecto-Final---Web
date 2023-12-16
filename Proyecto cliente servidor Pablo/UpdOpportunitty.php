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
$id = $_POST["OpportunityID"];

$sql = "UPDATE Opportunity SET Number='$Number', Name='$Name' WHERE OpportunityID=" . $id;

$resultado = mysqli_query($conn, $sql);

header("Location: Opportunitty.php");
mysqli_close($conn);


   ?>
   </body>
   </html>
</body>
</html>