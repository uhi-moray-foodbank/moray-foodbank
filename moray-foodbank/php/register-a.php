<!--?php
include("includes/header.php");
?-->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Moray Foodbank</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="../css/styles.css" />

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
<form class="volunteer-form">
  <div class="form-row">
    <div class="form-group col-md-2">
      <label for="title">TITLE</label>
      <input type="text" class="form-control" id="title" placeholder="Title">
    </div>
    <div class="form-group col-md-4">
      <label for="firstName">FIRST NAME</label>
      <input type="text" class="form-control" id="firstName" placeholder="First Name">
    </div>
    <div class="form-group col-md-6">
      <label for="lname">SURNAME</label>
      <input type="text" class="form-control" id="lname" placeholder="Surname">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="email">EMAIL</label>
      <input type="text" class="form-control" id="email" placeholder="Email address">
    </div>
    <div class="form-group col-md-6">
      <label for="line1">ADDRESS LINE 1</label>
      <input type="text" class="form-control" id="line1" placeholder="First line of address">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="phoneNo">PHONE</label>
      <input type="text" class="form-control" id="phoneNo" placeholder="Phone number">
    </div>
    <div class="form-group col-md-6">
      <label for="line2">ADDRESS LINE 2</label>
      <input type="text" class="form-control" id="line2" placeholder="Second line of address">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="dofb">DATE OF BIRTH</label>
      <input type="date" class="form-control" id="dofb" placeholder="Date of birth">
    </div>
    <div class="form-group col-md-6">
      <label for="address3">CITY</label>
      <input type="text" class="form-control" id="address3" placeholder="City">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6 offset-md-6">
      <label for="postcode">POSTCODE</label>
      <input type="text" class="form-control" id="postcode" placeholder="Postcode">
    </div>
  </div>
  <br>
  <label>EMERGENCY CONTACT</label>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="contactName">FULL NAME</label>
      <input type="text" class="form-control" id="contactName" placeholder="Full name">
    </div>
    <div class="form-group col-md-6">
      <label for="contactPhone">PHONE</label>
      <input type="text" class="form-control" id="contactPhone" placeholder="Phone Number">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="contactRel">RELATIONSHIP</label>
      <input type="text" class="form-control" id="contactRel" placeholder="Relationship to volunteer">
    </div>
    <div class="form-group col-md-6">
      <label for="contactType">CONTACT TYPE</label>
      <select class="form-control" id="contactType">
        <option value="0">Support</option>
        <option value="1">Emergency</option>
      </select>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6 offset-md-3 form-buttons">
    <button type="submit" class="btn btn-primary disabled">Back</button>
    <button type="submit" class="btn btn-primary">Next</button>
    </div>
  </div>
</form>
</div>
</main>
</body>
