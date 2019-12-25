<?php

//Setting up Local Variables
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "labexam227";

//Getting Data from Login Form via Post Method
$email = $_POST["Email"];
$pass = $_POST["Password"];

$login_flag = false;
$msg="";
// Creating connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Checking connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//Creating Query
$sql = "SELECT * FROM EmpLogin where email='" . $email . "'";
//Executing Query
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        if ($row["password"] == $pass) {
            $msg="Login Successful";
            $login_flag = true;
        } else
            $msg="Invalid password";
    }
} else {
    $msg="No Such User Exists";
}
$conn->close();

//Msg can be displayed here as well
echo $msg;

//Or can be forwaded to any page as per the BusinessLogic...ex..
header("Location:4_ShowMsg.php?msg=".$msg);

//Forwading to the desired Page after Login if required

// if($login_flag)
//     header("Location:4_ShowMsg.php?msg=".$msg);
// else
//     header("Location:2_EmployeeLoginPage.html?msg=".$msg);
?>