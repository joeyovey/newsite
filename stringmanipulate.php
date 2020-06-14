<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - String Manipulation</title>
</head>
<body>
    <h1>String Manipulation</h1>
    <?php
        //concatenation
        $phrase1 = "Student came to the class";
        $phrase2 = "today class closed around 3pm";
        $name = "joey ovey";
        echo $phrase1 . ", Joel, Blessing ". $phrase2;

        echo "<br>";
        echo "<hr/>";
        //string transformation
        echo "<p> Uppercase first letter: ". ucfirst($name)."</p>";
        echo "Uppercase first letter of each: ". ucwords($name);
        echo "<p> Upper case all the words: ". strtoupper($name)."</p>";
        echo "<p> Upper case all the words: ". strtolower("THIS IS ALL IN UPPOER CASE")."</p>";
        echo "<hr/>";

        echo "<p> Reset string: ". str_repeat($name,5)."</p>";
        echo "<p> Reset string with UPPERCASE: ". strtoupper(str_repeat($name, 5))."</p>";
        echo "<p> Get a substring: ". substr($name,3,5)."</p>";

        echo "<hr>";
        echo 'Get position of string: '. strpos($name,'y').'<br>';

        //returns NULL
        //echo 'Get position of string: '. strpos($combine,'z').'<br>';
        echo "Find character 'O': ". strchr($name,'O')."<br>";
        echo "Find character 'v': ". strchr($name,'v')."<br>";
        echo "Find character 'e': ". strchr($name,'e')."<br>";
        echo "Find character 'y': ". strchr($name,'y')."<br>";

        echo "<hr/>";
        echo "Find length of a string: ". strlen($name)."<br>";
       
        echo "Trim spaces on both sides: ". "A" . trim(" B C D "). "E". "<br>";
        echo "Trim spaces on left side: ". "A" . ltrim(" B C D "). "E". "<br>";
        echo "Trim spaces on right side: ". "A" . rtrim(" B C D "). "E". "<br>";
        echo "<hr>";

        echo "Replace string with another: ". str_replace("ovey", "Akawu",$name)."<br>";
        

    ?>
    
</body>
</html>