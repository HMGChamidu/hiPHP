<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hiPHP</title>
</head>
<body>
    <?php 
    $nums = [1,2,3,4,5,6,7,8,9,10];
    
    foreach($nums as $num){
        if($num %2 == 0){
            echo $num . "<br>";
        }
    }
    ?>
    
</body>
</html>