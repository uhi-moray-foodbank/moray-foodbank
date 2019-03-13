<?php
//include("includes/header.php");

session_start();

if(!isset($_SESSION['Username'])){
	header("Location: ../index.php");
}

if(isset($_POST['submit'])){
	
	$_SESSION['foodbankCentre'] = $_POST['foodbankCentre'];
	$_SESSION['promoEvents'] = $_POST['promoEvents'];
	$_SESSION['collections'] = $_POST['collections'];
	$_SESSION['fundraising'] = $_POST['fundraising'];
	$_SESSION['buddy'] = $_POST['buddyScheme'];
	$_SESSION['delivery'] = $_POST['delivery'];
	$_SESSION['drivers'];
	$_SESSION['cooking'];
	$_SESSION['store'];
	$_SESSION['adhoc'];
	$_SESSION['external'];
	
	
	$_SESSION['mon'] = $_POST['mon'];
	$_SESSION['tue'] = $_POST['tue'];
	$_SESSION['wed'] = $_POST['wed'];
	$_SESSION['thu'] = $_POST['thu'];
	$_SESSION['fri'] = $_POST['fri'];
	
	$_SESSION['notes'] = $_POST['otherNotes'];
	
	header("Location: register-d.php");
}

if(isset($_POST['back'])){
	header("Location: register-b.php");	
	
	$_SESSION['mon'] = $_POST['mon'];
	$_SESSION['tue'] = $_POST['tue'];
	$_SESSION['wed'] = $_POST['wed'];
	$_SESSION['thu'] = $_POST['thu'];
	$_SESSION['fri'] = $_POST['fri'];
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Moray Foodbank</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="../CSS/bootstrap.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="../CSS/styles.css" />

</head>

<body>
<main class="container.fluid">
<div class="container.fluid hero-wrapper">
    <div class="row hero-container">
        <h1>Register New Volunteer</h1>
        <p>Step Three - Volunteer's work days and area availability</p>
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
    <li class="progress-step is-complete">
      <span class="progress-marker"></span>
      <span class="progress-text">
        <a href="#" class="progress-title">REFERENCES</a>
      </span>
    </li>
    <li class="progress-step is-active">
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
    <div class="col-md-12">
    <label>APPLICANT WOULD BE INTERESTED IN WORKING IN THE FOLLOWING AREAS:</label>
    </div>
  </div>
  <div class="form-row">
    <div class="form-check form-group col-md-4">
      <input class="form-check-input" type="checkbox" value="1" name="foodbankCentre" id="foodbankCentre" >
      <label class="form-check-label" for="foodbankCentre">
        Foodbank Centre
      </label>
    </div>
    <div class="form-check form-group col-md-4">
      <input class="form-check-input" type="checkbox" value="1" name="promoEvents" id="promoEvents">
      <label class="form-check-label" for="promoEvents">
        Promotional Events
      </label>
    </div>
    <div class="form-check form-group col-md-4">
      <input class="form-check-input" type="checkbox" value="1" name="collections" id="collections">
      <label class="form-check-label" for="collections">
        Supermarket Collections
      </label>
    </div>
  </div>
  <div class="form-row">
    <div class="form-check form-group col-md-4">
      <input class="form-check-input" type="checkbox" value="1" name="fundraising" id="fundraising">
      <label class="form-check-label" for="fundraising">
        Fundraising
      </label>
    </div>
    <div class="form-check form-group col-md-4">
      <input class="form-check-input" type="checkbox" value="1" name="buddyScheme" id="buddyScheme">
      <label class="form-check-label" for="buddyScheme">
        Buddy Scheme
      </label>
    </div>
    <div class="form-check form-group col-md-4">
      <input class="form-check-input" type="checkbox" value="1" name="delivery" id="delivery">
      <label class="form-check-label" for="delivery">
        Delivery or Collections (own car)
      </label>
    </div>
  </div>
  <br>
  <div class="form-row">
    <div class="col-md-12">
    <label>APPLICANT IS AVAILABLE FOR WORKING:</label>
    </div>
  </div>
  <div class="form-row">
    <div class="form-check form-group col-md-12">
      <input class="form-check-input" type="checkbox" value="" id="oneOffs">
      <label class="form-check-label" for="oneOffs">
        One-off Events (i.e. Supermarket collections, Harvest food sorting, annual stocktake, etc.)
      </label>
    </div>
    <div class="form-check form-group col-md-1">
      <input class="form-check-input" type="checkbox" value="1" name="mon" id="mon" <?php if(isset($_SESSION['mon'])){echo "checked";} ?>>
      <label class="form-check-label" for="mon">
        Mon
      </label>
    </div>
    <div class="form-check form-group col-md-1">
      <input class="form-check-input" type="checkbox" value="1" name="tue" id="tue">
      <label class="form-check-label" for="tue">
        Tues
      </label>
    </div>
    <div class="form-check form-group col-md-1">
      <input class="form-check-input" type="checkbox" value="1" name="wed" id="wed">
      <label class="form-check-label" for="wed">
        Wed
      </label>
    </div>
    <div class="form-check form-group col-md-1">
      <input class="form-check-input" type="checkbox" value="1" name="thu" id="thu">
      <label class="form-check-label" for="thu">
        Thurs
      </label>
    </div>
    <div class="form-check form-group col-md-1">
      <input class="form-check-input" type="checkbox" value="1" name="fri"  id="fri">
      <label class="form-check-label" for="fri">
        Fri
      </label>
    </div>
    <div class="form-check form-group col-md-1">
      <input class="form-check-input" type="checkbox" value="1" id="sat">
      <label class="form-check-label" for="sat">
        Sat
      </label>
    </div>
    <div class="form-check form-group col-md-1">
      <input class="form-check-input" type="checkbox" value="1" id="sun">
      <label class="form-check-label" for="sun">
        Sun
      </label>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-12">
    <label for="otherNotes">Other notes:</label>
    <textarea class="form-control" name="otherNotes" id="otherNotes" rows="3" value=""></textarea>
    </div>
  </div>
  <br>
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
