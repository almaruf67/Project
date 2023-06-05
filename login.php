<?php
include_once("config.php");
session_start();
if (isset($_POST['tsignin'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM teacher WHERE Email='$email' and Password='$password'";

    $result = mysqli_query($mysqli, $query);
    $row = $result->fetch_assoc();
    echo $row['ID']."   ". $row['Name']."   ". $row['Email']."   ". $row['Password']."<br>";


    if ($result->num_rows == 1) {
        $_SESSION['Email'] = $email;
        $_SESSION['Name'] = $row['Name'];
        $_SESSION['ID'] = $row['ID'];

      //   echo "session successfull for ".$_SESSION['Name'];
        header("Location: teacher.php");
    } else {
        echo "error";
    }
}

if (isset($_POST['ssignin'])) {
      $email = $_POST['email'];
      $password = $_POST['password'];
  
      $query = "SELECT * FROM student WHERE Email='$email' and Password='$password'";
  
      $result = mysqli_query($mysqli, $query);
      $row = $result->fetch_assoc();
      echo $row['ID']."   ". $row['Name']."   ". $row['Email']."   ". $row['Password']."<br>";
  
  
      if ($result->num_rows == 1) {
          $_SESSION['Email'] = $email;
          $_SESSION['Name'] = $row['Name'];
          $_SESSION['ID'] = $row['ID'];
  
        //   echo "session successfull for ".$_SESSION['Name'];
          //header("Location: teacher.php");
      } else {
          echo "error";
      }
  }
?>
 