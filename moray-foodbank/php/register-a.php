<?php
//include("includes/header.php");

session_start();

if(!isset($_SESSION['Username'])){
	header("Location: ../index.php");
}

if(isset($_POST['submit'])){
	$_SESSION['title'] = $_POST['title'];
	$_SESSION['fname'] = $_POST['firstname'];
	$_SESSION['lname'] = $_POST['lname'];
	$_SESSION['email'] = $_POST['email'];
	$_SESSION['line1'] = $_POST['line1'];
	$_SESSION['line2'] = $_POST['line2'];
	$_SESSION['city'] = $_POST['address3'];
	$_SESSION['postcode'] = $_POST['postcode'];
	$_SESSION['phone'] = $_POST['phoneNo'];
	$_SESSION['dofb'] = $_POST['dofb'];
	
	$_SESSION['cType'] = $_POST['contactType'];
	$_SESSION['cName'] = $_POST['contactName'];
	$_SESSION['cPhone'] = $_POST['contactPhone'];
	$_SESSION['relationship'] = $_POST['contactRel'];

	
	header("Location: register-b.php");
}

if(isset($_POST['cancel'])){
	header("Location: home.php");
	
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
        <p>Step One - Volunteer's Personal Information</p>
    </div>
</div>

<div class="container">
  <ul class="progress-tracker progress-tracker--text progress-tracker--center">
    <li class="progress-step is-active">
      <span class="progress-marker"></span>
      <span class="progress-text">
        <a href="#" class="progress-title">VOLUNTEER DETAILS</a>
      </span>
    </li>
    <li class="progress-step">
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
<form class="volunteer-form" action="" method="post">
  <div class="form-row">
    <div class="form-group col-md-2">
      <label for="title">TITLE</label>
      <input type="text" class="form-control" name="title" id="title" placeholder="Title" value="<?php echo $_SESSION['title']; ?>">
    </div>
    <div class="form-group col-md-4">
      <label for="firstName">FIRST NAME</label>
      <input type="text" class="form-control" name="firstname" id="firstName" placeholder="First Name" value="<?php echo $_SESSION['fname']; ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="lname">SURNAME</label>
      <input type="text" class="form-control" name="lname" id="lname" placeholder="Surname" value="<?php echo $_SESSION['lname']; ?>">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="email">EMAIL</label>
      <input type="text" class="form-control" name="email" id="email" placeholder="Email address" value="<?php echo $_SESSION['email']; ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="line1">ADDRESS LINE 1</label>
      <input type="text" class="form-control" name="line1" id="line1" placeholder="First line of address" value="<?php echo $_SESSION['line1']; ?>">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="phoneNo">PHONE</label>
      <input type="text" class="form-control" name="phoneNo" id="phoneNo" placeholder="Phone number" value="<?php echo $_SESSION['phone']; ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="line2">ADDRESS LINE 2</label>
      <input type="text" class="form-control" name="line2" id="line2" placeholder="Second line of address" value="<?php echo $_SESSION['line2']; ?>">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="dofb">DATE OF BIRTH</label>
      <input type="date" class="form-control" name="dofb" id="dofb" placeholder="Date of birth" value="<?php echo $_SESSION['dofb']; ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="address3">CITY</label>
      <input type="text" class="form-control" name="address3" id="address3" placeholder="City" value="<?php echo $_SESSION['city']; ?>">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6 offset-md-6">
      <label for="postcode">POSTCODE</label>
      <input type="text" class="form-control" name="postcode" id="postcode" placeholder="Postcode" value="<?php echo $_SESSION['postcode']; ?>">
    </div>
  </div>
  <br>
  <label>EMERGENCY CONTACT</label>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="contactName">FULL NAME</label>
      <input type="text" class="form-control" name="contactName" id="contactName" placeholder="Full name" value="<?php echo $_SESSION['cName']; ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="contactPhone">PHONE</label>
      <input type="text" class="form-control" name="contactPhone" id="contactPhone" placeholder="Phone Number" value="<?php echo $_SESSION['cPhone']; ?>">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="contactRel">RELATIONSHIP</label>
      <input type="text" class="form-control" name="contactRel" id="contactRel" placeholder="Relationship to volunteer" value="<?php echo $_SESSION['relationship']; ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="contactType">CONTACT TYPE</label>
      <select class="form-control" id="contactType" name="contactType">
		<option value="0">Support</option>
        <option value="1" <?php if($_SESSION['cType']=="Emergency"){echo "selected";}?>>Emergency</option>
      </select>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6 offset-md-3 form-buttons">
		<!--<button type="submit" class="btn btn-primary disabled">Back</button>-->
		<input type ="submit" name="cancel" class ="btn btn-primary" value="Back">
		<!--<button type="submit" class="btn btn-primary">Next</button>-->
		<input type ="submit" name="submit" class ="btn btn-primary" value="Next">
    </div>
  </div>
</form>
</div>
</main>
</body>
