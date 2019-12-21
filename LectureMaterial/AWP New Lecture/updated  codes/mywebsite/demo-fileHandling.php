<!DOCTYPE html>
<html>
<body>

<!-- read file using fgets -->
<?php
// $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
// echo fread($myfile,filesize("webdictionary.txt"));
// fclose($myfile);
?>


<!-- Read file using fopen and fgets -->
<?php
// $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
// echo fgets($myfile);
// fclose($myfile);
?>

<!-- Check eof -->
<?php
// $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
// // Output one line until end-of-file
// while(!feof($myfile)) {
//   echo fgets($myfile) . "<br>";
// }
// fclose($myfile);
?>

<!-- REad single character  -->

<?php
// $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
// // Output one character until end-of-file
// while(!feof($myfile)) {
//   echo fgetc($myfile);
// }
// fclose($myfile);
?>

<!-- Write to file -->
<?php
// $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
// $txt = "Mickey Mouse1\n";
// fwrite($myfile, $txt);
// $txt = "Minnie Mouse2\n";
// fwrite($myfile, $txt);
// fclose($myfile);
?>


<!-- Working with csv files -->

<?php

$file_handle = fopen("demo.csv", "r");

while (!feof($file_handle) ) {

$line_of_text = fgetcsv($file_handle, 1024);

print $line_of_text[0] . $line_of_text[1]. $line_of_text[2] . "<BR>";

}

fclose($file_handle);

?>


</body>
</html>