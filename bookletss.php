<?php
include("link.php");
session_start();
$regno = $_SESSION['Regno'];
if(isset($_POST['submit'])){
  $Regno = $_POST['Regno'];
  $Sname = $_POST['Sname'];
  $DOB = $_POST['DOB'];
  $Departmetment = $_POST['Departmetment'];
  $Batch = $_POST['Batch'];
  $Gender = $_POST['Gender'];
  $Smobile = $_POST['Smobile'];
  $Fname = $_POST['Fname'];
  $Pmobile = $_POST['Pmobile'];
  $Poccp = $_POST['Poccp'];
  $Caste = $_POST['Caste'];
  $Religion = $_POST['Religion'];
  $Income = $_POST['Income'];
  $Address = $_POST['Address'];
  $Aplace = $_POST['Aplace'];
  $Adistrict = $_POST['Adistrict'];
  $Astate = $_POST['Astate'];
  $Pincode = $_POST['Pincode'];
  $Tenth = $_POST['Tenth'];
  $Inter = $_POST['Inter'];
  $Rank = $_POST['Rank'];
  $Admission = $_POST['Admission'];
  $Category = $_POST['Category'];
  $Photo = $_POST['Photo'];
  $Goal = $_POST['Goal'];
  $CareInter = $_POST['CareInter'];
  $Hobbies = $_POST['Hobbies'];
  $Strenghts = $_POST['Strenghts'];
  $Improve = $_POST['Improve'];
  $detailsquery = "insert into std_detls values('$Regno','$Sname','$DOB','$Departmetment','$Batch','$Gender','$Smobile','$Fname','$Pmobile','$Poccp','$Caste','$Religion','$Income')";
  $addressquery = "insert into address values('$Regno','$Address','$Aplace','$Adistrict','$Astate','$Pincode')";
  $aboutquery = "insert into about values('$Regno','$Tenth','$Inter','$Rank','$Admission','$Category','$Photo','$Goal','$CareInter','$Hobbies','$Strenghts','$Improve')";
  $rundetails = mysqli_query($con, $detailsquery);
  $runabout = mysqli_query($con, $aboutquery);
  $runaddress = mysqli_query($con, $addressquery);
}

?>


<!DOCTYPE html>
]<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Shiva Bhavani</title>
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<link rel="stylesheet" href="assets/css/booklet.css">
</head>

