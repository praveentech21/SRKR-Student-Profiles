<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Shiva Bhavani</title>
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      font-size: 16px;
      color: #2c2c2c;
    }

    body a {
      color: inherit;
      text-decoration: none;
    }

    .header__btn {
      transition-property: all;
      transition-duration: 0.2s;
      transition-timing-function: linear;
      transition-delay: 0s;
      padding: 10px 20px;
      display: inline-block;
      margin-right: 10px;
      background-color: #fff;
      border: 1px solid #2c2c2c;
      border-radius: 3px;
      cursor: pointer;
      outline: none;
    }

    .header__btn:last-child {
      margin-right: 0;
    }

    .header__btn:hover,
    .header__btn.js-active {
      color: #fff;
      background-color: #2c2c2c;
    }

    .header {
      max-width: 600px;
      margin: 50px auto;
      text-align: center;
    }

    .header__title {
      margin-bottom: 30px;
      font-size: 2.1rem;
    }

    .content {
      width: 95%;
      margin: 0 auto 50px;
    }

    .content__title {
      margin-bottom: 40px;
      font-size: 20px;
      text-align: center;
    }

    .content__title--m-sm {
      margin-bottom: 10px;
    }

    .multisteps-form__progress {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(0, 1fr));
    }

    .multisteps-form__progress-btn {
      transition-property: all;
      transition-duration: 0.15s;
      transition-timing-function: linear;
      transition-delay: 0s;
      position: relative;
      padding-top: 20px;
      color: rgba(108, 117, 125, 0.7);
      text-indent: -9999px;
      border: none;
      background-color: transparent;
      outline: none !important;
      cursor: pointer;
    }

    @media (min-width: 500px) {
      .multisteps-form__progress-btn {
        text-indent: 0;
      }
    }

    .multisteps-form__progress-btn:before {
      position: absolute;
      top: 0;
      left: 50%;
      display: block;
      width: 13px;
      height: 13px;
      content: '';
      -webkit-transform: translateX(-50%);
      transform: translateX(-50%);
      transition: all 0.15s linear 0s, -webkit-transform 0.15s cubic-bezier(0.05, 1.09, 0.16, 1.4) 0s;
      transition: all 0.15s linear 0s, transform 0.15s cubic-bezier(0.05, 1.09, 0.16, 1.4) 0s;
      transition: all 0.15s linear 0s, transform 0.15s cubic-bezier(0.05, 1.09, 0.16, 1.4) 0s, -webkit-transform 0.15s cubic-bezier(0.05, 1.09, 0.16, 1.4) 0s;
      border: 2px solid currentColor;
      border-radius: 50%;
      background-color: #fff;
      box-sizing: border-box;
      z-index: 3;
    }

    .multisteps-form__progress-btn:after {
      position: absolute;
      top: 5px;
      left: calc(-50% - 13px / 2);
      transition-property: all;
      transition-duration: 0.15s;
      transition-timing-function: linear;
      transition-delay: 0s;
      display: block;
      width: 100%;
      height: 2px;
      content: '';
      background-color: currentColor;
      z-index: 1;
    }

    .multisteps-form__progress-btn:first-child:after {
      display: none;
    }

    .multisteps-form__progress-btn.js-active {
      color: #007bff;
    }

    .multisteps-form__progress-btn.js-active:before {
      -webkit-transform: translateX(-50%) scale(1.2);
      transform: translateX(-50%) scale(1.2);
      background-color: currentColor;
    }

    .multisteps-form__form {
      position: relative;
    }

    .multisteps-form__panel {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 0;
      opacity: 0;
      visibility: hidden;
    }

    .multisteps-form__panel.js-active {
      height: auto;
      opacity: 1;
      visibility: visible;
    }

    .multisteps-form__panel[data-animation="scaleOut"] {
      -webkit-transform: scale(1.1);
      transform: scale(1.1);
    }

    .multisteps-form__panel[data-animation="scaleOut"].js-active {
      transition-property: all;
      transition-duration: 0.2s;
      transition-timing-function: linear;
      transition-delay: 0s;
      -webkit-transform: scale(1);
      transform: scale(1);
    }

    .multisteps-form__panel[data-animation="slideHorz"] {
      left: 50px;
    }

    .multisteps-form__panel[data-animation="slideHorz"].js-active {
      transition-property: all;
      transition-duration: 0.25s;
      transition-timing-function: cubic-bezier(0.2, 1.13, 0.38, 1.43);
      transition-delay: 0s;
      left: 0;
    }

    .multisteps-form__panel[data-animation="slideVert"] {
      top: 30px;
    }

    .multisteps-form__panel[data-animation="slideVert"].js-active {
      transition-property: all;
      transition-duration: 0.2s;
      transition-timing-function: linear;
      transition-delay: 0s;
      top: 0;
    }

    .multisteps-form__panel[data-animation="fadeIn"].js-active {
      transition-property: all;
      transition-duration: 0.3s;
      transition-timing-function: linear;
      transition-delay: 0s;
    }

    .multisteps-form__panel[data-animation="scaleIn"] {
      -webkit-transform: scale(0.9);
      transform: scale(0.9);
    }

    .multisteps-form__panel[data-animation="scaleIn"].js-active {
      transition-property: all;
      transition-duration: 0.2s;
      transition-timing-function: linear;
      transition-delay: 0s;
      -webkit-transform: scale(1);
      transform: scale(1);
    }
  </style>
