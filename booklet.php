<?php
 include "link.php";
 session_start();
 $Regno = $_SESSION['Regno'];
 if(empty($Regno)){
   header("location:login.php");
 }
 

  if (isset($_POST['submit'])) {
  $Department = $_POST['Department'];
  $Batch = $_POST['Batch'];
  $Religion = $_POST['Religion'];
  $Caste = $_POST['Caste'];
  $DOB = $_POST['DOB'];
  $Gender = $_POST['Gender'];
  $Community = $_POST['Community'];
  $Smobile = $_POST['Smobile'];
  $Fname = $_POST['Fname'];
  $Pmobile = $_POST['Pmobile'];
  $Poccp = $_POST['Poccp'];
  $Income = $_POST['Income'];
  $Address = $_POST['Address'];
  $Aplace = $_POST['Aplace'];
  $Acity = $_POST['Acity'];
  $Adistrict = $_POST['Adistrict'];
  $Astate = $_POST['Astate'];
  $Pincode = $_POST['Pincode'];
  $Tenth = $_POST['Tenth'];
  $Inter = $_POST['Inter'];
  $JeeMain = $_POST['JeeMain'];
  $Rank = $_POST['Rank'];
  $Admission = $_POST['Admission'];
  $Category = $_POST['Category'];
  $Goal = $_POST['Goal'];
  $CareInter = $_POST['CareInter'];
  $Hobbies = $_POST['Hobbies'];
  $Strenghts = $_POST['Strenghts'];
  $Improve = $_POST['Improve'];
  $Photo = $_POST['photo'];
mysqli_query($con, "insert into std_detls values('$Regno','$DOB','$Department','$Batch','$Gender','$Smobile','$Fname','$Pmobile','$Poccp','$Caste','$Community','$Religion','$Income')");
mysqli_query($con, "insert into about values('$Regno','$Tenth','$Inter','$JeeMain','$Rank','$Admission','$Category','$Photo','$Goal','$CareInter','$Hobbies','$Strenghts','$Improve')");
mysqli_query($con, "insert into address values('$Regno','$Address','$Aplace','$Adistrict','$Astate','$Pincode','$Acity')");
mysqli_query($con, "update student set random = 'dataupdatedshiva' where regno= '$Regno'");
echo "<script>alert('Your Data was Submited Sucessfully')</script>";
header("location:index.php");
  }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Purple Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
  <link rel="stylesheet" href="assets/css/booklet.css">
  <link rel="shortcut icon" href="assets/images/favicon.ico" />
</head>

