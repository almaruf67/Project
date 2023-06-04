<?php

$databaseHost = 'localhost';
$databaseName = 'info';
$databaseUsername = 'root';
$databasePassword = '';
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

if(!$mysqli){
      echo 'not coonected to the server';
  }
if (!mysqli_select_db ($mysqli, 'info')){
  echo 'database is not selectd';
 }