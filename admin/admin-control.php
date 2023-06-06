<?php
include_once("header.php");

require("../config.php");
if (isset($_POST['teacher'])) {
      $result = mysqli_query($mysqli, "SELECT * FROM teacher");

?>
      <!-- Dropdown for selection-->

      <div class="row">
            <div class="col-12">
                  <h1 align="center">Teachers Information</h1>
                  <table class="table">
                        <thead>
                              <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Password</th>
                                    <th scope="col">Action</th>
                              </tr>
                        </thead>
                        <tbody>
                              <?php
                              while ($key = $result->fetch_assoc()) {

                              ?>
                                    <tr>
                                          <td><?php echo $key['ID'] ?></td>
                                          <td><?php echo $key['Name'] ?></td>
                                          <td><?php echo $key['Email'] ?></td>
                                          <td><?php echo $key['Password'] ?></td>
                                          <td>
                                                <div style="display:flex; flex-direction:row;">
                                                      <!-- Button trigger modal -->
                                                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#EditModal<?php echo $key['ID'] ?>">
                                                            Update
                                                      </button>
                                                      <form method="POST" action="action.php">
                                                            <input style="display:none;" name="id" value="<?php echo $key['ID']; ?>">
                                                            <button class="btn btn-danger" type="submit" name="tdelete">
                                                                  Delete
                                                            </button>
                                                      </form>


                                                </div>

                                                <!-- Modal Update -->
                                                <div class="modal fade" id="EditModal<?php echo $key['ID'] ?>" tabindex="-1" aria-labelledby="EditModal" aria-hidden="true">
                                                      <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                  <div class="modal-header">
                                                                        <h1 class="modal-title fs-5" id="EditModal">Upadte Information for <?php echo $key['ID'] ?></h1>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                  </div>
                                                                  <form method="POST" action="action.php">
                                                                        <div class="modal-body">



                                                                              <div class="mb-3" style="display: none;">
                                                                                    <label for="id<?php echo $key['ID'] ?>" class="form-label">ID</label>
                                                                                    <input type="text" name="id" class="form-control" id="id<?php echo $key['ID'] ?>" value="<?php echo $key['ID'] ?>">
                                                                              </div>
                                                                              <div class="mb-3">
                                                                                    <label for="Name<?php echo $key['ID'] ?>" class="form-label">Name</label>
                                                                                    <input type="text" name="Name" class="form-control" id="Name<?php echo $key['ID'] ?>" value="<?php echo $key['Name'] ?>">
                                                                              </div>

                                                                              <div class="mb-3">
                                                                                    <label for="Email<?php echo $key['ID'] ?>" class="form-label">Email</label>
                                                                                    <input type="text" name="Email" class="form-control" id="Email<?php echo $key['ID'] ?>" value="<?php echo $key['Email'] ?>">
                                                                              </div>

                                                                              <div class="mb-3">
                                                                                    <label for="Password<?php echo $key['ID'] ?>" class="form-label">Password</label>
                                                                                    <input type="Password" name="Password" class="form-control" id="myInput" value="<?php echo $key['Password'] ?>">
                                                                                    <input type="checkbox" onclick="myFunction()">Show Password
                                                                              </div>


                                                                        </div>
                                                                        <div class="modal-footer">
                                                                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                              <button type="submit" class="btn btn-primary" name="tupdate">Save changes</button>
                                                                        </div>
                                                                  </form>

                                                            </div>
                                                      </div>
                                                </div>


                                          </td>
                                    </tr>
                              <?php
                              }
                              ?>
                        </tbody>
                  </table>
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#AddModal">
                        Add
                  </button>
                  <!-- Modal ADD -->
                  <div class="modal fade" id="ADDModal" tabindex="-1" aria-labelledby="ADDModal" aria-hidden="true">
                        <div class="modal-dialog">
                              <div class="modal-content">
                                    <div class="modal-header">
                                          <h1 class="modal-title fs-5" id="ADDModal">Insert Information</h1>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form method="POST" action="action.php">
                                          <div class="modal-body">

                                                <div class="mb-3">
                                                      <label for="id" class="form-label">ID</label>
                                                      <input type="number" name="id" class="form-control" id="id" placeholder="Enter your ID..">
                                                </div>
                                                <div class="mb-3">
                                                      <label for="Name" class="form-label">Name</label>
                                                      <input type="text" name="Name" class="form-control" id="Name" placeholder="Enter your Name..">
                                                </div>

                                                <div class="mb-3">
                                                      <label for="Email" class="form-label">Email</label>
                                                      <input type="text" name="Email" class="form-control" id="Email" placeholder="Enter Your Email..">
                                                </div>

                                                <div class="mb-3">
                                                      <label for="Password" class="form-label">Password</label>
                                                      <input type="Password" name="Password" class="form-control" id="myInput" placeholder="Enter your Password">
                                                      <input type="checkbox" onclick="myFunction()">Show Password
                                                </div>


                                          </div>
                                          <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary" name="tadd">Save changes</button>
                                          </div>
                                    </form>

                              </div>
                        </div>
                  </div>
            </div>
      </div>
      <script src="script.js"></script>
<?php
}

