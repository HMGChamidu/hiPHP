<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Register</h2>

    <form method="POST">
        Username: <input type = "text" name = "username"><br><br>
        Password: <input type = "password" name="password"><br><br>
        <input type="submit" value="Register">
    </form>
    <?php 
    $conn = mysqli_connect("localhost", "root", "", "testdb");
    
    if(isset($_POST['username'])){
        $user = $_POST['username'];
        $pass = $_POST['password'];

        $hashed = password_hash($pass, PASSWORD_DEFAULT);

       $sql = "INSERT INTO accounts (Username, Password) VALUES ('$user', '$hashed')";
    mysqli_query($conn, $sql);

   


    echo "Registered securely!";
        }
        
    
    ?>
</body>
</html>