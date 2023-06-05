<html lang="en">
<?php
include_once("login.php");

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
  <title>Teacher</title>
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
              <li><a href="#">Home</a></li>
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

    <!-- Dropdown for selection-->
    <div class="row">
      <div class="col-12">
        <div class="semester">
          <div class="select-sem-sec">
            <div class="dropdown">
              <!-- <button class="dropdown-btn" onclick="toggleDropdown()">
                Semester
                <span class="caret"></span>
              </button> -->
              <!-- <ul class="dropdown-content" id="dropdownContent">
                <li onclick="selectItem(this)">Summer 2023</li>
                <li onclick="selectItem(this)">Spring 2023</li>
                <li onclick="selectItem(this)">Fall 2022</li>
                <li onclick="selectItem(this)">Summer 2022</li>
                <li onclick="selectItem(this)">Spring 2022</li>
              </ul> -->
              <select class="form-select dropdown-btn" aria-label="Default select example">
                        <option value="Summer 2023">Summer 2023</option>
                        <option value="Spring 2023">Spring 2023</option>
                        <option value="Fall 2022">Fall 2022</option>
                        <option value="Summer 2022">Summer 2022</option>
                        <option value="Spring 2022">Spring 2022</option>
                      </select>
            </div>

            <div class="dropdown-section">
              <button class="dropdown-btn-section" onclick="toggleDropdownSection()">
                Section
                <span class="caret"></span>
              </button>
              <ul class="dropdown-content-section" id="dropdownContentSection">
                <li onclick="selectItemSec(this)">A-55</li>
                <li onclick="selectItemSec(this)">B-55</li>
                <li onclick="selectItemSec(this)">C-55</li>
                <li onclick="selectItemSec(this)">D-55</li>
                <li onclick="selectItemSec(this)">E-55</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- footer -->

    <div class="row">
      <div class="col-12">
        <footer class="bg-dark text-center text-white">
          <div class="container p-4">
            <section class="">
              <div class="row">
                <div class="col-12">
                  <ul class="list-unstyled mb-0 footer-link-list">
                    <li>
                      <a href="#!" class="text-white">Contact</a>
                    </li>
                    <li>
                      <a href="#!" class="text-white">FAQ</a>
                    </li>
                    <li>
                      <a href="#!" class="text-white">Terms</a>
                    </li>
                  </ul>
                </div>
              </div>
            </section>
          </div>

          <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2023 Copyright: Megaminds All Right Reserved.
          </div>
        </footer>
      </div>
    </div>
  </div>
  <script src="scripts/dropdown.js"></script>
  <script src="scripts\script.js"></script>
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>

</html>