// Part of the student

else if (isset($_POST['student'])) {
      $result = mysqli_query($mysqli, "SELECT * FROM student");

?>
      <!-- Dropdown for selection-->

      <div class="row">
            <div class="col-12">
                  <h1 align="center">Students Information</h1>
                  <table class="table">
                        <thead>
                              <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Password</th>
                                    <th scope="col">Semester</th>
                                    <th scope="col">Section</th>
                                    <th scope="col">Action</th>
                              </tr>
                        </thead>
                        <tbody>
                              <?php
                              while ($key = $result->fetch_assoc()) {

                              ?>
                                    <tr>
                                          <td><?php echo $key['ID'] ?></td>
                                          <td><?php echo $key['Name'] ?></td>
                                          <td><?php echo $key['Email'] ?></td>
                                          <td><?php echo $key['Password'] ?></td>
                                          <td><?php echo $key['Semester'] ?></td>
                                          <td><?php echo $key['Section'] ?></td>
                                          <td>
                                                <div style="display:flex; flex-direction:row;">
                                                      <!-- Button trigger modal -->
                                                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#EditModal<?php echo $key['ID'] ?>">
                                                            Update
                                                      </button>
                                                      <form method="POST" action="action.php">
                                                            <input style="display:none;" name="id" value="<?php echo $key['ID']; ?>">
                                                            <button class="btn btn-danger" type="submit" name="sdelete">
                                                                  Delete
                                                            </button>
                                                      </form>


                                                </div>

                                                <!-- Modal Update -->
                                                <div class="modal fade" id="EditModal<?php echo $key['ID'] ?>" tabindex="-1" aria-labelledby="EditModal" aria-hidden="true">
                                                      <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                  <div class="modal-header">
                                                                        <h1 class="modal-title fs-5" id="EditModal">Upadte Information for <?php echo $key['ID'] ?></h1>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                  </div>
                                                                  <form method="POST" action="action.php">
                                                                        <div class="modal-body">



                                                                              <div class="mb-3" style="display: none;">
                                                                                    <label for="id<?php echo $key['ID'] ?>" class="form-label">ID</label>
                                                                                    <input type="text" name="id" class="form-control" id="id<?php echo $key['ID'] ?>" value="<?php echo $key['ID'] ?>">
                                                                              </div>
                                                                              <div class="mb-3">
                                                                                    <label for="Name<?php echo $key['ID'] ?>" class="form-label">Name</label>
                                                                                    <input type="text" name="Name" class="form-control" id="Name<?php echo $key['ID'] ?>" value="<?php echo $key['Name'] ?>">
                                                                              </div>

                                                                              <div class="mb-3">
                                                                                    <label for="Email<?php echo $key['ID'] ?>" class="form-label">Email</label>
                                                                                    <input type="text" name="Email" class="form-control" id="Email<?php echo $key['ID'] ?>" value="<?php echo $key['Email'] ?>">
                                                                              </div>
                                                                              <div class="mb-3">
                                                                                    <label for="Semester<?php echo $key['ID'] ?>" class="form-label">Semester</label>
                                                                                    <select name="Semester" id="Semester" class="form-select" aria-label="Default select example">
                                                                                          <option selected id="Semester<?php echo $key['ID'] ?>" value="<?php echo $key['Semester'] ?>"><?php echo $key['Semester'] ?></option>
                                                                                          <option value="Summer 2023">Summer 2023</option>
                                                                                          <option value="Spring 2023">Spring 2023</option>
                                                                                          <option value="Fall 2022">Fall 2022</option>
                                                                                          <option value="Summer 2022">Summer 2022</option>
                                                                                          <option value="Spring 2022">Spring 2022</option>
                                                                                    </select>
                                                                              </div>

                                                                              <div class="mb-3">
                                                                                    <label for="Section<?php echo $key['ID'] ?>" class="form-label">Section</label>

                                                                                    <select name="Section" id="Section" class="form-select" aria-label="Default select example">
                                                                                          <option selected value="<?php echo $key['Section'] ?>"><?php echo $key['Section'] ?></option>
                                                                                          <option value="A">A</option>
                                                                                          <option value="B">B</option>
                                                                                          <option value="C">C</option>
                                                                                          <option value="D">D</option>
                                                                                    </select>

                                                                              </div>

                                                                              <div class="mb-3">
                                                                                    <label for="Password<?php echo $key['ID'] ?>" class="form-label">Password</label>
                                                                                    <input type="Password" name="Password" class="form-control" id="myInput" value="<?php echo $key['Password'] ?>">
                                                                                    <input type="checkbox" onclick="myFunction()">Show Password
                                                                              </div>

                                                                        </div>
                                                                        <div class="modal-footer">
                                                                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                              <button type="submit" class="btn btn-primary" name="supdate">Save changes</button>
                                                                        </div>
                                                                  </form>

                                                            </div>
                                                      </div>
                                                </div>


                                          </td>
                                    </tr>
                              <?php
                              }
                              ?>
                        </tbody>
                  </table>
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#AddModal">
                        Add
                  </button>
                  <!-- Modal ADD -->
                  <div class="modal fade" id="ADDModal" tabindex="-1" aria-labelledby="ADDModal" aria-hidden="true">
                        <div class="modal-dialog">
                              <div class="modal-content">
                                    <div class="modal-header">
                                          <h1 class="modal-title fs-5" id="ADDModal">Insert Information</h1>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form method="POST" action="action.php">
                                          <div class="modal-body">

                                                <div class="mb-3">
                                                      <label for="id" class="form-label">ID</label>
                                                      <input type="number" name="id" class="form-control" id="id" placeholder="Enter your ID..">
                                                </div>
                                                <div class="mb-3">
                                                      <label for="Name" class="form-label">Name</label>
                                                      <input type="text" name="Name" class="form-control" id="Name" placeholder="Enter your Name..">
                                                </div>

                                                <div class="mb-3">
                                                      <label for="Email" class="form-label">Email</label>
                                                      <input type="text" name="Email" class="form-control" id="Email" placeholder="Enter Your Email..">
                                                </div>

                                                <div class="mb-3">
                                                      <label for="Semester" class="form-label">Semester</label>
                                                      <select name="Semester" id="Semester" class="form-select" aria-label="Default select example">
                                                            <option selected>------</option>
                                                            <option value="Summer 2023">Summer 2023</option>
                                                            <option value="Spring 2023">Spring 2023</option>
                                                            <option value="Fall 2022">Fall 2022</option>
                                                            <option value="Summer 2022">Summer 2022</option>
                                                            <option value="Spring 2022">Spring 2022</option>
                                                      </select>
                                                </div>

                                                <div class="mb-3">
                                                      <label for="Section" class="form-label">Section</label>
                                                      <select name="Section" id="Section" class="form-select" aria-label="Default select example">
                                                            <option selected>------</option>
                                                            <option value="A">A</option>
                                                            <option value="B">B</option>
                                                            <option value="C">C</option>
                                                            <option value="D">D</option>
                                                      </select>
                                                </div>



                                                <div class="mb-3">
                                                      <label for="Password" class="form-label">Password</label>
                                                      <input type="Password" name="Password" class="form-control" id="myInput" placeholder="Enter your Password">
                                                      <input type="checkbox" onclick="myFunction()">Show Password
                                                </div>


                                          </div>
                                          <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary" name="sadd">Save changes</button>
                                          </div>
                                    </form>

                              </div>
                        </div>
                  </div>
            </div>
      </div>
      <script src="script.js"></script>
<?php
}

