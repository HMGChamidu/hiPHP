<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$conn = mysqli_connect("localhost", "root", "", "testdb");

$id = $_GET['id'];

$sql = "DELETE FROM Users WHERE Id = $id";

mysqli_query($conn, $sql);

header("Location: show.php");
?>
</body>
</html>