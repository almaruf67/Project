<html lang="en">
<?php
session_start();

$self_path = $_SERVER['PHP_SELF'];

?>
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" />
  <link rel="stylesheet" href="css/teacher.css">
  <link rel="stylesheet" href="css/student.css" />
  <title><?php
      if($self_path=="/project/teacherentry.php")
       echo "Information";
      else if($self_path=="/project/index.php")
       echo "Home";
      else if($self_path=="/project/teacher.php")
       echo "Teacher";
      else if($self_path=="/project/student.php")
       echo "Student";

?></title>
</head>

<body>

  <div class="container">
    <!-- navgigation bar -->
    <div class="row">
      <div class="col-12">
        <div class="header">
          <div class="navbar">
            <div class="logo">
              <a href="index.php">Megamind</a>
            </div>
            <ul class="links">
              <li><a href="index.php">Home</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
            <div class="profile-icon-width">
              <a onclick="profileDropDown();" href="#"><i class="fa-solid fa-user-tie"></i>
              <p><?php echo $_SESSION['Name'] ?></p>
              </a>
            </div>
            
            <button class="dropdown_button">
              <i onclick="showmenu(); changeIcon();" class="fa-solid fa-bars"></i>
            </button>
          </div>
          <div class="dropdownMenu" id="myUL">
            <li><a href="#">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact</a></li>
            <li><a class="profile-icon" onclick="profileDropDown();" href="#">
              <p><?php echo $_SESSION['Name'] ?></p>
            </a></li>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="profile-drop">
          <div class="profiledropdownMenu" id="profileUL">
            <li><a href="#">My Profile</a></li>
            <li><a href="#">Notification</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="logout.php">Log Out</a></li>
          </div>
        </div>
      </div>
    </div>
    <!-- navgigation bar close-->