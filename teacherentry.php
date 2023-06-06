<?php


require("config.php");
include_once("header.php");
if (isset($_POST['entry'])) {
      $_SESSION['sec'] = $_POST['section'];
      $_SESSION['sem'] = $_POST['semester'];
      $_SESSION['cou'] = $_POST['course'];
}
$section  = $_SESSION['sec'];
$semester = $_SESSION['sem'];
$course   = $_SESSION['cou'];
$result = mysqli_query($mysqli, "SELECT * FROM student WHERE Semester='$semester' AND Section='$section' ");

?>
<!-- Dropdown for selection-->

<div class="row">
      <div class="col-12">
            <table class="table">
                  <thead>
                        <tr>
                              <th scope="col">ID</th>
                              <th scope="col">Name</th>
                              <th scope="col">Semester</th>
                              <th scope="col">Section</th>
                              <th scope="col">Course_Title</th>
                              <th scope="col">Quiz</th>
                              <th scope="col">Mid</th>
                              <th scope="col">Final</th>
                              <th scope="col">Feedback</th>
                              <th scope="col">Action</th>
                        </tr>
                  </thead>
                  <tbody>
                        <?php
                        while ($key = $result->fetch_assoc()) {
                              $sid = $key['ID'];
                              $value = mysqli_query($mysqli, "SELECT * FROM result WHERE S_ID='$sid' AND Course_Title='$course' ");
                              while ($item = $value->fetch_assoc()) {
                        ?>
                                    <tr>
                                          <td><?php echo $sid ?></td>
                                          <td><?php echo $key['Name'] ?></td>
                                          <td><?php echo $key['Semester'] ?></td>
                                          <td><?php echo $key['Section'] ?></td>
                                          <td><?php echo $item['Course_Title'] ?></td>
                                          <td><?php echo $item['Quiz'] ?></td>
                                          <td><?php echo $item['Mid'] ?></td>
                                          <td><?php echo $item['Final'] ?></td>
                                          <td><?php echo $item['Feedback'] ?></td>
                                          <td>
                                                <div style="display:flex; flex-direction:row;">
                                                      <!-- Button trigger modal -->
                                                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#EditModal<?php echo $sid ?>">
                                                            Update
                                                      </button>
                                                      <form >
                                                                  <input type="hidden" name="id" value="<?php echo $sid; ?>">
                                                                  <button class="btn btn-danger" type="submit" name="fupdate">
                                                                        Feedback
                                                                  </button>
                                                            </form>
                                                            <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#AddModal<?php echo $sid ?>">
                                                                  Add
                                                            </button> -->
                                                </div>

                                                 <!-- Modal Update-->
                                                <div class="modal fade" id="EditModal<?php echo $sid ?>" tabindex="-1" aria-labelledby="EditModal" aria-hidden="true">
                                                      <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                  <div class="modal-header">
                                                                        <h1 class="modal-title fs-5" id="EditModal">Upadte Information for <?php echo $sid ?></h1>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                  </div>
                                                                  <form method="POST" action="markupdate.php">
                                                                        <div class="modal-body">


                                                                              <input type="hidden" value="<?php echo $sid ?>" name="sid">

                                                                              <div class="mb-3">
                                                                                    <label for="Name<?php echo $sid ?>" class="form-label">Name</label>
                                                                                    <input type="text" name="Name" class="form-control" id="Name<?php echo $sid ?>" value="<?php echo $key['Name'] ?>" disabled>
                                                                              </div>

                                                                              <div class="mb-3">
                                                                                    <label for="Semester<?php echo $sid ?>" class="form-label">Semester</label>
                                                                                    <input type="text" name="Semester" class="form-control" id="Semester<?php echo $sid ?>" value="<?php echo $key['Semester'] ?>" disabled>
                                                                              </div>

                                                                              <div class="mb-3">
                                                                                    <label for="Section<?php echo $sid ?>" class="form-label">Section</label>
                                                                                    <input type="text" name="Section" class="form-control" id="Section<?php echo $sid ?>" value="<?php echo $key['Section'] ?>" disabled>
                                                                              </div>

                                                                              <div class="mb-3">
                                                                                    <label for="Course<?php echo $sid ?>" class="form-label">Course_Title</label>
                                                                                    <input type="text" name="Course" class="form-control" id="Course<?php echo $sid ?>" value="<?php echo $item['Course_Title'] ?>" disabled>
                                                                              </div>

                                                                              <div class="mb-3">
                                                                                    <label for="Quiz<?php echo $sid ?>" class="form-label">Quiz</label>
                                                                                    <input type="number" name="Quiz" class="form-control" id="Quiz<?php echo $sid ?>" value="<?php echo $item['Quiz'] ?>">
                                                                              </div>
                                                                              <div class="mb-3">
                                                                                    <label for="Mid<?php echo $sid ?>" class="form-label">Mid</label>
                                                                                    <input type="number" name="Mid" class="form-control" id="Mid<?php echo $sid ?>" value="<?php echo $item['Mid'] ?>">
                                                                              </div>
                                                                              <div class="mb-3">
                                                                                    <label for="Final<?php echo $sid ?>" class="form-label">Final</label>
                                                                                    <input type="number" name="Final" class="form-control" id="Final<?php echo $sid ?>" value="<?php echo $item['Final'] ?>">
                                                                              </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                              <button type="submit" class="btn btn-primary" name="update">Save changes</button>
                                                                        </div>
                                                                  </form>

                                                            </div>
                                                      </div>
                                                </div>

                                                <!-- Modal Feedback-->
                                                <div class="modal fade" id="EditModal<?php echo $sid ?>" tabindex="-1" aria-labelledby="EditModal" aria-hidden="true">
                                                      <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                  <div class="modal-header">
                                                                        <h1 class="modal-title fs-5" id="EditModal">Upadte Information for <?php echo $sid ?></h1>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                  </div>
                                                                  <form method="POST" action="markupdate.php">
                                                                        <div class="modal-body">


                                                                              <input type="hidden" value="<?php echo $sid ?>" name="sid">

                                                                              <div class="mb-3">
                                                                                    <label for="Name<?php echo $sid ?>" class="form-label">Name</label>
                                                                                    <input type="text" name="Name" class="form-control" id="Name<?php echo $sid ?>" value="<?php echo $key['Name'] ?>" disabled>
                                                                              </div>

                                                                              <div class="mb-3">
                                                                                    <label for="Semester<?php echo $sid ?>" class="form-label">Semester</label>
                                                                                    <input type="text" name="Semester" class="form-control" id="Semester<?php echo $sid ?>" value="<?php echo $key['Semester'] ?>" disabled>
                                                                              </div>

                                                                              <div class="mb-3">
                                                                                    <label for="Section<?php echo $sid ?>" class="form-label">Section</label>
                                                                                    <input type="text" name="Section" class="form-control" id="Section<?php echo $sid ?>" value="<?php echo $key['Section'] ?>" disabled>
                                                                              </div>

                                                                              <div class="mb-3">
                                                                                    <label for="Course<?php echo $sid ?>" class="form-label">Course_Title</label>
                                                                                    <input type="text" name="Course" class="form-control" id="Course<?php echo $sid ?>" value="<?php echo $item['Course_Title'] ?>" disabled>
                                                                              </div>

                                                                              <div class="mb-3">
                                                                                    <label for="Quiz<?php echo $sid ?>" class="form-label">Quiz</label>
                                                                                    <input type="number" name="Quiz" class="form-control" id="Quiz<?php echo $sid ?>" value="<?php echo $item['Quiz'] ?>">
                                                                              </div>
                                                                              <div class="mb-3">
                                                                                    <label for="Mid<?php echo $sid ?>" class="form-label">Mid</label>
                                                                                    <input type="number" name="Mid" class="form-control" id="Mid<?php echo $sid ?>" value="<?php echo $item['Mid'] ?>">
                                                                              </div>
                                                                              <div class="mb-3">
                                                                                    <label for="Final<?php echo $sid ?>" class="form-label">Final</label>
                                                                                    <input type="number" name="Final" class="form-control" id="Final<?php echo $sid ?>" value="<?php echo $item['Final'] ?>">
                                                                              </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                              <button type="submit" class="btn btn-primary" name="update">Save changes</button>
                                                                        </div>
                                                                  </form>

                                                            </div>
                                                      </div>
                                                </div>
                                          </td>
                                    </tr>
                        <?php
                              }
                        }
                        ?>
                  </tbody>
            </table>
      </div>
</div>

<?php
include_once("footer.php");

?>