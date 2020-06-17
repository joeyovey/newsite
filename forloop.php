<?php 
    $title = "For loop";
    include"includes/header.php"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
</head>
<body>
    <!-- content control -->
    <h1>FOR LOOP</h1>
    <?php 
        //for loop
        for($count = 0; $count <10; $count++){
            echo "Count is at index $count <br>";
        }
    ?>

    
<?php require "includes/footer.php" ?>
