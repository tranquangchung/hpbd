<?php
$myfile = fopen("testfile.txt", "w") or die("Unable to open file!");
$txt = "John Doe123\n";
fwrite($myfile, $txt);
$txt = "Jane Doe\n";
fwrite($myfile, $txt);
fclose($myfile);
?>