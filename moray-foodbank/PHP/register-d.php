<?php
$title = "Registration - Step Four";
include("header.php");

if(isset($_POST['submit'])){
	$_SESSION['disabilityLearning'] = $_POST['disabilityLearning'];
	$_SESSION['mentalHealth'] = $_POST['mentalHealth'];
	$_SESSION['disabilityPhysical'] = $_POST['disabilityLearning'];
	$_SESSION['chronicCondition'] = $_POST['chronicCondition'];
	$_SESSION['addiction'] = $_POST['addiction'];
	$_SESSION['carers'] = $_POST['carers'];
	$_SESSION['healthIssues'] = $_POST['delivery'];
	$_SESSION['abused'] = $_POST['abused'];
	$_SESSION['lgbti'] = $_POST['lgbti'];
	$_SESSION['offenders'] = $_POST['offenders'];
	$_SESSION['youngRisk']  = $_POST['youngRisk'];
	$_SESSION['homeless'] = $_POST['homeless'];
	$_SESSION['lowIncome'] = $_POST['lowIncome'];
	$_SESSION['singleParent'] = $_POST['singleParent'];
	$_SESSION['ethnicMinority'] = $_POST['ethnicMinority'];
	$_SESSION['pdRequest'] = $_POST['pdRequest'];
	$_SESSION['otherInfo'] = $_POST['otherInfo'];
	$_SESSION['pvg'] = $_POST['pvg'];
	$_SESSION['confAgree'] = $_POST['confAgree'];
	$_SESSION['hsSigned'] = $_POST['hsSigned'];

	
	header("Location create-volunteer.php");
}

