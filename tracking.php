<?php
/**
 * Created by PhpStorm.
 * User: john
 * Date: 19/04/2018
 * Time: 21:53
 */

$requestText = $_REQUEST["requestText"];
$myfile = fopen("trackfile.txt", "a+") or die("Unable to open file!");
fwrite($myfile, $requestText."\n");
fclose($myfile);
?>