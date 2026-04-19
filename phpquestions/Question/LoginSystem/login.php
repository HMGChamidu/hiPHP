<!DOCTYPE html>
<html>
    <body>
  <h2>Login </h2>

  <form method="POST">
    Username: <input type="text" name= "username"><br><br>
    Password: <input type="password" name="password"><br><br>
    <input type="submit" value="Login">
  </form>
<?php
$conn = mysqli_connect("localhost", "root", "", "loginSystem");

if(isset($_POST['username'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];

    //find user

    $sql = "SELECT * FROM accounts WHERE Username='$user'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)== 1){
        $row = mysqli_fetch_assoc($result);

        //verify password
        if(password_verify($pass, $row['Password'])){
            echo "Login Success ✅";
        }else{
            echo"Wrong password ❌";
        }

    }else{
        echo "User not found ❌";
    }
}
?>

</body>
</html>