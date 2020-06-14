<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - Arrays</title>
</head>
<body>
    <h1>Arrays</h1>
    <?php
        //a variable
        $num = 3;

        //an array
        //ony one datatype
        $numbers = array(1,2,3,4,5,6,7,8,9,10,23,45,5,46,4);
        echo $numbers[5];

        //finding size
        $size = count($numbers);
    
        echo "<p>Array size is: $size </p>";
        
        //printing all arrays
        for($count = 0; $count<$size; $count++){
            echo $numbers[$count]. "<br>";
        }
    ?>
</body>
</html>