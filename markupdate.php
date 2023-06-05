<?php
require("config.php");
if (isset($_POST['update'])) {
      $id = $_POST['sid'];
      $quiz = $_POST['Quiz'];
      $mid = $_POST['Mid'];
      $final = $_POST['Final'];
      $db = "UPDATE result SET Quiz='$quiz',Mid='$mid',Final=$final WHERE S_ID='$id'";
      if ($mysqli->query($db) === TRUE) {
            header("location:teacher.php");
      } else {
            echo "Error: ";
      }
      
}
?>
