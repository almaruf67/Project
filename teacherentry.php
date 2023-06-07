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
                                                      <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#EditModal<?php echo $sid ?>">
                                                            <i style="font-size: 20px; margin-top: -5px; color:#212529;" class="fa-solid fa-pen-to-square"></i>
                                                      </button>
                                                      <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#FeedModal<?php echo $sid ?>">
                                                            <i class="fa-regular fa-message"  style="font-size: 20px; margin-top: -5px; color: #212529;"></i>
                                                      </button>
                                                      <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#AddModal<?php echo $sid ?>">
                                                                  Add
                                                            </button> -->
                                                </div>

                                                <!-- Modal Update-->
                                                <div class="modal fade" id="EditModal<?php echo $sid ?>" tabindex="-1" aria-labelledby="EditModal" aria-hidden="true">
                                                      <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                  <div class="modal-header">
                                                                        <h1 class="modal-title fs-5" id="EditModal">Update Information for <?php echo $sid ?></h1>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                  </div>
                                                                  <form method="POST" action="markupdate.php">
                                                                        <div class="modal-body">


                                                                              <input type="hidden" value="<?php echo $sid ?>" name="sid">
                                                                              <input type="hidden" value="<?php echo $item['Course_Title'] ?>" name="Course">

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
                                                <div class="modal fade" id="FeedModal<?php echo $sid ?>" tabindex="-1" aria-labelledby="FeedModal" aria-hidden="true">
                                                      <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                  <div class="modal-header">
                                                                        <h1 class="modal-title fs-5" id="FeedModal">Give a Feedback for <?php echo $sid ?></h1>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                  </div>
                                                                  <form method="POST" action="markupdate.php">
                                                                        <div class="modal-body">


                                                                              <input type="hidden" value="<?php echo $sid ?>" name="sid">
                                                                              <input type="hidden" value="<?php echo $course ?>" name="c_id">

                                                                              
                                                                              <div class="mb-3">
                                                                                    <label for="feed<?php echo $sid ?>" class="form-label">Feedback</label>
                                                                                    <textarea name="feedback" id="feed<?php echo $sid ?>" class="form-control" cols="20" rows="5"><?php echo $item['Feedback'] ?></textarea>
                                                                                    
                                                                              </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                              <button type="submit" class="btn btn-primary" name="feed">Save changes</button>
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
<div class="col-12 d-flex justify-content-end mb-2">
<a href="teacher.php"><button class="btn btn-primary">Done</button></a></div>

<?php
include_once("footer.php");

?>