<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2> Login</h2>

    <form method="POST">
        username: <input type="text" name= "username"><br><br>
        password: <input type="password" name ="password"><br><br>
        <input type="submit" value="Login">
    </form>

    <?php 
    session_start();
    $conn= mysqli_connect("localhost", "root", "", "testdb");

    if(isset($_POST['username'])){
        $user = $_POST['username'];
        $pass = $_POST['password'];

        $sql = "SELECT * FROM accounts 
                 WHERE Username = '$user' ";
    

    $result = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($result)==1){
        $row= mysqli_fetch_assoc($result);

        if(password_verify($pass, $row['Password'])){
            $_SESSION['user'] = $user;

         echo "Login Success ✅";
        
    }else{
        echo "Wrong password ❌";
       
    }
    }else{
        echo "User not found ❌";
    }
    }
    ?>
    
</body>
</html>