<body>
  <!-- ohm Nama Shivaya Shambo Shankara
    Jai Bh=havani Jai Jao=i Bhavani -->
  <!-- partial:index.partial.html -->

  <!--PEN HEADER-->

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
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
          <header class="header"><h1 class="header__title">SRKR ENGINEERING COLLEGE </h1></header>
  <!-- Write Your Body Hear -->
            <!--  -->
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->

          
          </div>
          <?php
            include "fotter.php";
          ?>
          <!-- partial -->
        </div>
        
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>


  <header class="header">
    <h1 class="header__title">SRKR ENGINEERING COLLEGE </h1>
  </header>
  <!--PEN CONTENT     -->
  <div class="content">
    <!--content inner-->
    <div class="content__inner">
      <div class="container">
        <!--content title-->
        <h2 class="content__title">Student Counselling Forms</h2>
      </div>
      <div class="container overflow-hidden">
        <!--multisteps-form-->
        <div class="multisteps-form">
          <!--progress bar-->
          <div class="row">
            <div class="col-12 col-lg-8 ml-auto mr-auto mb-4">
              <div class="multisteps-form__progress">
                <button class="multisteps-form__progress-btn js-active" type="button" title="User Info">Basic Info</button>
                <button class="multisteps-form__progress-btn" type="button" title="Personal Information">Personal Information</button>
                <button class="multisteps-form__progress-btn" type="button" title="Address">Address</button>
                <button class="multisteps-form__progress-btn" type="button" title="Acedimices">Acedimices</button>
                <button class="multisteps-form__progress-btn" type="button" title="Comments">About You </button>
              </div>
            </div>
          </div>
          <!--form panels-->
          <div class="row">
            <div class="col-12 col-lg-8 m-auto">
              <form method="post" class="multisteps-form__form">
                <!--single form panel-->
                <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active" data-animation="scaleIn">
                  <h3 class="multisteps-form__title">Your Basic Info</h3>
                  <div class="multisteps-form__content">
                    <div class="form-row mt-4">
                      <div class="col-12 col-sm-6">
                        <input class="multisteps-form__input form-control" type="text" placeholder="Student Name" name="Sname" />
                      </div>
                      <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                        <input class="multisteps-form__input form-control" type="text" name="Regno"
                          placeholder="Registration Nuber" />
                      </div>
                    </div>
                    <div class="form-row mt-4">
                      <div class="col-12 col-sm-6">
                        <input class="multisteps-form__input form-control" type="text" name="DOB" placeholder="Date of Birth"
                          onfocus="(this.type='date')" />
                      </div>
                      <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                        <select class="pick-animation__select form-control" name="Departmetment">
                          <option value="0" selected="selected">Department</option>
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
                    <div class="form-row mt-4">
                      <div class="col-12 col-sm-6">
                        <select class="pick-animation__select form-control" name="Batch" >
                          <option value="0" selected="selected">Batch</option>
                          <option value="2023">2019-2023</option>
                          <option value="2024">2020-2024</option>
                          <option value="2025">2021-2025</option>
                          <option value="2026">2022-2026</option>
                        </select>
                      </div>
                      <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                        <label id="gender">Gender : </label>
                        <input type="radio" name="Gender" id="male" value=2>
                        <label for="male">Male</label>
                        <input type="radio" name="Gender" id="female" value=1 >
                        <label for="female">Female</label>
                      </div>
                    </div>
                    <div class="button-row d-flex mt-4">
                      <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                    </div>
                  </div>
                </div>
                
                <!--single form panel-->
                <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                  <h3 class="multisteps-form__title">Personal Info</h3>
                  <div class="multisteps-form__content">
                    <div class="form-row mt-4">
                      <div class="col-12 col-sm-6">
                        <input class="multisteps-form__input form-control" type="text"
                          name="Smobile" placeholder="Student Mobile Number " />
                      </div>
                      <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                        <input class="multisteps-form__input form-control" type="text" name="Fname" placeholder="Father Name" />
                      </div>
                    </div>
                    <div class="form-row mt-4">
                      <div class="col-12 col-sm-6">
                        <input class="multisteps-form__input form-control" type="text"
                          name="Pmobile" placeholder="Parent Mobile Number" />
                      </div>
                      <div class="col-12 col-sm-6">
                        <input class="multisteps-form__input form-control" type="text"
                          name="Poccp" placeholder="Parent Occupation" />
                      </div>
                    </div>
                    <div class="form-row mt-4">
                      <div class="container text-center">
                        <div class="container text-center">
                          <div class="row">
                            <div class="col">
                              <input class="multisteps-form__input form-control" type="text" name="Caste" placeholder="Caste" />
                            </div>
                            <div class="col">
                              <input class="multisteps-form__input form-control" type="text" name="Religion" placeholder="Religion" />
                            </div>
                            <div class="col">
                              <input class="multisteps-form__input form-control" type="text" name="Income" placeholder="Income" />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="button-row d-flex mt-4">
                      <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                      <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                    </div>
                  </div>
                </div>
                <!--single form panel-->
                <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                  <h3 class="multisteps-form__title">Your Address</h3>
                  <div class="multisteps-form__content">
                    <div class="form-row mt-4">
                      <div class="col">
                        <input class="multisteps-form__input form-control" type="text"
                          name="Address" placeholder="Door no, FLat name,Street :" />
                      </div>
                    </div>
                    <div class="form-row mt-4">
                      <div class="col">
                        <input class="multisteps-form__input form-control" type="text" name="Aplace" placeholder="Place" />
                      </div>
                    </div>
                    <div class="form-row mt-4">
                      <div class="col-12 col-sm-6">
                        <input class="multisteps-form__input form-control" type="text" name="Adistrict" placeholder="District" />
                      </div>
                      <div class="col-6 col-sm-3 mt-4 mt-sm-0">
                        <input class="multisteps-form__input form-control" type="text" name="Astate" placeholder="State" />
                        </select>
                      </div>
                      <div class="col-6 col-sm-3 mt-4 mt-sm-0">
                        <input class="multisteps-form__input form-control" type="text" name="Pincode" placeholder="Pincode" />
                      </div>
                    </div>
                    <div class="button-row d-flex mt-4">
                      <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                      <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                    </div>
                  </div>
                </div>
                <!--single form panel-->
                <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                  <h3 class="multisteps-form__title">Acedimices</h3>
                  <div class="multisteps-form__content">
                    <div class="form-row mt-4">
                      <div class="col-12 col-sm-6">
                        <input class="multisteps-form__input form-control" type="text" name="Tenth" placeholder="10 th Percentage" />
                      </div>
                      <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                        <input class="multisteps-form__input form-control" type="text"
                          name="Inter" placeholder="Inter/Polytech Percentage" />
                      </div>
                    </div>
                    <div class="form-row mt-4">
                      <div class="col-12 col-sm-6">
                        <input class="multisteps-form__input form-control" type="text" name="Rank" placeholder="Emcet/Ecet Rank"/>
                      </div>
                      <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                        <select class="pick-animation__select form-control" name="Admission" >
                          <option value=0 selected="selected">Mode of Admissiom</option>
                          <option value="A cat">Catageri A</option>
                          <option value="B cat">Catageri B</option>
                          <option value="Spot">Spot Admission</option>
                          <option value="Management">Management Seat</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-row mt-4">
                      <div class="col-12 col-sm-6">
                        <input class="multisteps-form__input form-control" type="text" name="Category" placeholder="Category"/>
                      </div>
                      <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                        <input class="multisteps-form__input form-control" type="text" name="Photo" placeholder="Photo" onfocus="(this.type='file')"/>
                        </div>
                    </div>
                    <div class="button-row d-flex mt-4">
                      <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                      <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                    </div>
                  </div>
                </div>
                <!--single form panel-->
                <!-- <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                  <h3 class="multisteps-form__title">Your Order Info</h3>
                  <div class="multisteps-form__content">
                    <div class="row">
                      <div class="col-12 col-md-6 mt-4">
                        <div class="card shadow-sm">
                          <div class="card-body">
                            <h5 class="card-title">Item Title</h5>
                            <p class="card-text">Small and nice item description</p><a class="btn btn-primary" href="#"
                              title="Item Link">Item Link</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-6 mt-4">
                        <div class="card shadow-sm">
                          <div class="card-body">
                            <h5 class="card-title">Item Title</h5>
                            <p class="card-text">Small and nice item description</p><a class="btn btn-primary" href="#"
                              title="Item Link">Item Link</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="button-row d-flex mt-4 col-12">
                        <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                        <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                      </div>
                    </div>
                  </div>
                </div> -->
                <!--single form panel-->
                <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                  <h3 class="multisteps-form__title">About your self</h3>
                  <div class="multisteps-form__content">
                    <div class="form-floating mb-3">
                      <label for="floatingInput">Goal in Life</label>
                      <input type="text" class="form-control" id="floatingInput" name="Goal" placeholder="@ I want to be an IPS">
                    </div>
                    <div class="form-floating">
                      <label for="floatingPassword">Career Interest</label>
                      <input type="text" class="form-control" id="floatingPassword" name="CareInter" placeholder="Core/IT/Higher edu/Start-up/Govt./Family Bussiness/Others">
                    </div>
                    <div class="form-floating">
                      <label for="floatingPassword">Hobbies</label>
                      <input type="text" class="form-control" id="floatingPassword" name="Hobbies" placeholder="Reading Books/...">
                    </div>
                    <div class="form-floating">
                      <label for="floatingPassword">Strenghts</label>
                      <input type="text" class="form-control" id="floatingPassword" name="Strenghts" placeholder="Self Confidance/...">
                    </div>
                    <div class="form-floating">
                      <label for="floatingPassword">Areas to Improve</label>
                      <input type="text" class="form-control" id="floatingPassword" name="Improve" placeholder="I am weak in hear....">
                    </div>
                    <div class="button-row d-flex mt-4">
                      <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                      <button class="btn btn-success ml-auto" name="submit" type="submit" title="Send">Send</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- partial -->
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

</body>

</html>