<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css"
      integrity="sha512-t4GWSVZO1eC8BM339Xd7Uphw5s17a86tIZIj8qRxhnKub6WoyhnrxeCIMeAqBPgdZGlCcG2PrZjMc+Wr78+5Xg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
    />
    <title>Teacher</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="header">
            <div class="navbar">
              <div class="logo">
                <a href="index.html">Megamind</a>
              </div>
              <ul class="links">
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
              <a href="#"><img src="" alt=""> Profile</a>
              <button class="dropdown_button">
                <i
                  onclick="showmenu(); changeIcon();"
                  class="fa-solid fa-bars"
                ></i>
              </button>
            </div>
            <div class="dropdownMenu" id="myUL">
              <li><a href="#">Home</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Contact</a></li>
              <li>
                <a class="signupBtn" href="#" style="color: aliceblue"
                  >Sign Up</a
                >
              </li>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
            
        </div>
      </div>s
      <!-- footer -->
      
      <div class="row">
        <div class="col-12">
          <footer class="bg-dark text-center text-white">
            <div class="container p-4">
              <section class="mb-4">
                <a
                  class="btn btn-outline-light btn-floating m-1"
                  href="#!"
                  role="button"
                  ><i class="fab fa-facebook-f"></i
                ></a>

                <a
                  class="btn btn-outline-light btn-floating m-1"
                  href="#!"
                  role="button"
                  ><i class="fab fa-github"></i
                ></a>
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
                        <input
                          type="email"
                          id="form5Example21"
                          class="form-control"
                          placeholder="Enter your thoughts.."
                        />
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

            <div
              class="text-center p-3"
              style="background-color: rgba(0, 0, 0, 0.2)"
            >
              © 2023 Copyright: Megaminds All Right Reserved.
            </div>
          </footer>
        </div>
      </div>
    </div>
    <script src="scripts\script.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  </body>
</html>
