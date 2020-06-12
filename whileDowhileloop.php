<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - While/Do-while loop</title>
</head>
<body>
    <h1>While Loop</h1>
    <?php 
        $grade = 1;
        //pre-condition
        while($grade < 10){
            echo "I scored pass <br>";
            $grade++;
        }
    ?>

    <h1>Do-While Loop</h1>
    <?php 
    //post-condition
        do{
            echo "Print this";
            $grade++;

        }while ($grade <= 10);
            # code...
    ?>
    
</body>
</html>