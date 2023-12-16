<!DOCTYPE html>
<html">
<head>
</head>
<body>
    <?php

require_once('Config.php');
$conn = new mysqli($servername, $username, $password, $dbname);

$ClassID = $_POST["ClassID"];
$OpportunityID = $_POST["OpportunityID"];
$StudentID = $_POST["StudentID"];
$Grade = $_POST["Grade"];

$sql = "INSERT INTO Kardex (ClassID, OpportunityID, StudentID, Grade)
        VALUES ('$ClassID', '$OpportunityID', '$StudentID', '$Grade')";

$resultado = $conn->query($sql);

header("Location: Kardex.php");
mysqli_close($conn);



   ?>
   </body>
   </html>
</body>
</html>