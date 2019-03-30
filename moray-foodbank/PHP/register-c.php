<?php
$title = "Registration - Step Three";
include("header.php");

if(isset($_POST['submit']) || isset($_POST['back'])){
  
  if(!empty($_POST['foodbankCentre'])){
    $_SESSION['foodbankCentre'] = $_POST['foodbankCentre'];
  } else {
    $_SESSION['foodbankCentre'] = "0";
  }
  if(!empty($_POST['promoEvents'])){
    $_SESSION['promoEvents'] = $_POST['promoEvents'];
  } else {
    $_SESSION['promoEvents'] = "0";
  }
  if(!empty($_POST['collections'])){
    $_SESSION['collections'] = $_POST['collections'];
  } else {
    $_SESSION['collections'] = "0";
  }
  if(!empty($_POST['fundraising'])){
    $_SESSION['fundraising'] = $_POST['fundraising'];
  } else {
    $_SESSION['fundraising'] = "0";
  }
  if(!empty($_POST['buddyScheme'])){
    $_SESSION['buddyScheme'] = $_POST['buddyScheme'];
  } else {
    $_SESSION['buddyScheme'] = "0";
  }
  if(!empty($_POST['delivery'])){
    $_SESSION['delivery'] = $_POST['delivery'];
  } else {
    $_SESSION['delivery'] = "0";
  }
  if(!empty($_POST['drivers'])){
    $_SESSION['drivers'] = $_POST['drivers'];
  } else {
    $_SESSION['drivers'] = "0";
  }
  if(!empty($_POST['cooking'])){
    $_SESSION['cooking'] = $_POST['cooking'];
  } else {
    $_SESSION['cooking'] = "0";
  }
  if(!empty($_POST['store'])){
    $_SESSION['store'] = $_POST['store'];
  } else {
    $_SESSION['store'] = "0";
  }
  if(!empty($_POST['adhoc'])){
    $_SESSION['adhoc'] = $_POST['adhoc'];
  } else {
    $_SESSION['adhoc'] = "0";
  }
  if(!empty($_POST['external'])){
    $_SESSION['external'] = $_POST['external'];
  } else {
    $_SESSION['external'] = "0";
  }
  
  if(!empty($_POST['mon'])){
    $_SESSION['mon'] = $_POST['mon'];
  } else {
    $_SESSION['mon'] = "0";
  }
  if(!empty($_POST['tue'])){
    $_SESSION['tue'] = $_POST['tue'];
  } else {
    $_SESSION['tue'] = "0";
  }
  if(!empty($_POST['wed'])){
    $_SESSION['wed'] = $_POST['wed'];
  } else {
    $_SESSION['wed'] = "0";
  }
  if(!empty($_POST['thu'])){
    $_SESSION['thu'] = $_POST['thu'];
  } else {
    $_SESSION['thu'] = "0";
  }
  if(!empty($_POST['fri'])){
    $_SESSION['fri'] = $_POST['fri'];
  } else {
    $_SESSION['fri'] = "0";
  }
  if(!empty($_POST['sat'])){
    $_SESSION['sat'] = $_POST['sat'];
  } else {
    $_SESSION['sat'] = "0";
  }
  if(!empty($_POST['sun'])){
    $_SESSION['sun'] = $_POST['sun'];
  } else {
    $_SESSION['sun'] = "0";
  }
	
	$_SESSION['otherNotes'] = $_POST['otherNotes'];
  
  //Navigation buttons
  if(isset($_POST['submit'])){
    header("Location: register-d.php");
  }
  if(isset($_POST['back'])){
    header("Location: register-b.php");	
  }
}
?>

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
      <input class="form-check-input" type="checkbox" value="1" name="foodbankCentre" id="foodbankCentre" <?php if(isset($_SESSION['foodbankCentre']) && $_SESSION['foodbankCentre'] == "1"){echo "checked";} ?>>
      <label class="form-check-label" for="foodbankCentre">
        Foodbank Centre
      </label>
    </div>
    <div class="form-check form-group col-md-4">
      <input class="form-check-input" type="checkbox" value="1" name="promoEvents" id="promoEvents" <?php if(isset($_SESSION['promoEvents']) && $_SESSION['promoEvents'] == "1"){echo "checked";} ?>>
      <label class="form-check-label" for="promoEvents">
        Promotional Events
      </label>
    </div>
    <div class="form-check form-group col-md-4">
      <input class="form-check-input" type="checkbox" value="1" name="collections" id="collections" <?php if(isset($_SESSION['collections']) && $_SESSION['collections'] == "1"){echo "checked";} ?>>
      <label class="form-check-label" for="collections">
        Supermarket Collections
      </label>
    </div>
  </div>
  <div class="form-row">
    <div class="form-check form-group col-md-4">
      <input class="form-check-input" type="checkbox" value="1" name="fundraising" id="fundraising" <?php if(isset($_SESSION['fundraising']) && $_SESSION['fundraising'] == "1"){echo "checked";} ?>>
      <label class="form-check-label" for="fundraising">
        Fundraising
      </label>
    </div>
    <div class="form-check form-group col-md-4">
      <input class="form-check-input" type="checkbox" value="1" name="buddyScheme" id="buddyScheme" <?php if(isset($_SESSION['buddyScheme']) && $_SESSION['buddyScheme'] == "1"){echo "checked";} ?>>
      <label class="form-check-label" for="buddyScheme">
        Buddy Scheme
      </label>
    </div>
    <div class="form-check form-group col-md-4">
      <input class="form-check-input" type="checkbox" value="1" name="delivery" id="delivery" <?php if(isset($_SESSION['delivery']) && $_SESSION['delivery'] == "1"){echo "checked";} ?>>
      <label class="form-check-label" for="delivery">
        Delivery
      </label>
    </div>
  </div>
  <div class="form-row">
    <div class="form-check form-group col-md-4">
      <input class="form-check-input" type="checkbox" value="1" name="drivers" id="drivers" <?php if(isset($_SESSION['drivers']) && $_SESSION['drivers'] == "1"){echo "checked";} ?>>
      <label class="form-check-label" for="drivers">
        Drivers
      </label>
    </div>
    <div class="form-check form-group col-md-4">
      <input class="form-check-input" type="checkbox" value="1" name="cooking" id="cooking" <?php if(isset($_SESSION['cooking']) && $_SESSION['cooking'] == "1"){echo "checked";} ?>>
      <label class="form-check-label" for="cooking">
        Cooking
      </label>
    </div>
    <div class="form-check form-group col-md-4">
      <input class="form-check-input" type="checkbox" value="1" name="store" id="store" <?php if(isset($_SESSION['store']) && $_SESSION['store'] == "1"){echo "checked";} ?>>
      <label class="form-check-label" for="store">
        Store
      </label>
    </div>
  </div>
  <div class="form-row">
    <div class="form-check form-group col-md-4">
      <input class="form-check-input" type="checkbox" value="1" name="adhoc" id="adhoc" <?php if(isset($_SESSION['adhoc']) && $_SESSION['adhoc'] == "1"){echo "checked";} ?>>
      <label class="form-check-label" for="adhoc">
        Adhoc
      </label>
    </div>
    <div class="form-check form-group col-md-4">
      <input class="form-check-input" type="checkbox" value="1" name="external" id="external" <?php if(isset($_SESSION['external']) && $_SESSION['external'] == "1"){echo "checked";} ?>>
      <label class="form-check-label" for="external">
        External
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
      <input class="form-check-input" type="checkbox" value="1" name="mon" id="mon" <?php if(isset($_SESSION['mon']) && $_SESSION['mon'] == "1"){echo "checked";} ?>>
      <label class="form-check-label" for="mon">
        Mon
      </label>
    </div>
    <div class="form-check form-group col-md-1">
      <input class="form-check-input" type="checkbox" value="1" name="tue" id="tue" <?php if(isset($_SESSION['tue']) && $_SESSION['tue'] == "1"){echo "checked";} ?>>
      <label class="form-check-label" for="tue">
        Tues
      </label>
    </div>
    <div class="form-check form-group col-md-1">
      <input class="form-check-input" type="checkbox" value="1" name="wed" id="wed" <?php if(isset($_SESSION['wed']) && $_SESSION['wed'] == "1"){echo "checked";} ?>>
      <label class="form-check-label" for="wed">
        Wed
      </label>
    </div>
    <div class="form-check form-group col-md-1">
      <input class="form-check-input" type="checkbox" value="1" name="thu" id="thu" <?php if(isset($_SESSION['thu']) && $_SESSION['thu'] == "1"){echo "checked";} ?>>
      <label class="form-check-label" for="thu">
        Thurs
      </label>
    </div>
    <div class="form-check form-group col-md-1">
      <input class="form-check-input" type="checkbox" value="1" name="fri"  id="fri" <?php if(isset($_SESSION['fri']) && $_SESSION['fri'] == "1"){echo "checked";} ?>>
      <label class="form-check-label" for="fri">
        Fri
      </label>
    </div>
    <div class="form-check form-group col-md-1">
      <input class="form-check-input" type="checkbox" value="1" name="sat" id="sat" <?php if(isset($_SESSION['sat']) && $_SESSION['sat'] == "1"){echo "checked";} ?>>
      <label class="form-check-label" for="sat">
        Sat
      </label>
    </div>
    <div class="form-check form-group col-md-1">
      <input class="form-check-input" type="checkbox" value="1" name="sun" id="sun" <?php if(isset($_SESSION['sun']) && $_SESSION['sun'] == "1"){echo "checked";} ?>>
      <label class="form-check-label" for="sun">
        Sun
      </label>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-12">
    <label for="otherNotes">Other notes:</label>
    <textarea class="form-control" name="otherNotes" id="otherNotes" rows="3"><?php if(isset($_SESSION['otherNotes'])){echo $_SESSION['otherNotes'];} ?></textarea>
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
