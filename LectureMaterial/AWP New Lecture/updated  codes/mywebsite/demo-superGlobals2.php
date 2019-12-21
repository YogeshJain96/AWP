<!DOCTYPE html>
<html>
    <head>
        <title>PHP Demo</title>
    </head>
    <body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            NAME: <input type="text" name="fname">
            <input type="submit">
        </form>

        <?php
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                // $name = $_REQUEST['fname'];
                $name = $_POST['fname'];
                if(empty($name)){
                    echo 'Name is empty';
                }else{
                    echo "The name is ".$name;
                }
            }else{
                echo $_GET['msg'];
            }
        ?>
    </body>
</html>