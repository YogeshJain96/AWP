<?php
    declare(strict_types = 1);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Functions Demo</title>
    </head>
    <body>
    <?php 
        function className($name_of_class){
            echo "The class is: ".$name_of_class."<br/>";
        }

        function addNumbers(int $a, int $b){
            return $a + $b;
        }

        
        function addSomeNumber(int $a=10): int{
            $sum = 0;
            $sum += $a;
            return "The sum is".$sum;
        }
        // className("DAC");
        // className("MEAN");
        // echo "Sum is ".addNumbers(10,"5 days");
        echo addSomeNumber(16);
    ?>
    </body>
</html>