<?php
$title = "Registration - Step Four";
include("header.php");

if(isset($_POST['submit']) || isset($_POST['back'])){
	
	if($_POST['targetGroup'] = "none"){
		$_SESSION['targetGroup'] = null;
	}else{
		$_SESSION['targetGroup'] = $_POST['targetGroup'];
	}
	
	$_SESSION['healthIssues'] = $_POST['healthIssues'];
  
	$_SESSION['pdRequest'] = $_POST['pdRequest'];
	$_SESSION['otherInfo'] = $_POST['otherInfo'];
	$_SESSION['pvg'] = $_POST['pvg'];

	if(!empty($_POST['confAgree'])) $_SESSION['confAgree'] = $_POST['confAgree'];
	else $_SESSION['confAgree'] = "0";
  
	if(!empty($_POST['hsSigned'])) $_SESSION['hsSigned'] = $_POST['hsSigned'];
	else $_SESSION['hsSigned'] = "0";

  //Navigation buttons
	if(isset($_POST['submit']))
		header("Location: create-volunteer.php");
	if(isset($_POST['back']))
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
      <input class="form-check-input" type="radio" value="none" name="targetGroup" id="targetGroup" checked>
      <label class="form-check-label" for="disabilityLearning">
        None
      </label>
    </div>
    <div class="form-check form-group col-md-4">
      <input class="form-check-input" type="radio" value="disabilityLearning" name="targetGroup" id="targetGroup" <?php if(isset($_SESSION['targetGroup']) && $_SESSION['targetGroup'] == "disabilityLearning"){echo "checked";} ?>>
      <label class="form-check-label" for="disabilityLearning">
        Learning Disability
      </label>
    </div>
    <div class="form-check form-group col-md-4">
      <input class="form-check-input" type="radio" value="mentalHealth" name="targetGroup" id="targetGroup" <?php if(isset($_SESSION['targetGroup']) && $_SESSION['targetGroup'] == "mentalHealth"){echo "checked";} ?>>
      <label class="form-check-label" for="mentalHealth">
        Mental Health
      </label>
    </div>
    <div class="form-check form-group col-md-4">
      <input class="form-check-input" type="radio" value="disabilityPhysical" name="targetGroup" id="targetGroup" <?php if(isset($_SESSION['targetGroup']) && $_SESSION['targetGroup'] == "disabilityPhysical"){echo "checked";} ?>>
      <label class="form-check-label" for="disabilityPhysical">
        Physical Disability
      </label>
    </div>
  </div>
  <div class="form-row">
    <div class="form-check form-group col-md-4">
      <input class="form-check-input" type="radio" value="chronicCondition" name="targetGroup" id="targetGroup" <?php if(isset($_SESSION['targetGroup']) && $_SESSION['targetGroup'] == "chronicCondition"){echo "checked";} ?>>
      <label class="form-check-label" for="chronicCondition">
        Chronic condition
      </label>
    </div>
    <div class="form-check form-group col-md-4">
      <input class="form-check-input" type="radio" value="addiction" name="targetGroup" id="targetGroup" <?php if(isset($_SESSION['targetGroup']) && $_SESSION['targetGroup'] == "addiction"){echo "checked";} ?>>
      <label class="form-check-label" for="addiction">
        Addiction
      </label>
    </div>
    <div class="form-check form-group col-md-4">
      <input class="form-check-input" type="radio" value="carers" name="targetGroup" id="targetGroup" <?php if(isset($_SESSION['targetGroup']) && $_SESSION['targetGroup'] == "carers"){echo "checked";} ?>>
      <label class="form-check-label" for="carers">
        Carers
      </label>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="healthIssues">Details (including medication)</label>
      <textarea class="form-control" name="healthIssues" id="healthIssues" rows="3"><?php if(isset($_SESSION['targetGroup'])){echo $_SESSION['targetGroup'];} ?></textarea>
    </div>
  </div>
  <div class="form-row">
    <div class="form-check form-group col-md-4">
      <input class="form-check-input" type="radio" value="abused" name="targetGroup" id="targetGroup" <?php if(isset($_SESSION['targetGroup']) && $_SESSION['targetGroup'] == "abused"){echo "checked";} ?>>
      <label class="form-check-label" for="abused">
        Abused
      </label>
    </div>
    <div class="form-check form-group col-md-4">
      <input class="form-check-input" type="radio" value="lgbti" name="targetGroup" id="targetGroup" <?php if(isset($_SESSION['targetGroup']) && $_SESSION['targetGroup'] == "lgbti"){echo "checked";} ?>>
      <label class="form-check-label" for="lgbti">
        LGBTI
      </label>
    </div>
    <div class="form-check form-group col-md-4">
      <input class="form-check-input" type="radio" value="offenders" name="targetGroup" id="targetGroup" <?php if(isset($_SESSION['targetGroup']) && $_SESSION['targetGroup'] == "offenders"){echo "checked";} ?>>
      <label class="form-check-label" for="offenders">
        Offenders
      </label>
    </div>
  </div>
  <div class="form-row">
    <div class="form-check form-group col-md-4">
      <input class="form-check-input" type="radio" value="youngRisk" name="targetGroup" id="targetGroup" <?php if(isset($_SESSION['targetGroup']) && $_SESSION['targetGroup'] == "youngRisk"){echo "checked";} ?>>
      <label class="form-check-label" for="youngRisk">
        Young Risk?
      </label>
    </div>
    <div class="form-check form-group col-md-4">
      <input class="form-check-input" type="radio" value="homeless" name="targetGroup" id="targetGroup" <?php if(isset($_SESSION['targetGroup']) && $_SESSION['targetGroup'] == "homeless"){echo "checked";} ?>>
      <label class="form-check-label" for="homeless">
        Homeless
      </label>
    </div>
    <div class="form-check form-group col-md-4">
      <input class="form-check-input" type="radio" value="lowIncome" name="targetGroup" id="targetGroup" <?php if(isset($_SESSION['targetGroup']) && $_SESSION['targetGroup'] == "lowIncome"){echo "checked";} ?>>
      <label class="form-check-label" for="lowIncome">
        Low Income
      </label>
    </div>
  </div>
  <div class="form-row">
    <div class="form-check form-group col-md-4">
      <input class="form-check-input" type="radio" value="singleParent" name="targetGroup" id="targetGroup" <?php if(isset($_SESSION['targetGroup']) && $_SESSION['targetGroup'] == "singleParent"){echo "checked";} ?>>
      <label class="form-check-label" for="singleParent">
        Single Parent
      </label>
    </div>
    <div class="form-check form-group col-md-8">
      <input class="form-check-input" type="radio" value="ethnicMinority" name="targetGroup" id="targetGroup" <?php if(isset($_SESSION['ethnicMinority']) && $_SESSION['targetGroup'] == "ethnicMinority"){echo "checked";} ?>>
      <label class="form-check-label" for="ethnicMinority">
        Ethnic Minority
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
        <option value="Received" <?php if((isset($_SESSION['pvg'])) && $_SESSION['pvg']=="Received"){echo "selected";}?>>Received</option>
        <option value="Not Required" <?php if((isset($_SESSION['pvg'])) && $_SESSION['pvg']=="Not Required"){echo "selected";}?>>Not Required</option>
      </select>
    </div>
  </div>
  <div class="form-row">
    <div class="form-check form-group col-md-6">
      <input class="form-check-input" type="checkbox" value="1" name="confAgree" id="confAgree" <?php if(isset($_SESSION['confAgree']) && $_SESSION['confAgree'] == "1"){echo "checked";} ?>>
      <label class="form-check-label" for="confAgree">
        Confidentiality agreement signed
      </label>
    </div>
  </div>
  <div class="form-row">
    <div class="form-check form-group col-md-6">
      <input class="form-check-input" type="checkbox" value="1" name="hsSigned" id="hsSigned" <?php if(isset($_SESSION['hsSigned']) && $_SESSION['hsSigned'] == "1"){echo "checked";} ?>>
      <label class="form-check-label" for="hsSigned">
        H&S checklist completed for current location
      </label>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6 offset-md-3 form-buttons">
      <input type="submit" name="back" class ="btn btn-primary" value="Back">
      <input type="submit" name="submit" class ="btn btn-primary" value="Finish">
    </div>
  </div>
</form>
</div>
</main>
</body>
