<!DOCTYPE html>
<html>
<body>

<form method="POST">
    Name: <input type="text" name="name"><br><br>
    Email: <input type="email" name="email"><br><br>
    <input type="submit" value="Save">
</form>

<?php
$conn = mysqli_connect("localhost", "root", "", "testdb");

if(!$conn){
    echo "Connection failed";
}

if(isset($_POST['name'])){
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "INSERT INTO Users (name, email) VALUES ('$name', '$email')";
   mysqli_query($conn, $sql) or die(mysqli_error($conn));
    echo "Data Saved!";
}
?>

</body>
</html>