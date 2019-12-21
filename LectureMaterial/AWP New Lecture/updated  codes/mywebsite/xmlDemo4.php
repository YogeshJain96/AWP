<!DOCTYPE html>
<html>
<body>

<?php
$xml=simplexml_load_file("demo1.xml") or die("Error: Cannot create object");
foreach($xml->children() as $employees) {
        echo $employees->name . ", ";
        $address = simplexml_import_dom($employees->address);
        echo $address->houseNo."<br/>";
}
?>

</body>
</html>