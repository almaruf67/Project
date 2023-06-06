<?php
require("../config.php");
if (isset($_POST['tupdate'])) {
      
      $tid = $_POST['id'];
      $name = $_POST['Name'];
      $email = $_POST['Email'];
      $pass = $_POST['Password'];
      $db = "UPDATE `teacher` SET `Name` = '$name',`Email` = '$email' ,`Password` = '$pass' WHERE `teacher`.`ID` = '$tid';";
      if ($mysqli->query($db) === TRUE) {
            
            header("location:admin.php");
      } else {
            echo "Error: ";
      }
      
}

else if (isset($_POST['tdelete'])) {
      
      $id = $_POST['id'];
      $db = "DELETE FROM teacher WHERE ID='$id'";
      if ($mysqli->query($db) === TRUE) {
            header("location:admin.php");
      } else {
            echo "Error: ";
      }
      
}
else if (isset($_POST['tadd'])) {
      
      $tid = $_POST['id'];
      $name = $_POST['Name'];
      $email = $_POST['Email'];
      $pass = $_POST['Password'];
      $db = "INSERT INTO `teacher`(`ID`, `Name`, `Email`, `Password`) VALUES ('$tid','$name','$email','$pass')";
      if ($mysqli->query($db) === TRUE) {
            header("location:admin.php");
      } else {
            echo "Error: ";
      }
      
}

if (isset($_POST['supdate'])) {
      
      $tid = $_POST['id'];
      $name = $_POST['Name'];
      $email = $_POST['Email'];
      $pass = $_POST['Password'];
      $semester = $_POST['Semester'];
      $section = $_POST['Section'];
      $db = "UPDATE `student` SET `Name` = '$name',`Email` = '$email' ,`Password` = '$pass',`Semester` = '$semester' ,`Section` = '$section' WHERE `student`.`ID` = '$tid';";
      if ($mysqli->query($db) === TRUE) {
            
            header("location:admin.php");
      } else {
            echo "Error: ";
      }
      
}

else if (isset($_POST['sdelete'])) {
      
      $id = $_POST['id'];
      $db = "DELETE FROM student WHERE ID='$id'";
      if ($mysqli->query($db) === TRUE) {
            $db2 = "DELETE FROM result WHERE S_ID='$id'";
            if ($mysqli->query($db2) === TRUE) {
                  header("location:admin.php");
            } else {
                  echo "Error: ";
            }
            
      } else {
            echo "Error: ";
      }
      
}
else if (isset($_POST['sadd'])) {
      
      $sid = $_POST['id'];
      $name = $_POST['Name'];
      $email = $_POST['Email'];
      $pass = $_POST['Password'];
      $semester = $_POST['Semester'];
      $section = $_POST['Section'];
      $db = "INSERT INTO `student`(`ID`, `Name`, `Email`, `Password`, `Semester`, `Section`) VALUES ('$sid','$name','$email','$pass','$semester','$section')";
      if ($mysqli->query($db) === TRUE) {
            header("location:admin.php");
      } else {
            echo "Error ";
      }
      
}

if (isset($_POST['rupdate'])) {
      
      $id = $_POST['id'];
      $course = $_POST['Course'];
      $quiz = $_POST['Quiz'];
      $mid = $_POST['Mid'];
      $final = $_POST['Final'];
      $db = "UPDATE `result` SET `Course_Title` = '$course',`Quiz` = '$quiz' ,`Mid` = '$mid',`Final` = '$final' WHERE `result`.`Id` = '$id';";
      if ($mysqli->query($db) === TRUE) {
            
            header("location:admin.php");
      } else {
            echo "Error: ";
      }
      
}

else if (isset($_POST['rdelete'])) {
      
      $id = $_POST['id'];
      $db = "DELETE FROM result WHERE Id='$id'";
      if ($mysqli->query($db) === TRUE) {
            header("location:admin.php");
      } else {
            echo "Error: ";
      }
      
}
else if (isset($_POST['radd'])) {
      
      $course = $_POST['Course'];
      $sid = $_POST['sid'];
      $quiz = $_POST['Quiz'];
      $mid = $_POST['Mid'];
      $final = $_POST['Final'];
      $db = "INSERT INTO `result`(`Course_Title`, `S_ID`, `Quiz`, `Mid`, `Final`) VALUES ('$course','$sid','$quiz','$mid','$final')";
      if ($mysqli->query($db) === TRUE) {
            header("location:admin.php");
      } else {
            echo "Error " . mysqli_error($mysqli);
      }
      
}
?>
