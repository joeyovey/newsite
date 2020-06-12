<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - Switch Statement</title>
</head>
<body>
<h1>Switch Statement</h1>
<?php 
    $grade = "C";

    switch($grade){
        case 'A':
            echo "<h2>You are superstar</h2>";
        break;
        case 'B':
            echo "<h2>You are not a super star</h2>";
        break;
        default:{
            echo "Nothing is okay";
        break;
        }
    }
?>
    
</body>
</html>