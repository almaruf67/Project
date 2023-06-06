<?php
include_once("header.php");
?>
<!-- Dropdown for selection-->

<div class="row">
      <div class="col-12">
            <div class="body-main">
                  <form action="admin-control.php" method="post">
                        <div class="body-caintainer">

                              <div class="signin-block">
                                    <div class="signin-main">
                                          <img src="../images/teacher.png" alt="teacher-img" sizes="260px" />
                                    </div>
                                    <div class="mid-heading">
                                          <Button type="submit" name="teacher" class="button button-design">Teacher</Button>
                                    </div>
                              </div>
                              <div class="signin-block">
                                    <div class="signin-main">
                                          <img src="../images/student.png" alt="teacher-img" sizes="260px" />
                                    </div>
                                    <div class="mid-heading">
                                          <Button type="submit" name="student" class="button button-design">Student</Button>
                                    </div>
                              </div>
                              <div class="signin-block">
                                    <div class="signin-main">
                                          <img src="../images/teacher.png" alt="teacher-img" sizes="260px" />
                                    </div>
                                    <div class="mid-heading">
                                          <Button type="submit" name="result" class="button button-design">Result</Button>
                                    </div>
                              </div>

                        </div>
                  </form>
            </div>
      </div>
</div>


<?php
include_once("footer.php");
?>