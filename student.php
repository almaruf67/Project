<?php
include_once("header.php");
?>

      <div class="row">
        <div class="col-12">
          <div class="row">
            <div class="padding-first-row">
              <div class="col-6">
                <div class="search-chart-container">
                  <div class="search-chart-box px-5">
                    <div class="input-group">
                        <div class="id-semester-display">
                            <input
                            type="number"
                            class="form-control searchbox"
                            placeholder="Enter ID"
                            style="width: 50%; border-radius: 5px 5px 5px 5px"
                          />
    
                          <select
                            class="form-select dropdown-btn-student"
                            aria-label="Default select example"
                          >
                            <option selected> Semester</option>
                            <option value="Summer 2023">Summer 2023</option>
                            <option value="Spring 2023">Spring 2023</option>
                            <option value="Fall 2022">Fall 2022</option>
                            <option value="Summer 2022">Summer 2022</option>
                            <option value="Spring 2022">Spring 2022</option>
                          </select>
                        </div>
                      
                      <div class="input-group-append">
                        <button class="btn btn-secondary" type="button">
                          <i class="fa fa-search"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6">
                <div class="search-chart-container">
                  <div class="search-chart-box"><?php 
                  echo $_SESSION['ID']."<br>" ."   ". $_SESSION['Name']."   ".  $_SESSION['Email']."<br>";

                  ?></div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <div class="barchart-container">
                <div class="barchart-box">
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
<?php
include_once("footer.php");
?>