</head>

<body>
  <!-- ohm Nama Shivaya Shambo Shankara
    Jai Bh=havani Jai Jao=i Bhavani -->
  <!-- partial:index.partial.html -->

  <!--PEN HEADER-->
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
                <button class="multisteps-form__progress-btn" type="button" title="Address">Address</button>
                <button class="multisteps-form__progress-btn" type="button" title="Personal Information">Personal Information</button>
                <button class="multisteps-form__progress-btn" type="button" title="Acedimices">Acedimices</button>
                <button class="multisteps-form__progress-btn" type="button" title="Comments">About You </button>
              </div>
            </div>
          </div>
          <!--form panels-->
          <div class="row">
            <div class="col-12 col-lg-8 m-auto">
              <form class="multisteps-form__form">
                <!--single form panel-->
                <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active" data-animation="scaleIn">
                  <h3 class="multisteps-form__title">Your Basic Info</h3>
                  <div class="multisteps-form__content">
                    <div class="form-row mt-4">
                      <div class="col-12 col-sm-6">
                        <input class="multisteps-form__input form-control" type="text" placeholder="Student Name" />
                      </div>
                      <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                        <input class="multisteps-form__input form-control" type="text"
                          placeholder="Registration Nuber" />
                      </div>
                    </div>
                    <div class="form-row mt-4">
                      <div class="col-12 col-sm-6">
                        <input class="multisteps-form__input form-control" type="text" placeholder="Date of Birth"
                          onfocus="(this.type='date')" />
                      </div>
                      <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                        <select class="pick-animation__select form-control">
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
                        <select class="pick-animation__select form-control">
                          <option value="0" selected="selected">Batch</option>
                          <option value="2023">2019-2023</option>
                          <option value="2024">2020-2024</option>
                          <option value="2025">2021-2025</option>
                          <option value="2026">2022-2026</option>
                        </select>
                      </div>
                      <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                        <label id="gender">Gender : </label>
                        <input type="radio" name="Gender" id="male">
                        <label for="male">Male</label>
                        <input type="radio" name="Gender" id="female">
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
                  <h3 class="multisteps-form__title">Your Address</h3>
                  <div class="multisteps-form__content">
                    <div class="form-row mt-4">
                      <div class="col">
                        <input class="multisteps-form__input form-control" type="text"
                          placeholder="Door no, FLat name,Street :" />
                      </div>
                    </div>
                    <div class="form-row mt-4">
                      <div class="col">
                        <input class="multisteps-form__input form-control" type="text" placeholder="Place" />
                      </div>
                    </div>
                    <div class="form-row mt-4">
                      <div class="col-12 col-sm-6">
                        <input class="multisteps-form__input form-control" type="text" placeholder="District" />
                      </div>
                      <div class="col-6 col-sm-3 mt-4 mt-sm-0">
                        <input class="multisteps-form__input form-control" type="text" placeholder="State" />
                        </select>
                      </div>
                      <div class="col-6 col-sm-3 mt-4 mt-sm-0">
                        <input class="multisteps-form__input form-control" type="text" placeholder="Pincode" />
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
                  <h3 class="multisteps-form__title">Personal Info</h3>
                  <div class="multisteps-form__content">
                    <div class="form-row mt-4">
                      <div class="col-12 col-sm-6">
                        <input class="multisteps-form__input form-control" type="text"
                          placeholder="Student Mobile Number " />
                      </div>
                      <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                        <input class="multisteps-form__input form-control" type="text" placeholder="Parent Name" />
                      </div>
                    </div>
                    <div class="form-row mt-4">
                      <div class="col-12 col-sm-6">
                        <input class="multisteps-form__input form-control" type="text"
                          placeholder="Parent Mobile Number" />
                      </div>
                      <div class="col-12 col-sm-6">
                        <input class="multisteps-form__input form-control" type="text"
                          placeholder="Parent Occupation" />
                      </div>
                    </div>
                    <div class="form-row mt-4">
                      <div class="container text-center">
                        <div class="container text-center">
                          <div class="row">
                            <div class="col">
                              <input class="multisteps-form__input form-control" type="text" placeholder="Caste" />
                            </div>
                            <div class="col">
                              <input class="multisteps-form__input form-control" type="text" placeholder="Religion" />
                            </div>
                            <div class="col">
                              <input class="multisteps-form__input form-control" type="text" placeholder="Income" />
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
                  <h3 class="multisteps-form__title">Acedimices</h3>
                  <div class="multisteps-form__content">
                    <div class="form-row mt-4">
                      <div class="col-12 col-sm-6">
                        <input class="multisteps-form__input form-control" type="text" placeholder="10 th Percentage" />
                      </div>
                      <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                        <input class="multisteps-form__input form-control" type="text"
                          placeholder="Inter/Polytech Percentage" />
                      </div>
                    </div>
                    <div class="form-row mt-4">
                      <div class="col-12 col-sm-6">
                        <input class="multisteps-form__input form-control" type="text" placeholder="Emcet/Ecet Rank"/>
                      </div>
                      <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                        <select class="pick-animation__select form-control">
                          <option value="0" selected="selected">Mode of Admissiom</option>
                          <option value="2023">Catageri A</option>
                          <option value="2024">Catageri B</option>
                          <option value="2025">Spot Admission</option>
                          <option value="2026">Managment Seat</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-row mt-4">
                      <div class="col-12 col-sm-6">
                        <input class="multisteps-form__input form-control" type="text" placeholder="Category"/>
                      </div>
                      <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                        <input class="multisteps-form__input form-control" type="text" placeholder="Photo" onfocus="(this.type='file')"/>
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
                      <input type="email" class="form-control" id="floatingInput" placeholder="@ I want to be an IPS">
                    </div>
                    <div class="form-floating">
                      <label for="floatingPassword">Career Interest</label>
                      <input type="password" class="form-control" id="floatingPassword" placeholder="Core/IT/Higher edu/Start-up/Govt./Family Bussiness/Others">
                    </div>
                    <div class="form-floating">
                      <label for="floatingPassword">Hobbies</label>
                      <input type="password" class="form-control" id="floatingPassword" placeholder="Reading Books/...">
                    </div>
                    <div class="form-floating">
                      <label for="floatingPassword">Strenghts</label>
                      <input type="password" class="form-control" id="floatingPassword" placeholder="Self Confidance/...">
                    </div>
                    <div class="form-floating">
                      <label for="floatingPassword">Areas to Improve</label>
                      <input type="password" class="form-control" id="floatingPassword" placeholder="I am weak in hear....">
                    </div>
                    <div class="button-row d-flex mt-4">
                      <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                      <button class="btn btn-success ml-auto" type="button" title="Send">Send</button>
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