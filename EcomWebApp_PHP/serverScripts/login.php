<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "theone_ecom";

$email = $_POST["email"];
$pass = $_POST["password"];

$login_flag = false;

echo "Your Entered email=" . $email;
echo "<br/>Pass=" . $pass;
echo "<br/>";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM users where email='" . $email . "'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        if ($row["pass"] == $pass) {
            echo "Login Successful";
            $login_flag = true;
        } else
            echo "Invalid password";
    }
} else {
    echo "No Such User Exists";
}
$conn->close();
if ($login_flag) {
    $_SESSION["user"] = $email;
} else{
    $_SESSION["user"] = "Invalid";
}
echo "<h1>Session Set->user:" . $_SESSION["user"] . "<br>";
header("Location: ../index.php");
?>