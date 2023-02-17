<?php

include "link.php";
session_start();
$Regno = $_SESSION['Regno'];
if(!empty($Regno)){
  $some= mysqli_fetch_assoc(mysqli_query($con,"select random from student where regno ='$Regno'"));
  if($some['random'] != 'dataupdatedshiva') header("location:booklet.php");
}
else {
  header("location:login.php");
}   
  if(isset($_POST['submit'])){
    $BTech= $_POST['BTech'];
    $Difficulties = $_POST['Difficulties'];
    $influnceFriends = $_POST['influnceFriends'];
    $WastingTime = $_POST['WastingTime'];
    $Studies = $_POST['Studies'];
    $AttentionClass = $_POST['AttentionClass'];
    $AbsentsClass = $_POST['AbsentsClass'];
    $InterestStudies = $_POST['InterestStudies'];
    $CareerPlanning	 = $_POST['CareerPlanning'];
    $Stress = $_POST['Stress'];
    $RelationShip = $_POST['RelationShip'];
    $Anxiety = $_POST['Anxiety'];
    $Trauma = $_POST['Trauma'];
    $SelfConfidence = $_POST['SelfConfidence'];
    $HealthProblems = $_POST['HealthProblems'];
    $Anger = $_POST['Anger'];
    $FamilyIssues = $_POST['FamilyIssues'];
    $run=mysqli_query($con,"insert into Interest values ('$Regno','$BTech','$Difficulties','$influnceFriends','$WastingTime','$Studies','$AttentionClass','$AbsentsClass','$InterestStudies','$CareerPlanning','$Stress','$RelationShip','$Anxiety','$Trauma','$SelfConfidence','$HealthProblems','$Anger','$FamilyIssues')");
    $run = mysqli_query($con,"update student set random = 'datasetedshiva'");
    if($run){
      echo "<script>alert('Your Data has Entered Sucessfully ')</script>";
      header("location:index.php");
    }
  }


?>



