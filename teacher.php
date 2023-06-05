<?php


require("config.php");

$result = mysqli_query($mysqli,"SELECT * FROM student");
include_once("header.php");
?>
<!-- Dropdown for selection-->

<div class="row">
  <div class="col-12">
    <div class="background-image">
      <img src="images/bg.png" alt="">
    </div>
    <div class="semester">
      <div class="selection-teacher-mode">
        <div class="teacher-title">
          <p>Input Result</p>
        </div>
        <div class="select-sem-sec">
          <select class="form-select dropdown-btn" aria-label="Default select example">
            <option selected>Semester</option>
            <option value="Summer 2023">Summer 2023</option>
            <option value="Spring 2023">Spring 2023</option>
            <option value="Fall 2022">Fall 2022</option>
            <option value="Summer 2022">Summer 2022</option>
            <option value="Spring 2022">Spring 2022</option>
          </select>

          <select name="section" class="form-select dropdown-btn-section" aria-label="Default select example">
            <option selected>Section</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
            <option value="E">E</option>
          </select>

          <select name="Course" class="form-select dropdown-btn-course" aria-label="Default select example">
            <option selected>Course</option>
            <option value="CSE 422">CSE 422</option>
            <option value="CSE 421">CSE 421</option>
            <option value="CSE 411">CSE 411</option>
            <option value="CSE 415">CSE 415</option>
            <option value="CSE 414">CSE 414</option>
          </select>
        </div>
        <a class="teacher-input-next-button" href="#"><i class="fa-solid fa-arrow-right"></i>
        </a>
      </div>
    </div>

  </div>

  <div class="row">
    <div class="col-12">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Semester</th>
            <th scope="col">Section</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          while ($item = $result->fetch_assoc()) {
          ?>
            <tr>
              <td><?php echo $item['ID'] ?></td>
              <td><?php echo $item['Name'] ?></td>
              <td><?php echo $item['Email'] ?></td>
              <td><?php echo $item['Semester'] ?></td>
              <td><?php echo $item['Section'] ?></td>
              <td>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $item['ID'] ?>">
                  Edit
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal<?php echo $item['ID'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title <?php echo $item['id'] ?></h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <form method="POST" action="update.php">
                        <div class="modal-body">


                          <input type="hidden" name="id" value="<?php echo $item['ID'] ?>">

                          <div class="mb-3">
                            <label for="name<?php echo $item['id'] ?>" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="name<?php echo $item['id'] ?>" aria-describedby="emailHelp" value="<?php echo $item['name'] ?>">
                          </div>

                          <div class="mb-3">
                            <label for="email<?php echo $item['id'] ?>" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="email<?php echo $item['id'] ?>" aria-describedby="emailHelp" value="<?php echo $item['email'] ?>">
                          </div>

                          <div class="mb-3">
                            <label for="subject<?php echo $item['id'] ?>" class="form-label">Subject</label>
                            <input type="text" name="subject" class="form-control" id="subject<?php echo $item['id'] ?>" aria-describedby="emailHelp" value="<?php echo $item['subject'] ?>">
                          </div>

                          <div class="mb-3">
                            <label for="message<?php echo $item['id'] ?>" class="form-label">Message</label>
                            <textarea name="message" id="message<?php echo $item['id'] ?>" class="form-control"><?php echo $item['message'] ?></textarea>
                          </div>



                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>

                <form method="GET" action="delete.php">
                  <input type="hidden" name="id" value="<?php echo $item['ID']; ?>">
                  <button class="btn btn-danger" type="submit">
                    Delete
                  </button>
                </form>

              </td>
            </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?php
include_once("footer.php");
?>