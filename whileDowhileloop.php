<?php 
    $title = "While loop";
    include "includes/header.php";
 ?>

    <h1><?php echo $title ?></h1>
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

        }while($grade <= 10);
            # code...
    ?>
    
    <?php include "includes/footer.php" ?>

