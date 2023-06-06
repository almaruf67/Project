<?php
require("config.php");
if (isset($_POST['update'])) {
      $id = $_POST['sid'];
      $quiz = $_POST['Quiz'];
      $mid = $_POST['Mid'];
      $final = $_POST['Final'];
      $db = "UPDATE result SET Quiz='$quiz',Mid='$mid',Final=$final WHERE S_ID='$id'";
      if ($mysqli->query($db) === TRUE) {
            header("location:teacherentry.php");
      } else {
            echo "Error: ";
      }
      
}

if (isset($_POST['feed'])) {
      $id = $_POST['sid'];
      $feedback = $_POST['feedback'];
      $course = $_POST['c_id'];
      $db = "UPDATE result SET Feedback='$feedback' WHERE S_ID='$id' AND Course_Title='$course'";
      if ($mysqli->query($db) === TRUE) {
            header("location:teacherentry.php");
      } else {
            echo "Error: ";
      }
      
}

if (isset($_POST['recheck'])) {
      $id = $_POST['sid'];
      $course = $_POST['c_id'];
      $subject = $_POST['subject'];
      $des = $_POST['des'];
      $db = "INSERT INTO `t_noti`(`Course_Title`, `S_ID`, `Subject`, `Description`) VALUES ('$course','$id','$subject','$des')";
      if ($mysqli->query($db) === TRUE) {
            header("location:student.php");
      } else {
            echo "Error: ".mysqli_error($mysqli);
      }
      
}
?>
