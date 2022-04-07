<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
        echo " <h1> Dan's Site </h1> ";
        echo " <hr> ";
        
        // Creating Variables
        $characterName = "Jones";
        $characterAga = 45;

        echo "There once was a man named $characterName <br>";
        echo "He was $characterAga years old <br>";
        $characterName = "Mike"; 
        echo "He really liked the name $characterName <br>";
        echo "But didn't like being $characterAga <br>";
    ?>

    <?php echo "<hr>"; ?>

    <?php
        // Data types
        $string = "To be or not to be";
        $integer = 37;
        $floatingPoint = 9.0987;
        $Boolean = true-false;
        null; 
        echo $string;
        echo $floatingPoint;
    ?>

    <?php echo "<hr>"; ?>

    <?php
    // Working with Strings functions
    $phrase = "Giraffe Academy";
    $phrase[0] = "B";
    echo str_replace("ffe", "qua", $phrase);
    echo strtoupper($phrase); 
    echo strtolower($phrase);
    echo strlen("Toyota");
    echo $phrase[8];
    echo "Mike" [0];
    echo substr($phrase, 8);
    echo substr($phrase, 8, 3);
    ?>

    <?php echo "<hr>"; ?>

    

</body>
</html>