<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hiPHP</title>
</head>
<body>
    <form method="GET">
        <input type="text" name="username">
        <input type="submit" value="send"><br>
        <?php 
        if(isset($_GET['username'])){
            echo "Hello " . $_GET['username'];
        } 
        ?>
    </form>
    <?php
    $name = "Chamidu";
    $city = "Matara";

    echo "My name is " .$name . " from " .$city;
    ?>
</body>
</html>




