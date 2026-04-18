<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hiPHP</title>
</head>
<body>
    <form method= "POST">
        <input type = "number" name="num">
        <input type ="submit">

    </form>
    <?php 
    if(isset($_POST['num'])){
        $num = $_POST['num'];

        if($num % 2 == 0){
            echo "Even";
        }else{
            echo "Odd";
        }
        }
     ?>
    
</body>
</html>