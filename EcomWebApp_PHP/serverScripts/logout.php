<?php
session_start();
echo "Logging You Out..";
$_SESSION["user"]="Invalid";
session_destroy();
header("Location: ../index.php");
?>