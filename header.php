<html lang="en">
<?php
session_start();

$self_path = $_SERVER['PHP_SELF'];

?>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&family=Yeseva+One&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Yeseva+One&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Gentium+Book+Basic:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" />
  <link rel="stylesheet" href="css/teacher.css">
  <link rel="stylesheet" href="css/student.css" />
  <link rel="stylesheet" href="css/about.css" />
  <title><?php
          if ($self_path == "/project/teacherentry.php")
            echo "Information";
          else if ($self_path == "/project/index.php")
            echo "Home";
          else if ($self_path == "/project/teacher.php")
            echo "Teacher";
          else if ($self_path == "/project/student.php")
            echo "Student";
          else if ($self_path == "/project/about.php")
            echo "About Us";
          ?></title>
</head>

<body class="body-color">
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
            <li><a href="#" data-bs-toggle="modal" data-bs-target="#proModal">My Profile</a></li>
            <li><a href="#" data-bs-toggle="modal" data-bs-target="#notiModal">Notification</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="logout.php">Log Out</a></li>
          </div>
        </div>
      </div>
    </div>
    <!-- navgigation bar close-->

    <!-- Profile Modal -->
    <div class="modal fade" id="proModal" tabindex="-1" aria-labelledby="proModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="proModal"><?php echo $_SESSION['Name'] ?></h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <?php
          $user = $_SESSION['user'];
          if ($user == 'teacher') {
            $tid = $_SESSION['ID'];
            require("config.php");
            $query = "SELECT * FROM teacher WHERE id='$tid'";
            $result = mysqli_query($mysqli, $query);
            $row = $result->fetch_assoc();
            echo $row['ID'] . "   " . $row['Name'] . "   " . $row['Email'] . "   " . "<br>";
          }
          ?>

          <div class="modal-body">

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

          </div>


        </div>
      </div>
    </div>

    <!-- Notification Modal -->
    <div class="modal fade" id="notiModal" tabindex="-1" aria-labelledby="notiModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="notiModal">Notification</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <?php
          $user = $_SESSION['user'];
          if ($user == 'teacher') {
            $tid = $_SESSION['ID'];
            require("config.php");
            $query = "SELECT * FROM `t_noti` ";
            $result = mysqli_query($mysqli, $query);
            ?>
            <table border="1" class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Course Title</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Description</th>
                  </tr>
                </thead>
                <tbody>
            <?php
            while ($row = $result->fetch_assoc()) {
          ?>
              
                  <tr>
                    <td><?php echo $row['S_ID'] ?></td>
                    <td><?php echo $row['Course_Title'] ?></td>
                    <td><?php echo $row['Subject'] ?></td>
                    <td><?php echo $row['Description'] ?></td>

                  </tr>
              <?php

            }
            ?>
            </tbody>
            </table>
            <?php
          }
              ?>
              <div class="modal-body">

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

              </div>


        </div>
      </div>
    </div>