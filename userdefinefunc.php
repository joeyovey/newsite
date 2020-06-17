<<?php 
    $title = "Functions";
    include "includes/header.php";
 ?>

    <h1><?php echo $title ?></h1>
    <?php
        //defining functions
        function messege(){
            echo "You are really a nice person <br>";
        }
        //calling a function
        messege();
        echo "<hr>";
        messege();

        //functions with parameters - passing by values
        function addFunction($num1, $num2){
            $sum = $num1 * $num2;
            echo "The sum of $num1 and $num2 is: $sum <br>";
        }
        //pass by reference
        function changeNum(&$num){
            $num = $num + 20;
        }

        //value returning function
        function returnProduct($num1, $num2){
            $prod = $num1 * $num2;
            return $prod;

        }
        $num = 400;
        addFunction(100, $num);
        addFunction(10, $num);
        addFunction("40", "50");

        changeNum($num);
        echo $num . "<br>";

        $returnValue = returnProduct(30,40);
        echo $returnValue . "<br>";

    ?>

<?php include "includes/footer.php" ?>
