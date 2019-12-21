<!DOCTYPE html>
<html>
    <head>
        <title>Functions Demo</title>
    </head>
    <body>
        <?php
            // $x= 75;
            // $y = 25;

            // function addNumbers(){
            //     $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
            // }
            // addNumbers();
            // echo "the sum is".$z;

            echo $_SERVER['PHP_SELF'];
            echo '<br/>';
            echo $_SERVER['SERVER_NAME'];
            echo '<br/>';
            echo $_SERVER['HTTP_HOST'];
            echo '<br/>';
            echo $_SERVER['HTTP_REFERER'];
            echo '<br/>';
            echo $_SERVER['HTTP_USER_AGENT'];
            echo '<br/>';
            echo $_SERVER['SCRIPT_NAME'];
            echo '<br/>';
            
        ?>
    </body>
</html>