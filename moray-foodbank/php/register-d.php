<?php
//include("includes/header.php");

session_start();

if(!isset($_SESSION['Username'])){
	header("Location: ../index.php");
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
        <p>Step Four - Diversity Questionnaire</p>
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
    <li class="progress-step is-complete">
      <span class="progress-marker"></span>
      <span class="progress-text">
        <a href="#" class="progress-title">AVAILABILITY</a>
      </span>
    </li>
    <li class="progress-step is-active">
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
    <div class="col-md-12">
    <label>Erm, insert ideas for these being valid questions HERE</label>
    </div>
  </div>
  <div class="form-row">
    <div class="form-check form-group col-md-4">
      <input class="form-check-input" type="checkbox" value="" id="lowIncome">
      <label class="form-check-label" for="lowIncome">
        Low Income
      </label>
    </div>
    <div class="form-check form-group col-md-4">
      <input class="form-check-input" type="checkbox" value="" id="mentalHealth">
      <label class="form-check-label" for="mentalHealth">
        Mental Health?
      </label>
    </div>
    <div class="form-check form-group col-md-4">
      <input class="form-check-input" type="checkbox" value="" id="disabilityPhysical">
      <label class="form-check-label" for="disabilityPhysical">
        Physical Disability
      </label>
    </div>
  </div>
  <div class="form-row">
    <div class="form-check form-group col-md-4">
      <input class="form-check-input" type="checkbox" value="" id="disabilityLearning">
      <label class="form-check-label" for="disabilityLearning">
        Learning Disability
      </label>
    </div>
    <div class="form-check form-group col-md-4">
      <input class="form-check-input" type="checkbox" value="" id="chronicCondition">
      <label class="form-check-label" for="chronicCondition">
        Chronic condition
      </label>
    </div>
    <div class="form-check form-group col-md-4">
      <input class="form-check-input" type="checkbox" value="" id="carers">
      <label class="form-check-label" for="carers">
        Carers
      </label>
    </div>
  </div>
  <div class="form-row">
    <div class="form-check form-group col-md-4">
      <input class="form-check-input" type="checkbox" value="" id="abused">
      <label class="form-check-label" for="abused">
        Abused
      </label>
    </div>
    <div class="form-check form-group col-md-4">
      <input class="form-check-input" type="checkbox" value="" id="lgbti">
      <label class="form-check-label" for="lgbti">
        LGBTI
      </label>
    </div>
    <div class="form-check form-group col-md-4">
      <input class="form-check-input" type="checkbox" value="" id="offenders">
      <label class="form-check-label" for="offenders">
        Offenders
      </label>
    </div>
  </div>
  <div class="form-row">
    <div class="form-check form-group col-md-4">
      <input class="form-check-input" type="checkbox" value="" id="youngRisk">
      <label class="form-check-label" for="youngRisk">
        Young Risk?
      </label>
    </div>
    <div class="form-check form-group col-md-4">
      <input class="form-check-input" type="checkbox" value="" id="homeless">
      <label class="form-check-label" for="homeless">
        Homeless
      </label>
    </div>
    <div class="form-check form-group col-md-4">
      <input class="form-check-input" type="checkbox" value="" id="addiction">
      <label class="form-check-label" for="addiction">
        Addiction
      </label>
    </div>
  </div>
  <div class="form-row">
    <div class="form-check form-group col-md-4">
      <input class="form-check-input" type="checkbox" value="" id="singleParent">
      <label class="form-check-label" for="singleParent">
        Single Parent
      </label>
    </div>
    <div class="form-check form-group col-md-8">
      <input class="form-check-input" type="checkbox" value="" id="ethnicMinority">
      <label class="form-check-label" for="ethnicMinority">
        Ethnic Minority... pretty sure this shouldn't be a checkbox...
      </label>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6 offset-md-3 form-buttons">
    <button type="submit" class="btn btn-primary">Back</button>
	<!--<button type="submit" class="btn btn-primary">Next</button>-->
	<input type="submit" name="submit" class ="btn btn-primary" value="Finish">
    </div>
  </div>
</form>
</div>
</main>
</body>
