<?php
$title = "Registration - Step One";
include("header.php");
?>

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
    <label>Any health issues that we should be aware of?</label>
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
      <input class="form-check-input" type="checkbox" value="" id="mentalHealth">
      <label class="form-check-label" for="mentalHealth">
        Mental Health
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
      <input class="form-check-input" type="checkbox" value="" id="chronicCondition">
      <label class="form-check-label" for="chronicCondition">
        Chronic condition
      </label>
    </div>
    <div class="form-check form-group col-md-4">
      <input class="form-check-input" type="checkbox" value="" id="addiction">
      <label class="form-check-label" for="addiction">
        Addiction
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
    <div class="form-group col-md-12">
      <label for="healthIssues">Details (including medication)</label>
      <textarea class="form-control" id="healthIssues" rows="3"></textarea>
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
      <input class="form-check-input" type="checkbox" value="" id="lowIncome">
      <label class="form-check-label" for="lowIncome">
        Low Income
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
    <div class="form-group col-md-12">
      <label for="pdRequest">Any personal development requested, or other development info:</label>
      <textarea class="form-control" id="pdRequest" rows="3"></textarea>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="otherInfo">Other info, reasons for volunteering:</label>
      <textarea class="form-control" id="otherInfo" rows="3"></textarea>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="pvg">PVG</label>
      <select class="form-control" id="pvg" name="contactType">
		    <option value="0">Can't check</option>
        <option value="1" <?php if((isset($_SESSION['pvg'])) && $_SESSION['pvg']=="1"){echo "selected";}?>>Can Check</option>
        <option value="2" <?php if((isset($_SESSION['pvg'])) && $_SESSION['pvg']=="2"){echo "selected";}?>>Incoming</option>
        <option value="3" <?php if((isset($_SESSION['pvg'])) && $_SESSION['pvg']=="3"){echo "selected";}?>>Passed</option>
        <option value="4" <?php if((isset($_SESSION['pvg'])) && $_SESSION['pvg']=="4"){echo "selected";}?>>Failed</option>
      </select>
    </div>
  </div>
  <div class="form-row">
    <div class="form-check form-group col-md-6">
      <input class="form-check-input" type="checkbox" value="" id="confAgree">
      <label class="form-check-label" for="confAgree">
        Confidentiality agreement signed
      </label>
    </div>
  </div>
  <div class="form-row">
    <div class="form-check form-group col-md-6">
      <input class="form-check-input" type="checkbox" value="" id="hsSigned">
      <label class="form-check-label" for="hsSigned">
        H&S checklist completed for current location
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
