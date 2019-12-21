<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "theone_ecom";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    echo "Connection Established";
    //$sql = "SELECT * FROM products";

   // $result = $conn->query($sql);

    //if ($result->num_rows > 0) {
      // output data of each row
     // while ($row = $result->fetch_assoc()) {
     //   echo "";
    //  }
    // }
    $conn->close();
