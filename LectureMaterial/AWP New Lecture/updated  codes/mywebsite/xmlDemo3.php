<!DOCTYPE html>
<html>
<body>

<?php
$xml=simplexml_load_file("demo1.xml") or die("Error: Cannot create object");
print_r($xml);
?>

</body>
</html>