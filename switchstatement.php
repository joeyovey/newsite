<?php 
    $title = "Switch Statement";
    include "includes/header.php";
 ?>

<h1><?php echo $title ?></h1>
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

<?php require "includes/footer.php" ?>