//  Part of the Result

else if (isset($_POST['result'])) {
      $result = mysqli_query($mysqli, "SELECT * FROM result");

?>
      <!-- Dropdown for selection-->

      <div class="row">
            <div class="col-12">
                  <h1 align="center">Students Results Information</h1>
                  <table class="table">
                        <thead>
                              <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Course Title</th>
                                    <th scope="col">Student ID</th>
                                    <th scope="col">Quiz</th>
                                    <th scope="col">Mid</th>
                                    <th scope="col">Final</th>
                                    <th scope="col">Action</th>
                              </tr>
                        </thead>
                        <tbody>
                              <?php
                              while ($key = $result->fetch_assoc()) {

                              ?>
                                    <tr>
                                          <td><?php echo $key['Id'] ?></td>
                                          <td><?php echo $key['Course_Title'] ?></td>
                                          <td><?php echo $key['S_ID'] ?></td>
                                          <td><?php echo $key['Quiz'] ?></td>
                                          <td><?php echo $key['Mid'] ?></td>
                                          <td><?php echo $key['Final'] ?></td>
                                          <td>
                                                <div style="display:flex; flex-direction:row;">
                                                      <!-- Button trigger modal -->
                                                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#EditModal<?php echo $key['Id'] ?>">
                                                            Update
                                                      </button>
                                                      <form method="POST" action="action.php">
                                                            <input style="display:none;" name="id" value="<?php echo $key['Id']; ?>">
                                                            <button class="btn btn-danger" type="submit" name="rdelete">
                                                                  Delete
                                                            </button>
                                                      </form>


                                                </div>

                                                <!-- Modal Update -->
                                                <div class="modal fade" id="EditModal<?php echo $key['Id'] ?>" tabindex="-1" aria-labelledby="EditModal" aria-hidden="true">
                                                      <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                  <div class="modal-header">
                                                                        <h1 class="modal-title fs-5" id="EditModal">Upadte Information for <?php echo $key['Id'] ?></h1>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                  </div>
                                                                  <form method="POST" action="action.php">
                                                                        <div class="modal-body">

                                                                              <div class="mb-3" style="display: none;">
                                                                                    <label for="id<?php echo $key['Id'] ?>" class="form-label">ID</label>
                                                                                    <input type="text" name="id" class="form-control" id="id<?php echo $key['Id'] ?>" value="<?php echo $key['Id'] ?>">
                                                                              </div>
                                                                              <div class="mb-3">
                                                                                    <label for="Course<?php echo $key['Id'] ?>" class="form-label">Course Title</label>
                                                                                    <select name="Course" class="form-select" aria-label="Default select example">
                                                                                          <option value="<?php echo $key['Course_Title'] ?>" selected><?php echo $key['Course_Title'] ?></option>
                                                                                          <option value="CSE 422">CSE 422</option>
                                                                                          <option value="CSE 421">CSE 421</option>
                                                                                          <option value="CSE 411">CSE 411</option>
                                                                                          <option value="CSE 415">CSE 415</option>
                                                                                          <option value="CSE 414">CSE 414</option>
                                                                                    </select>
                                                                              </div>

                                                                              <div class="mb-3">
                                                                                    <label for="sid<?php echo $key['Id'] ?>" class="form-label">Student ID</label>
                                                                                    <input type="number" name="sid" class="form-control" id="sid<?php echo $key['Id'] ?>" value="<?php echo $key['S_ID'] ?>" disabled>

                                                                              </div>

                                                                              <div class="mb-3">
                                                                                    <label for="Quiz<?php echo $key['Id'] ?>" class="form-label">Quiz</label>
                                                                                    <input type="number" name="Quiz" class="form-control" id="Quiz<?php echo $key['Id'] ?>" value="<?php echo $key['Quiz'] ?>">
                                                                              </div>
                                                                              <div class="mb-3">
                                                                                    <label for="Mid<?php echo $key['Id'] ?>" class="form-label">Mid</label>
                                                                                    <input type="number" name="Mid" class="form-control" id="Mid<?php echo $key['Id'] ?>" value="<?php echo $key['Mid'] ?>">
                                                                              </div>
                                                                              <div class="mb-3">
                                                                                    <label for="Final<?php echo $key['Id'] ?>" class="form-label">Final</label>
                                                                                    <input type="number" name="Final" class="form-control" id="Final<?php echo $key['Id'] ?>" value="<?php echo $key['Final'] ?>">
                                                                                    
                                                                              </div>

                                                                        </div>
                                                                        <div class="modal-footer">
                                                                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                              <button type="submit" class="btn btn-primary" name="rupdate">Save changes</button>
                                                                        </div>
                                                                  </form>

                                                            </div>
                                                      </div>
                                                </div>


                                          </td>
                                    </tr>
                              <?php
                              }
                              ?>
                        </tbody>
                  </table>
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#AddModal">
                        Add
                  </button>
                  <!-- Modal ADD -->
                  <div class="modal fade" id="ADDModal" tabindex="-1" aria-labelledby="ADDModal" aria-hidden="true">
                        <div class="modal-dialog">
                              <div class="modal-content">
                                    <div class="modal-header">
                                          <h1 class="modal-title fs-5" id="ADDModal">Insert Information</h1>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form method="POST" action="action.php">
                                          <div class="modal-body">

                                                <div class="mb-3">
                                                      <label for="Course" class="form-label">Course Title</label>
                                                      <select name="Course" class="form-select" aria-label="Default select example" required>
                                                            <option selected value="">------</option>
                                                            <option value="CSE 422">CSE 422</option>
                                                            <option value="CSE 421">CSE 421</option>
                                                            <option value="CSE 411">CSE 411</option>
                                                            <option value="CSE 415">CSE 415</option>
                                                            <option value="CSE 414">CSE 414</option>
                                                      </select>
                                                </div>
                                                
                                                <div class="mb-3">
                                                      <label for="sid" class="form-label">Student ID</label>
                                                      <input type="number" name="sid" class="form-control" id="sid" placeholder="Enter Student ID" required>
                                                      <small class="w-100">Make Sure The Student ID exist</small>
                                                </div>
                                                
                                                <div class="mb-3">
                                                      <label for="Quiz" class="form-label">Quiz</label>
                                                      <input type="number" name="Quiz" class="form-control" id="Quiz" value="0">
                                                </div>
                                                <div class="mb-3">
                                                      <label for="Mid" class="form-label">Mid</label>
                                                      <input type="number" name="Mid" class="form-control" id="Mid" value="0">
                                                </div>
                                                <div class="mb-3">
                                                      <label for="Final" class="form-label">Final</label>
                                                      <input type="number" name="Final" class="form-control" id="Final" value="0">
                                                </div>


                                          </div>
                                          <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary" name="radd">Save changes</button>
                                          </div>
                                    </form>

                              </div>
                        </div>
                  </div>
            </div>
      </div>
      <script src="script.js"></script>
<?php
}
include_once("footer.php");
?>