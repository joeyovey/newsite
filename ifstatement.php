<?php 
    $title = "If Statement";
    include "includes/header.php"; 
?>

<h1><?php echo $title ?></h1>
<?php 
        $grade = 50;
        if($grade <= 40){
            echo "You have passed";
        }elseif($grade = 50){
            echo "Congratulation!";
        }else{
            echo "You have failed, try again next time";
        }
    ?>
    
    <?php require "includes/footer.php" ?>
