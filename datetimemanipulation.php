<?php 
    $title = "Date and Time Manipulation";
    include "includes/header.php";
 ?>


    <h1><?php echo $title ?></h1>
    <?php
        $datenow = getdate();
        echo "Today's date is: ". $datenow['mday']."<br/>";
        echo "In the month of: ". $datenow['mon']."<br/>";
        echo "Year: ". $datenow['year']."<br/>";
        echo "<hr/>";

        //getting date
        echo "Today's date is: ". $datenow['mday']."/".$datenow['mon']."/". $datenow['year'];
        echo "<hr/>";
        //getting time
        echo time() ."<br>";
        print date("m/d/y G.i:s<br>", time()). "<br/>";
        print "Today is ";
        print date("j of F Y, \a\\t g.i a", time());

    ?>
    
    <?php require "includes/footer.php" ?>