if(isset($_POST['back'])){
	$_SESSION['disabilityLearning'] = $_POST['disabilityLearning'];
	$_SESSION['mentalHealth'] = $_POST['mentalHealth'];
	$_SESSION['disabilityPhysical'] = $_POST['disabilityLearning'];
	$_SESSION['chronicCondition'] = $_POST['chronicCondition'];
	$_SESSION['addiction'] = $_POST['addiction'];
	$_SESSION['carers'] = $_POST['carers'];
	$_SESSION['healthIssues'] = $_POST['delivery'];
	$_SESSION['abused'] = $_POST['abused'];
	$_SESSION['lgbti'] = $_POST['lgbti'];
	$_SESSION['offenders'] = $_POST['offenders'];
	$_SESSION['youngRisk']  = $_POST['youngRisk'];
	$_SESSION['homeless'] = $_POST['homeless'];
	$_SESSION['lowIncome'] = $_POST['lowIncome'];
	$_SESSION['singleParent'] = $_POST['singleParent'];
	$_SESSION['ethnicMinority'] = $_POST['ethnicMinority'];
	$_SESSION['pdRequest'] = $_POST['pdRequest'];
	$_SESSION['otherInfo'] = $_POST['otherInfo'];
	$_SESSION['pvg'] = $_POST['pvg'];
	$_SESSION['confAgree'] = $_POST['confAgree'];
	$_SESSION['hsSigned'] = $_POST['hsSigned'];

	header("Location: register-c.php");
}
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
      <input class="form-check-input" type="checkbox" value="1" name="disabilityLearning" id="disabilityLearning" <?php if(isset($_SESSION['disabilityLearning'])){echo "checked";} ?>>
      <label class="form-check-label" for="disabilityLearning">
        Learning Disability
      </label>
    </div>
    <div class="form-check form-group col-md-4">
      <input class="form-check-input" type="checkbox" value="1" name="mentalHealth" id="mentalHealth" <?php if(isset($_SESSION['mentalHealth'])){echo "checked";} ?>>
      <label class="form-check-label" for="mentalHealth">
        Mental Health
      </label>
    </div>
    <div class="form-check form-group col-md-4">
      <input class="form-check-input" type="checkbox" value="1" name="disabilityPhysical" id="disabilityPhysical" <?php if(isset($_SESSION['disabilityPhysical'])){echo "checked";} ?>>
      <label class="form-check-label" for="disabilityPhysical">
        Physical Disability
      </label>
    </div>
  </div>
  <div class="form-row">
    <div class="form-check form-group col-md-4">
      <input class="form-check-input" type="checkbox" value="1" name="chronicCondition" id="chronicCondition" <?php if(isset($_SESSION['chronicCondition'])){echo "checked";} ?>>
      <label class="form-check-label" for="chronicCondition">
        Chronic condition
      </label>
    </div>
    <div class="form-check form-group col-md-4">
      <input class="form-check-input" type="checkbox" value="1" name="addiction" id="addiction" <?php if(isset($_SESSION['addiction'])){echo "checked";} ?>>
      <label class="form-check-label" for="addiction">
        Addiction
      </label>
    </div>
    <div class="form-check form-group col-md-4">
      <input class="form-check-input" type="checkbox" value="1" name="carers" id="carers" <?php if(isset($_SESSION['carers'])){echo "checked";} ?>>
      <label class="form-check-label" for="carers">
        Carers
      </label>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="healthIssues">Details (including medication)</label>
      <textarea class="form-control" name="healthIssues" id="healthIssues" rows="3"><?php if(isset($_SESSION['healthIssues'])){echo $_SESSION['healthIssues'];} ?></textarea>
    </div>
  </div>
  <div class="form-row">
    <div class="form-check form-group col-md-4">
      <input class="form-check-input" type="checkbox" value="1" name="abused" id="abused" <?php if(isset($_SESSION['abused'])){echo "checked";} ?>>
      <label class="form-check-label" for="abused">
        Abused
      </label>
    </div>
    <div class="form-check form-group col-md-4">
      <input class="form-check-input" type="checkbox" value="1" name="lgbti" id="lgbti" <?php if(isset($_SESSION['lgbti'])){echo "checked";} ?>>
      <label class="form-check-label" for="lgbti">
        LGBTI
      </label>
    </div>
    <div class="form-check form-group col-md-4">
      <input class="form-check-input" type="checkbox" value="1" name="offenders" id="offenders" <?php if(isset($_SESSION['offenders'])){echo "checked";} ?>>
      <label class="form-check-label" for="offenders">
        Offenders
      </label>
    </div>
  </div>
  <div class="form-row">
    <div class="form-check form-group col-md-4">
      <input class="form-check-input" type="checkbox" value="1" name="youngRisk" id="youngRisk" <?php if(isset($_SESSION['youngRisk'])){echo "checked";} ?>>
      <label class="form-check-label" for="youngRisk">
        Young Risk?
      </label>
    </div>
    <div class="form-check form-group col-md-4">
      <input class="form-check-input" type="checkbox" value="1" name="homeless" id="homeless" <?php if(isset($_SESSION['homeless'])){echo "checked";} ?>>
      <label class="form-check-label" for="homeless">
        Homeless
      </label>
    </div>
    <div class="form-check form-group col-md-4">
      <input class="form-check-input" type="checkbox" value="1" name="lowIncome" id="lowIncome" <?php if(isset($_SESSION['lowIncome'])){echo "checked";} ?>>
      <label class="form-check-label" for="lowIncome">
        Low Income
      </label>
    </div>
  </div>
  <div class="form-row">
    <div class="form-check form-group col-md-4">
      <input class="form-check-input" type="checkbox" value="1" name="singleParent" id="singleParent" <?php if(isset($_SESSION['singleParent'])){echo "checked";} ?>>
      <label class="form-check-label" for="singleParent">
        Single Parent
      </label>
    </div>
    <div class="form-check form-group col-md-8">
      <input class="form-check-input" type="checkbox" value="1" name="ethnicMinority" id="ethnicMinority" <?php if(isset($_SESSION['ethnicMinority'])){echo "checked";} ?>>
      <label class="form-check-label" for="ethnicMinority">
        Ethnic Minority... pretty sure this shouldn't be a checkbox...
      </label>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="pdRequest">Any personal development requested, or other development info:</label>
      <textarea class="form-control" name="pdRequest" id="pdRequest"  rows="3" ><?php if(isset($_SESSION['pdRequest'])){echo $_SESSION['pdRequest'];} ?></textarea>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="otherInfo">Other info, reasons for volunteering:</label>
      <textarea class="form-control" name="otherInfo" id="otherInfo" rows="3"><?php if(isset($_SESSION['otherInfo'])){echo $_SESSION['otherInfo'];} ?></textarea>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="pvg">PVG</label>
      <select class="form-control" id="pvg" name="pvg">
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
      <input class="form-check-input" type="checkbox" value="1" name="confAgree" id="confAgree" <?php if(isset($_SESSION['confAgree'])){echo "checked";} ?>>
      <label class="form-check-label" for="confAgree">
        Confidentiality agreement signed
      </label>
    </div>
  </div>
  <div class="form-row">
    <div class="form-check form-group col-md-6">
      <input class="form-check-input" type="checkbox" value="1" name="hsSigned" id="hsSigned" <?php if(isset($_SESSION['hsSigned'])){echo "checked";} ?>>
      <label class="form-check-label" for="hsSigned">
        H&S checklist completed for current location
      </label>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6 offset-md-3 form-buttons">
	<!--<button type="submit" class="btn btn-primary">Back</button>-->
	<input type="submit" name="back" class ="btn btn-primary" value="Back">
	<!--<button type="submit" class="btn btn-primary">Next</button>-->
	<input type="submit" name="submit" class ="btn btn-primary" value="Finish">
    </div>
  </div>
</form>
</div>
</main>
</body>
