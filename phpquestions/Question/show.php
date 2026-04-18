<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Users List</h2>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
<?php
$conn = mysqli_connect("localhost", "root","", "testdb");

$sql = "SELECT * FROM Users";
$result = mysqli_query($conn, $sql);

echo mysqli_num_rows($result); // just for testing

while($row = mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td>".$row['Id']."</td>";
    echo "<td>".$row['Name']."</td>";
    echo "<td>".$row['Email']."</td>";
    echo "<td><a href='delete.php?id=".$row['Id']."'>Delete</a></td>";
    echo "</tr>";


}
?>

    </table>
    
</body>
</html>