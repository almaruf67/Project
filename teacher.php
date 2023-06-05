<?php
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
                <select
                  class="form-select dropdown-btn"
                  aria-label="Default select example"
                >
                  <option selected>Semester</option>
                  <option value="Summer 2023">Summer 2023</option>
                  <option value="Spring 2023">Spring 2023</option>
                  <option value="Fall 2022">Fall 2022</option>
                  <option value="Summer 2022">Summer 2022</option>
                  <option value="Spring 2022">Spring 2022</option>
                </select>

                <select
                  class="form-select dropdown-btn-section"
                  aria-label="Default select example"
                >
                  <option selected>Section</option>
                  <option value="A">A</option>
                  <option value="B">B</option>
                  <option value="C">C</option>
                  <option value="D">D</option>
                  <option value="E">E</option>
                </select>

                <select
                  class="form-select dropdown-btn-course"
                  aria-label="Default select example"
                >
                  <option selected>Course</option>
                  <option value="CSE 422">CSE 422</option>
                  <option value="CSE 421">CSE 421</option>
                  <option value="CSE 411">CSE 411</option>
                  <option value="CSE 415">CSE 415</option>
                  <option value="CSE 414">CSE 414</option>
                </select>
              </div>
              <a class="teacher-input-next-button" href="#"
                ><i class="fa-solid fa-arrow-right"></i>
              </a>
            </div>
          </div>

        </div>
      </div>
<?php
include_once("footer.php");
?>