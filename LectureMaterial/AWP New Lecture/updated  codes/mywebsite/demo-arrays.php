<!DOCTYPE html>
<html>
    <head>
        <title>Functions Demo</title>
    </head>
    <body>
        <?php
        //Indexed array
            $cars = array("volvo","bmw","jaguar");
            // // echo count($cars);
            // // echo $cars[0];
            
            // sort($cars);
            rsort($cars);
            $arrLength = count($cars);
            for($x=0; $x<$arrLength;$x++){
                echo $cars[$x]."<br/>";
            }   

            // $cars = array(
            //     array("Volvo",22,18),
            //     array("BMW",23,22),
            //     array("Jaguar",99,12)   
            // );
            // echo $cars[0][0]
        ?>
    </body>
</html>