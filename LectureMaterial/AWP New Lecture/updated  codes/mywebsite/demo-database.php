<!DOCTYPE html>
<html>
    <head>
        <title>PHP Demo</title>
    </head>
    <body>
        <?php
            $servername ="localhost";
            $username="root";
            $password="";
            $dbName="phpdemo";
            
            // OBject oriented way
            $conn = new mysqli($servername,$username,$password,$dbName);

            if($conn->connect_error){
                die("Connection failed: ".$conn->connect_error);
            }
            
            // $sql="CREATE TABLE MyGuests(
            //     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            //     firstName VARCHAR(30) NOT NULL,
            //     lastName VARCHAR(30) NOT NULL,
            //     email VARCHAR(60),
            //     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            // )";

            $sql = "INSERT INTO MyGuests(firstName,lastName,email)
            VALUES ('Rohan','Mehra','rohan@something.com');";
            $sql .= "INSERT INTO MyGuests(firstName,lastName,email)
            VALUES ('Adam','Dex','adam@something.com');";

            // For inserting single row
            // if($conn->query($sql) === TRUE){
            //     // echo "Table created";
            //     echo "Row inserted: Inserted ID: ".$conn->insert_id;
            // }else{
            //     echo "Error during insertion: ".$conn->error;
            // }

            //For inserting multiple rows
            // if($conn->multi_query($sql) === TRUE){
               
            //     echo "Rows inserted ";
            // }else{
            //     echo "Error during insertion: ".$conn->error;
            // }

            // Using prepared statements
            // $stmt = $conn->prepare("INSERT INTO MyGuests (firstName,lastName, email)
            // VALUES (?,?,?)");

            // $stmt->bind_param("sss",$firstName,$lastName,$email);

            // $firstName = "Julie";
            // $lastName ="Del";
            // $email = "julie@some.com";
            // $stmt->execute();

            // $firstName = "Mary";
            // $lastName ="Moy";
            // $email = "mary@some.com";
            // $stmt->execute();

            // echo "Execution success";

            // $stmt->close();
            $conn->close();


            //procedural way
            // $conn = mysqli_connect($servername,$username,$password);
            // if(!$conn){
            //     die("Connection failed: ".mysqli_connect_error());
            // }  
            // mysqli_close($conn);  


            // PDO way - PHP Data Objects way
            // try{
            //     $conn = new PDO("mysql:host=$servername;dbname=phpdemo",$username,$password);
            //     $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            //     echo "Connection success";
            //     $conn = null;
            // }catch(PDOException $e){
            //     echo "Connection Failed: ".$e->getMessage();
            // }
            
           
            
        ?>
    </body>
</html>