<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>About You </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="shortcut icon" href="assets/images/favicon.png" />
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
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <!-- Write Your Body Hear -->
          <!--  -->
          <form method="post" class="forms-sample">
            <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <!-- <!-- <h4 class="card-title">Horizontal Form</h4> -->
                    <p class="card-description"> Your Academices interests </p>
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-form-label">Interest towords B.Tech/B.E</label>
                      <div class="col-sm-9">
                        <select class="form-control" name="BTech">
                          <option value="">Select your Chosses</option>
                          <option value="High">High</option>
                          <option value="Moderate">Moderate</option>
                          <option value="Low">Low</option>
                          <option value="Not">Not Applicable</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputEmail2" class="col-form-label">Learing Difficulties in Subjects</label>
                      <div class="col-sm-9">
                        <select class="form-control" name="Difficulties">
                          <option value="">Select your Chosses</option>
                          <option value="High">High</option>
                          <option value="Moderate">Moderate</option>
                          <option value="Low">Low</option>
                          <option value="Not">Not Applicable</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputMobile" class="col-form-label">Negative influnce of friends</label>
                      <div class="col-sm-9">
                        <select class="form-control" name="influnceFriends">
                          <option value="">Select your Chosses</option>
                          <option value="High">High</option>
                          <option value="Moderate">Moderate</option>
                          <option value="Low">Low</option>
                          <option value="Not">Not Applicable</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputPassword2" class="col-form-label">Wasting time</label>
                      <div class="col-sm-9">
                        <select class="form-control" name="WastingTime">
                          <option value="">Select your Chosses</option>
                          <option value="High">High</option>
                          <option value="Moderate">Moderate</option>
                          <option value="Low">Low</option>
                          <option value="Not">Not Applicable</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <p class="card-description"> How do you think about these </p>
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-form-label">Unable to focuse on Studies</label>
                      <div class="col-sm-9">
                        <select class="form-control" name="Studies">
                          <option value="">Select your Chosses</option>
                          <option value="High">High</option>
                          <option value="Moderate">Moderate</option>
                          <option value="Low">Low</option>
                          <option value="Not">Not Applicable</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputEmail2" class="col-form-label">Unable to pay Attention in class</label>
                      <div class="col-sm-9">
                        <select class="form-control" name="AttentionClass">
                          <option value="">Select your Chosses</option>
                          <option value="High">High</option>
                          <option value="Moderate">Moderate</option>
                          <option value="Low">Low</option>
                          <option value="Not">Not Applicable</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputMobile" class="col-form-label">Frequent Absents from classes</label>
                      <div class="col-sm-9">
                        <select class="form-control" name="AbsentsClass">
                          <option value="">Select your Chosses</option>
                          <option value="High">High</option>
                          <option value="Moderate">Moderate</option>
                          <option value="Low">Low</option>
                          <option value="Not">Not Applicable</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputPassword2" class="col-form-label">Lack of Interest towards Studies</label>
                      <div class="col-sm-9">
                        <select class="form-control" name="InterestStudies">
                          <option value="">Select your Chosses</option>
                          <option value="High">High</option>
                          <option value="Moderate">Moderate</option>
                          <option value="Low">Low</option>
                          <option value="Not">Not Applicable</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <p class="card-description"> Your Futher Planings </p>
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-form-label">Career Planning</label>
                      <div class="col-sm-9">
                        <select class="form-control" name="CareerPlanning">
                          <option value="">Select your Chosses</option>
                          <option value="High">High</option>
                          <option value="Moderate">Moderate</option>
                          <option value="Low">Low</option>
                          <option value="Not">Not Applicable</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputEmail2" class="col-form-label">Stress</label>
                      <div class="col-sm-9">
                        <select class="form-control" name="Stress">
                          <option value="">Select your Chosses</option>
                          <option value="High">High</option>
                          <option value="Moderate">Moderate</option>
                          <option value="Low">Low</option>
                          <option value="Not">Not Applicable</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputMobile" class="col-form-label">Relation Ship</label>
                      <div class="col-sm-9">
                        <select class="form-control" name="RelationShip">
                          <option value="">Select your Chosses</option>
                          <option value="High">High</option>
                          <option value="Moderate">Moderate</option>
                          <option value="Low">Low</option>
                          <option value="Not">Not Applicable</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputPassword2" class="col-form-label">Anxiety and Fears</label>
                      <div class="col-sm-9">
                        <select class="form-control" name="Anxiety">
                          <option value="">Select your Chosses</option>
                          <option value="High">High</option>
                          <option value="Moderate">Moderate</option>
                          <option value="Low">Low</option>
                          <option value="Not">Not Applicable</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputPassword2" class="col-form-label">Dealing with loss or Trauma</label>
                      <div class="col-sm-9">
                        <select class="form-control" name="Trauma">
                          <option value="">Select your Chosses</option>
                          <option value="High">High</option>
                          <option value="Moderate">Moderate</option>
                          <option value="Low">Low</option>
                          <option value="Not">Not Applicable</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <p class="card-description"> How do you feel about these things </p>
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-form-label">Self Confidence</label>
                      <div class="col-sm-9">
                        <select class="form-control" name="SelfConfidence">
                          <option value="">Select your Chosses</option>
                          <option value="High">High</option>
                          <option value="Moderate">Moderate</option>
                          <option value="Low">Low</option>
                          <option value="Not">Not Applicable</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputEmail2" class="col-form-label">Health Problems</label>
                      <div class="col-sm-9">
                        <select class="form-control" name="HealthProblems">
                          <option value="">Select your Chosses</option>
                          <option value="High">High</option>
                          <option value="Moderate">Moderate</option>
                          <option value="Low">Low</option>
                          <option value="Not">Not Applicable</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputMobile" class="col-form-label">Anger</label>
                      <div class="col-sm-9">
                        <select class="form-control" name="Anger">
                          <option value="">Select your Chosses</option>
                          <option value="High">High</option>
                          <option value="Moderate">Moderate</option>
                          <option value="Low">Low</option>
                          <option value="Not">Not Applicable</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputPassword2" class="col-form-label">Family Issues</label>
                      <div class="col-sm-9">
                        <select class="form-control" name="FamilyIssues">
                          <option value="">Select your Chosses</option>
                          <option value="High">High</option>
                          <option value="Moderate">Moderate</option>
                          <option value="Low">Low</option>
                          <option value="Not">Not Applicable</option>
                        </select>
                      </div>
                    </div>

                    <button type="submit" class="btn btn-gradient-primary me-2" name="submit">Submit</button>
                    <!-- <button class="btn btn-light">Cancel</button> -->

                  </div>
                </div>
              </div>
            </div>
          </form>
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
  <!-- End custom js for this page -->
</body>

</html>