<body>
  <div class="container-scroller">
    <?php
    include "header.php";
    ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <?php
      include "navbar.php";
      ?>
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Student Details</h4>
                  <form class="form-sample" method="post" >
                    <p class="card-description">Details</p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Department</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="Department">
                              <option value="CSD">CSD</option>
                              <option value="CSE">CSE</option>
                              <option value="IOT">CSE(IOT)</option>
                              <option value="CSBS">CSBS</option>
                              <option value="IT">IT</option>
                              <option value="AIDS">AIDS</option>
                              <option value="AIML">AIML</option>
                              <option value="ECE">ECE</option>
                              <option value="EEE">EEE</option>
                              <option value="CIVIL">CIVIL</option>
                              <option value="MECH">MECH</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label"> Batch </label>
                          <div class="col-sm-9">
                            <select class="form-control" name="Batch">
                              <option value="2023">2019-2023</option>
                              <option value="2024">2020-2024</option>
                              <option value="2025">2021-2025</option>
                              <option value="2026">2022-2026</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Religion</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="Religion" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Caste</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="Caste" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Date of Birth</label>
                          <div class="col-sm-9">
                            <input class="form-control" type="date" name="DOB" placeholder="dd/mm/yyyy" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label"> Gender </label>
                          <div class="col-sm-4">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="Gender" id="membershipRadios1" value="2" checked> Male
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-5">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="Gender" id="membershipRadios2" value="1"> Female 
                              </label>
                            </div>
                          </div>

                        </div>
                      </div>
                    </div>
                    <!-- <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="img[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                          </span>
                        </div>
                      </div> -->
                    <p class="card-description"> Personal Details </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Community</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="Community" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label"> Student Mobile </label>
                          <div class="col-sm-9">
                            <input type="text" name="Smobile" class="form-control" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Father Name </label>
                          <div class="col-sm-9">
                            <input type="text" name="Fname" class="form-control" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Parent Mobile</label>
                          <div class="col-sm-9">
                            <input type="text" name="Pmobile" class="form-control" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label"> Occupation</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="Poccp" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Income</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="Income" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <p class="card-description"> Address </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Address</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="Address" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">District</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="Adistrict" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Land Mark</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="Aplace" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">State</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="Astate" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">City</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="Acity" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Post Code</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="Pincode" />
                          </div>
                        </div>
                      </div>
                    </div>

                    <p class="card-description"> Accedimics in percantage</p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label"> Tenth </label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="Tenth" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label"> Inter/Polytchnic</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="Inter" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Jee Mains</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="JeeMain" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label"> EAPCET/ECET</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="Rank" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label"> Admission</label>
                          <div class="col-sm-9">
                          <select class="form-control" name="Admission" >
                          <option value="">Mode of Admission</option>
                          <option value="A cat">Category A</option>
                          <option value="B cat">Category B</option>
                          <option value="Spot">Spot Admission</option>
                          <option value="Management">Management Seat</option>                          
                          </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label"> Category </label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control" name="Category" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <!-- <div class="col-12 grid-margin stretch-card"> -->
                      <!-- <div class="card"> -->
                      <div class="card-body">
                      <h4 class="card-title">About Your Self</h4>
                      <p class="card-description"> your interst which will tell your self </p>
                      <div div class="form-group">
                        <label for="exampleInputName1"> Goal in Life</label>
                        <input type="text" class="form-control" name="Goal" id="exampleInputName1" placeholder="I want to become ........">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3"> Carrer Interest </label>
                        <input type="text" class="form-control" name="CareInter" id="exampleInputEmail3" placeholder="I am Interest.........">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4"> Hobbies </label>
                        <input type="text" class="form-control" name="Hobbies" id="exampleInputPassword4" placeholder="My Hobbies are.....">
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender"> Strengths</label>
                        <input type="text" class="form-control" name="Strenghts" id="exampleInputPassword4" placeholder="I have .....">
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender"> Area to Improve</label>
                        <input type="text" class="form-control" name="Improve" id="exampleInputPassword4" placeholder="I want to Improve ......">
                      </div>
                      <div class="form-group">
                        <label> Your Photo</label>
                        <div class="input-group col-xs-12">
                          <input  class="form-control file-upload-info" name="photo" placeholder="My Profile Picture ...." type="file">
                        </div>
                      </div>
                      
                      <button type="submit" name="submit" class="btn btn-gradient-primary me-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                      </div>
                      <!-- </div> -->
                      <!-- </div> -->
                    </div>
                  </form>
              </div>
            </div>
          </div>
        </div>


      </div>
      <!-- content-wrapper ends -->
      <!-- partial:partials/_footer.html -->


      <?php
      include "fotter.php";
      ?>
      <!-- partial -->
    </div>

    <!-- main-panel ends -->
  </div>
  <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="assets/vendors/chart.js/Chart.min.js"></script>
  <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="assets/js/off-canvas.js"></script>
  <script src="assets/js/hoverable-collapse.js"></script>
  <script src="assets/js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page -->
  <script src="assets/js/dashboard.js"></script>
  <script src="assets/js/todolist.js"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'></script>
  <script>
    //DOM elements
    const DOMstrings = {
      stepsBtnClass: 'multisteps-form__progress-btn',
      stepsBtns: document.querySelectorAll(`.multisteps-form__progress-btn`),
      stepsBar: document.querySelector('.multisteps-form__progress'),
      stepsForm: document.querySelector('.multisteps-form__form'),
      stepsFormTextareas: document.querySelectorAll('.multisteps-form__textarea'),
      stepFormPanelClass: 'multisteps-form__panel',
      stepFormPanels: document.querySelectorAll('.multisteps-form__panel'),
      stepPrevBtnClass: 'js-btn-prev',
      stepNextBtnClass: 'js-btn-next'
    };


    //remove class from a set of items
    const removeClasses = (elemSet, className) => {

      elemSet.forEach(elem => {

        elem.classList.remove(className);

      });

    };

    //return exect parent node of the element
    const findParent = (elem, parentClass) => {

      let currentNode = elem;

      while (!currentNode.classList.contains(parentClass)) {
        currentNode = currentNode.parentNode;
      }

      return currentNode;

    };

    //get active button step number
    const getActiveStep = elem => {
      return Array.from(DOMstrings.stepsBtns).indexOf(elem);
    };

    //set all steps before clicked (and clicked too) to active
    const setActiveStep = activeStepNum => {

      //remove active state from all the state
      removeClasses(DOMstrings.stepsBtns, 'js-active');

      //set picked items to active
      DOMstrings.stepsBtns.forEach((elem, index) => {

        if (index <= activeStepNum) {
          elem.classList.add('js-active');
        }

      });
    };

    //get active panel
    const getActivePanel = () => {

      let activePanel;

      DOMstrings.stepFormPanels.forEach(elem => {

        if (elem.classList.contains('js-active')) {

          activePanel = elem;

        }

      });

      return activePanel;

    };

    //open active panel (and close unactive panels)
    const setActivePanel = activePanelNum => {

      //remove active class from all the panels
      removeClasses(DOMstrings.stepFormPanels, 'js-active');

      //show active panel
      DOMstrings.stepFormPanels.forEach((elem, index) => {
        if (index === activePanelNum) {

          elem.classList.add('js-active');

          setFormHeight(elem);

        }
      });

    };

    //set form height equal to current panel height
    const formHeight = activePanel => {

      const activePanelHeight = activePanel.offsetHeight;

      DOMstrings.stepsForm.style.height = `${activePanelHeight}px`;

    };

    const setFormHeight = () => {
      const activePanel = getActivePanel();

      formHeight(activePanel);
    };

    //STEPS BAR CLICK FUNCTION
    DOMstrings.stepsBar.addEventListener('click', e => {

      //check if click target is a step button
      const eventTarget = e.target;

      if (!eventTarget.classList.contains(`${DOMstrings.stepsBtnClass}`)) {
        return;
      }

      //get active button step number
      const activeStep = getActiveStep(eventTarget);

      //set all steps before clicked (and clicked too) to active
      setActiveStep(activeStep);

      //open active panel
      setActivePanel(activeStep);
    });

    //PREV/NEXT BTNS CLICK
    DOMstrings.stepsForm.addEventListener('click', e => {

      const eventTarget = e.target;

      //check if we clicked on `PREV` or NEXT` buttons
      if (!(eventTarget.classList.contains(`${DOMstrings.stepPrevBtnClass}`) || eventTarget.classList.contains(`${DOMstrings.stepNextBtnClass}`))) {
        return;
      }

      //find active panel
      const activePanel = findParent(eventTarget, `${DOMstrings.stepFormPanelClass}`);

      let activePanelNum = Array.from(DOMstrings.stepFormPanels).indexOf(activePanel);

      //set active step and active panel onclick
      if (eventTarget.classList.contains(`${DOMstrings.stepPrevBtnClass}`)) {
        activePanelNum--;

      } else {

        activePanelNum++;

      }

      setActiveStep(activePanelNum);
      setActivePanel(activePanelNum);

    });

    //SETTING PROPER FORM HEIGHT ONLOAD
    window.addEventListener('load', setFormHeight, false);

    //SETTING PROPER FORM HEIGHT ONRESIZE
    window.addEventListener('resize', setFormHeight, false);

    //changing animation via animation select !!!YOU DON'T NEED THIS CODE (if you want to change animation type, just change form panels data-attr)

    const setAnimationType = newType => {
      DOMstrings.stepFormPanels.forEach(elem => {
        elem.dataset.animation = newType;
      });
    };

    //selector onchange - changing animation
    const animationSelect = document.querySelector('.pick-animation__select');

    animationSelect.addEventListener('change', () => {
      const newAnimationType = animationSelect.value;

      setAnimationType(newAnimationType);
    });
  </script>
  <!-- End custom js for this page -->
</body>

</html>