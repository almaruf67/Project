<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.3.1/css/all.css'>
  <title>Home</title>
</head>

<body>
  <div class="container">
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
            <a class="signupBtn" data-toggle="modal" data-target="#SelectModal" href="#">Sign Up</a>
            <button class="dropdown_button">
              <i onclick="showmenu(); changeIcon();" class="fa-solid fa-bars"></i>
            </button>
          </div>
          <div class="dropdownMenu" id="myUL">
            <li><a href="#">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact</a></li>
            <li>
              <a class="signupBtn" href="#" style="color: aliceblue">Sign Up</a>
            </li>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="body-main">
          <div class="body-caintainer">
            <div class="signin-block">
              <div class="signin-main">
                <img src="images/teacher.png" alt="teacher-img" sizes="260px" />
              </div>
              <div class="mid-heading">
                <h4 class="heading">Teacher</h4>
                <a href="#" class="button button-design" data-toggle="modal" data-target="#tloginModal">Sign in</a>
              </div>
            </div>
            <div class="signin-block">
              <div class="signin-main">
                <img src="images/student.png" alt="teacher-img" sizes="260px" />
              </div>
              <div class="mid-heading">
                <h4 class="heading">Student</h4>
                <a href="#" class="button button-design" data-toggle="modal" data-target="#sloginModal">Sign in</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Teachers login form -->
    <div class="row">
      <div class="col-12">
        <div class="modal fade" id="tloginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-head border-bottom-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="form-title text-center">
                  <h4>Teachers Login</h4>
                </div>
                <div class="d-flex flex-column text-center">
                  <form action="login.php" method="POST">
                    <div class="form-group">
                      <h6 class="form-text-label">Email Address</h6>
                      <input type="email" name="email" class="form-control" id="email" placeholder="Enter email address...">
                    </div>
                    <div class="form-group">
                      <h6 class="form-text-label">Password</h6>
                      <input type="password" name="password" class="form-control" id="password" placeholder="Enter password...">
                    </div>
                    <button type="submit" class="login_btn" id="tsignin" name="tsignin">Login</button>
                  </form>

                </div>
              </div>
              <div class="modal-footer d-flex justify-content-center">
                <div class="signup-section">Do not have an account? <a href="#a" class="text-info" data-toggle="modal" data-target="#tsignupModal" data-dismiss="modal"> Sign Up</a>.</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Students login form -->
    <div class="row">
      <div class="col-12">
        <div class="modal fade" id="sloginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-head border-bottom-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="form-title text-center">
                  <h4>Students Login</h4>
                </div>
                <div class="d-flex flex-column text-center">
                  <form action="login.php" method="POST">
                    <div class="form-group">
                      <h6 class="form-text-label">Email Address</h6>
                      <input type="email" name="email" class="form-control" id="email" placeholder="Enter email address...">
                    </div>
                    <div class="form-group">
                      <h6 class="form-text-label">Password</h6>
                      <input type="password" name="password" class="form-control" id="password" placeholder="Enter password...">
                    </div>
                    <button type="button" class="login_btn" id="ssignin" name="ssignin" >Login</button>
                  </form>

                </div>
              </div>
              <div class="modal-footer d-flex justify-content-center">
                <div class="signup-section">Do not have an account? <a href="#a" class="text-info" data-toggle="modal" data-target="#ssignupModal" data-dismiss="modal"> Sign Up</a>.</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- selection modal -->
    <div class="row">
      <div class="col-12">
        <div class="modal fade" id="SelectModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-head border-bottom-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="form-title text-center">
                  <h4>Are you a teacher or student?</h4>
                </div>
                <div class="flex-row text-center mt-4">
                  <a href="#" class="button button-design mx-2" data-toggle="modal" data-target="#tsignupModal" data-dismiss="modal">Teacher </a>
                  <a href="#" class="button button-design mx-2" data-toggle="modal" data-target="#ssignupModal" data-dismiss="modal">Student</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- selection modal end -->
    <!-- sign up Teacher form -->
    <div class="row">
      <div class="col-12">
        <div class="modal fade" id="tsignupModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-head border-bottom-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="form-title text-center">
                  <h4>Teachers Sign Up</h4>
                </div>
                <div class="d-flex flex-column text-center">
                  <form action="action.php" method="POST">
                    <div class="form-group">
                      <h6 class="form-text-label">Teachers ID</h6>
                      <input type="text" name="id" class="form-control" id="id" placeholder="Enter ID...">
                    </div>
                    <div class="form-group">
                      <h6 class="form-text-label">Full Name</h6>
                      <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name...">
                    </div>
                    <div class="form-group">
                      <h6 class="form-text-label">Email Address</h6>
                      <input type="email" name="email" class="form-control" id="email" placeholder="Enter email address...">
                    </div>
                    <div class="form-group">
                      <h6 class="form-text-label">Password</h6>
                      <input type="password" name="password" class="form-control" id="password" placeholder="Enter password...">
                    </div>

                    <button type="submit" class="login_btn" id="tsignup" name="tsignup">Sign Up</button>
                  </form>

                </div>
              </div>
              <div class="modal-footer d-flex justify-content-center">
                <div class="signup-section">Already have an account? <a href="#a" class="text-info" data-toggle="modal" data-target="#tloginModal" data-dismiss="modal"> Sign In</a>.</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- sign up Students form -->
    <div class="row">
      <div class="col-12">
        <div class="modal fade" id="ssignupModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-head border-bottom-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="form-title text-center">
                  <h4>Students Sign Up</h4>
                </div>
                <div class="d-flex flex-column text-center">
                  <form action="action.php" method="POST">
                  <div class="form-group">
                      <h6 class="form-text-label">Student ID</h6>
                      <input type="text" name="id" class="form-control" id="id" placeholder="Enter ID...">
                    </div>
                    <div class="form-group">
                      <h6 class="form-text-label">Full Name</h6>
                      <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name...">
                    </div>
                    <div class="form-group">
                      <h6 class="form-text-label">Email Address</h6>
                      <input type="email" name="email" class="form-control" id="email" placeholder="Enter email address...">
                    </div>
                    <div class="form-group">
                      <h6 class="form-text-label">Password</h6>
                      <input type="password" name="password" class="form-control" id="password" placeholder="Enter password...">
                    </div>

                    <button type="submit" class="login_btn" id="ssignup" name="ssignup">Sign Up</button>
                  </form>

                </div>
              </div>
              <div class="modal-footer d-flex justify-content-center">
                <div class="signup-section">Already have an account? <a href="#a" class="text-info" data-toggle="modal" data-target="#sloginModal" data-dismiss="modal"> Sign In</a>.</div>
              </div>
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
            <section class="mb-4">
              <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>

              <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-github"></i></a>
            </section>
            <section class="">
              <form action="">
                <div class="row d-flex justify-content-center">
                  <div class="col-auto">
                    <p class="pt-2">
                      <strong>For any query</strong>
                    </p>
                  </div>
                  <div class="col-md-5 col-12">
                    <div class="form-outline form-white mb-4">
                      <input type="email" id="form5Example21" class="form-control" placeholder="Enter your thoughts.." />
                    </div>
                  </div>
                  <div class="col-auto">
                    <button type="submit" class="btn btn-outline-light mb-4">
                      Email Us
                    </button>
                  </div>
                </div>
              </form>
            </section>

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

    <script src="scripts\script.js"></script>
   
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  </div>
</body>

</html>