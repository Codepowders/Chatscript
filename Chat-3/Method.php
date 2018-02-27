<?php

$verb = $_SERVER['REQUEST_METHOD'];

if  ($verb == "PUT") {
    $mykey = $_GET['mykey'];
    $value = $_GET['value'];
    $allData = $mykey . " - " . $value . "</br>";
    $myFile = "tekst.txt";
    $fh = fopen($myFile, 'a');
    fwrite($fh, $allData . "\n");
    fclose($fh);
    $read = file('tekst.txt'); }
 ?>
