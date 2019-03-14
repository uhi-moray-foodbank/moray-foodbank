<?php
$title = "Registration - Step Two";
include("header.php");

if(isset($_POST['submit'])){
	header("Location: register-c.php");
	
	
}

if(isset($_POST['back'])){
	header("Location: register-a.php");
}
?>

<main class="container.fluid">
<div class="container.fluid hero-wrapper">
    <div class="row hero-container">
        <h1>Register New Volunteer</h1>
        <p>Step Two - Volunteer's Reference information</p>
    </div>
</div>

<div class="container">
  <ul class="progress-tracker progress-tracker--text progress-tracker--center">
    <li class="progress-step is-complete">
      <span class="progress-marker"></span>
      <span class="progress-text">
        <a href="#" class="progress-title">VOLUNTEER DETAILS</a>
      </span>
    </li>
    <li class="progress-step is-active">
      <span class="progress-marker"></span>
      <span class="progress-text">
        <a href="#" class="progress-title">REFERENCES</a>
      </span>
    </li>
    <li class="progress-step">
      <span class="progress-marker"></span>
      <span class="progress-text">
        <a href="#" class="progress-title">AVAILABILITY</a>
      </span>
    </li>
    <li class="progress-step">
      <span class="progress-marker"></span>
      <span class="progress-text">
        <a href="#" class="progress-title">QUESTIONNAIRE</a>
      </span>
    </li>
  </ul>
</div>

<div class="container">
<form class="volunteer-form" action="" method ="post">
  <div class="form-row">
    <div class="col-md-6">
    <label>REFERENCE 1</label>
    </div>
    <div class="col-md-6">
    <label>REFERENCE 2</label>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="refName1">FULL NAME</label>
      <input type="text" class="form-control" id="refName1" placeholder="Full name of reference">
    </div>
    <div class="form-group col-md-6">
      <label for="refName2">FULL NAME</label>
      <input type="text" class="form-control" id="refName2" placeholder="Full name of reference">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="refPhone1">PHONE</label>
      <input type="text" class="form-control" id="refPhone1" placeholder="Phone Number">
    </div>
    <div class="form-group col-md-6">
      <label for="refPhone2">PHONE</label>
      <input type="text" class="form-control" id="refPhone2" placeholder="Phone Number">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="refEmail1">EMAIL</label>
      <input type="text" class="form-control" id="refEmail1" placeholder="Email Address">
    </div>
    <div class="form-group col-md-6">
      <label for="refEmail2">EMAIL</label>
      <input type="text" class="form-control" id="refEmail2" placeholder="Email Address">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="refRel1">RELATIONSHIP</label>
      <input type="text" class="form-control" id="refRel1" placeholder="Relationship to volunteer">
    </div>
    <div class="form-group col-md-6">
      <label for="refRel2">RELATIONSHIP</label>
      <input type="text" class="form-control" id="refRel2" placeholder="Relationship to volunteer">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6 offset-md-3 form-buttons">
    <!--<button type="submit" class="btn btn-primary">Back</button>-->
	<input type="submit" name="back" class ="btn btn-primary" value="Back">
	<!--<button type="submit" class="btn btn-primary">Next</button>-->
	<input type="submit" name="submit" class ="btn btn-primary" value="Next">
    </div>
  </div>
</form>
</div>
</main>
</body>
