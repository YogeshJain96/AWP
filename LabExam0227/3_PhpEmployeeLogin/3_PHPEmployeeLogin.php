<?php
    $email = $_POST["Email"];
    $pass = $_POST["Password"];
    //Printing this just to show the data has been reached succesfully as it's not a good practice to print password/User details
    echo "The email you entered is : " . $email;
    echo "<br/>The Password you entered is : " . $pass;
?>