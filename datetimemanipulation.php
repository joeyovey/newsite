<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - Date and Time Manipulation</title>
</head>
<body>
    <h1>Date and Time Manipulation</h1>
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
    
</body>
</html>