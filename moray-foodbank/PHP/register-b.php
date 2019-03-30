<?php
$title = "Registration - Step Two";
include("header.php");

if(isset($_POST['submit']) || isset($_POST['back'])){
	$_SESSION['refName1'] = $_POST['refName1'];
	$_SESSION['refName2'] = $_POST['refName2'];
	$_SESSION['refPhone1'] = $_POST['refPhone1'];
	$_SESSION['refPhone2'] = $_POST['refPhone2'];
	$_SESSION['refEmail1'] = $_POST['refEmail1'];
	$_SESSION['refEmail2'] = $_POST['refEmail2'];
	$_SESSION['refRel1'] = $_POST['refRel1'];
	$_SESSION['refRel2'] = $_POST['refRel2'];
	
	if(isset($_POST['submit']))
    header("Location: register-c.php");
  if(isset($_POST['back']))
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
      <input type="text" class="form-control" name="refName1" id="refName1" value="<?php if(isset($_SESSION['refName1'])){echo $_SESSION['refName1'];} ?>" placeholder="Full name of reference">
    </div>
    <div class="form-group col-md-6">
      <label for="refName2">FULL NAME</label>
      <input type="text" class="form-control" name="refName2" id="refName2" value="<?php if(isset($_SESSION['refName2'])){echo $_SESSION['refName2'];} ?>" placeholder="Full name of reference">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="refPhone1">PHONE</label>
      <input type="text" class="form-control" name="refPhone1" id="refPhone1" value="<?php if(isset($_SESSION['refPhone1'])){echo $_SESSION['refPhone1'];} ?>" placeholder="Phone Number">
    </div>
    <div class="form-group col-md-6">
      <label for="refPhone2">PHONE</label>
      <input type="text" class="form-control" name="refPhone2" id="refPhone2" value="<?php if(isset($_SESSION['refPhone2'])){echo $_SESSION['refPhone2'];} ?>" placeholder="Phone Number">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="refEmail1">EMAIL</label>
      <input type="text" class="form-control" name="refEmail1" id="refEmail1" value="<?php if(isset($_SESSION['refEmail1'])){echo $_SESSION['refEmail1'];} ?>" placeholder="Email Address">
    </div>
    <div class="form-group col-md-6">
      <label for="refEmail2">EMAIL</label>
      <input type="text" class="form-control" name="refEmail2" id="refEmail2" value="<?php if(isset($_SESSION['refEmail2'])){echo $_SESSION['refEmail2'];} ?>" placeholder="Email Address">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="refRel1">RELATIONSHIP</label>
      <input type="text" class="form-control" name="refRel1" id="refRel1" value="<?php if(isset($_SESSION['refRel1'])){echo $_SESSION['refRel1'];} ?>" placeholder="Relationship to volunteer">
    </div>
    <div class="form-group col-md-6">
      <label for="refRel2">RELATIONSHIP</label>
      <input type="text" class="form-control" name="refRel2" id="refRel2" value="<?php if(isset($_SESSION['refRel2'])){echo $_SESSION['refRel2'];} ?>" placeholder="Relationship to volunteer">
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
