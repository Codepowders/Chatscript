<?php

$verb = $_SERVER['REQUEST_METHOD'];

if  ($verb == "PUT") {
    $mykey = $_GET['mykey'];
    $value = $_GET['value'];
    $allData = $mykey . " - " . $value . "</br>" ;

    file_put_contents('tekst.txt', $allData, FILE_APPEND | LOCK_EX);
  }

elseif  ($verb == "GET") {
      $mykey = $_GET['mykey'];
      $value = $_GET['value'];
      $allData = $mykey . " - " . $value . "</br>" ;

      file_put_contents('tekst.txt', $allData, FILE_APPEND | LOCK_EX);
    }
  ?>
