<?php
$title = "Registration - Step Four";
include("header.php");

if(isset($_POST['submit']) || isset($_POST['back'])){

  if(!empty($_POST['disabilityLearning'])) $_SESSION['disabilityLearning'] = $_POST['disabilityLearning'];
  else $_SESSION['disabilityLearning'] = "0";
  
  if(!empty($_POST['mentalHealth'])) $_SESSION['mentalHealth'] = $_POST['mentalHealth'];
  else $_SESSION['mentalHealth'] = "0";
  
  if(!empty($_POST['disabilityPhysical'])) $_SESSION['disabilityPhysical'] = $_POST['disabilityPhysical'];
  else $_SESSION['disabilityPhysical'] = "0";
  
  if(!empty($_POST['chronicCondition'])) $_SESSION['chronicCondition'] = $_POST['chronicCondition'];
  else $_SESSION['chronicCondition'] = "0";
  
  if(!empty($_POST['addiction'])) $_SESSION['addiction'] = $_POST['addiction'];
  else $_SESSION['addiction'] = "0";
  
  if(!empty($_POST['carers'])) $_SESSION['carers'] = $_POST['carers'];
  else $_SESSION['carers'] = "0";
  
  $_SESSION['healthIssues'] = $_POST['healthIssues'];
  
  if(!empty($_POST['abused'])) $_SESSION['abused'] = $_POST['abused'];
  else $_SESSION['abused'] = "0";
  
  if(!empty($_POST['lgbti'])) $_SESSION['lgbti'] = $_POST['lgbti'];
  else $_SESSION['lgbti'] = "0";
  
  if(!empty($_POST['offenders'])) $_SESSION['offenders'] = $_POST['offenders'];
  else $_SESSION['offenders'] = "0";
  
  if(!empty($_POST['youngRisk'])) $_SESSION['youngRisk'] = $_POST['youngRisk'];
  else $_SESSION['youngRisk'] = "0";
  
  if(!empty($_POST['homeless'])) $_SESSION['homeless'] = $_POST['homeless'];
  else $_SESSION['homeless'] = "0";
  
  if(!empty($_POST['lowIncome'])) $_SESSION['lowIncome'] = $_POST['lowIncome'];
  else $_SESSION['lowIncome'] = "0";
  
  if(!empty($_POST['singleParent'])) $_SESSION['singleParent'] = $_POST['singleParent'];
  else $_SESSION['singleParent'] = "0";
  
  if(!empty($_POST['ethnicMinority'])) $_SESSION['ethnicMinority'] = $_POST['ethnicMinority'];
  else $_SESSION['ethnicMinority'] = "0";
  
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
      <input class="form-check-input" type="checkbox" value="1" name="disabilityLearning" id="disabilityLearning" <?php if(isset($_SESSION['disabilityLearning']) && $_SESSION['disabilityLearning'] == "1"){echo "checked";} ?>>
      <label class="form-check-label" for="disabilityLearning">
        Learning Disability
      </label>
    </div>
    <div class="form-check form-group col-md-4">
      <input class="form-check-input" type="checkbox" value="1" name="mentalHealth" id="mentalHealth" <?php if(isset($_SESSION['mentalHealth']) && $_SESSION['mentalHealth'] == "1"){echo "checked";} ?>>
      <label class="form-check-label" for="mentalHealth">
        Mental Health
      </label>
    </div>
    <div class="form-check form-group col-md-4">
      <input class="form-check-input" type="checkbox" value="1" name="disabilityPhysical" id="disabilityPhysical" <?php if(isset($_SESSION['disabilityPhysical']) && $_SESSION['disabilityPhysical'] == "1"){echo "checked";} ?>>
      <label class="form-check-label" for="disabilityPhysical">
        Physical Disability
      </label>
    </div>
  </div>
  <div class="form-row">
    <div class="form-check form-group col-md-4">
      <input class="form-check-input" type="checkbox" value="1" name="chronicCondition" id="chronicCondition" <?php if(isset($_SESSION['chronicCondition']) && $_SESSION['chronicCondition'] == "1"){echo "checked";} ?>>
      <label class="form-check-label" for="chronicCondition">
        Chronic condition
      </label>
    </div>
    <div class="form-check form-group col-md-4">
      <input class="form-check-input" type="checkbox" value="1" name="addiction" id="addiction" <?php if(isset($_SESSION['addiction']) && $_SESSION['addiction'] == "1"){echo "checked";} ?>>
      <label class="form-check-label" for="addiction">
        Addiction
      </label>
    </div>
    <div class="form-check form-group col-md-4">
      <input class="form-check-input" type="checkbox" value="1" name="carers" id="carers" <?php if(isset($_SESSION['carers']) && $_SESSION['carers'] == "1"){echo "checked";} ?>>
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
      <input class="form-check-input" type="checkbox" value="1" name="abused" id="abused" <?php if(isset($_SESSION['abused']) && $_SESSION['abused'] == "1"){echo "checked";} ?>>
      <label class="form-check-label" for="abused">
        Abused
      </label>
    </div>
    <div class="form-check form-group col-md-4">
      <input class="form-check-input" type="checkbox" value="1" name="lgbti" id="lgbti" <?php if(isset($_SESSION['lgbti']) && $_SESSION['lgbti'] == "1"){echo "checked";} ?>>
      <label class="form-check-label" for="lgbti">
        LGBTI
      </label>
    </div>
    <div class="form-check form-group col-md-4">
      <input class="form-check-input" type="checkbox" value="1" name="offenders" id="offenders" <?php if(isset($_SESSION['offenders']) && $_SESSION['offenders'] == "1"){echo "checked";} ?>>
      <label class="form-check-label" for="offenders">
        Offenders
      </label>
    </div>
  </div>
  <div class="form-row">
    <div class="form-check form-group col-md-4">
      <input class="form-check-input" type="checkbox" value="1" name="youngRisk" id="youngRisk" <?php if(isset($_SESSION['youngRisk']) && $_SESSION['youngRisk'] == "1"){echo "checked";} ?>>
      <label class="form-check-label" for="youngRisk">
        Young Risk?
      </label>
    </div>
    <div class="form-check form-group col-md-4">
      <input class="form-check-input" type="checkbox" value="1" name="homeless" id="homeless" <?php if(isset($_SESSION['homeless']) && $_SESSION['homeless'] == "1"){echo "checked";} ?>>
      <label class="form-check-label" for="homeless">
        Homeless
      </label>
    </div>
    <div class="form-check form-group col-md-4">
      <input class="form-check-input" type="checkbox" value="1" name="lowIncome" id="lowIncome" <?php if(isset($_SESSION['lowIncome']) && $_SESSION['lowIncome'] == "1"){echo "checked";} ?>>
      <label class="form-check-label" for="lowIncome">
        Low Income
      </label>
    </div>
  </div>
  <div class="form-row">
    <div class="form-check form-group col-md-4">
      <input class="form-check-input" type="checkbox" value="1" name="singleParent" id="singleParent" <?php if(isset($_SESSION['singleParent']) && $_SESSION['singleParent'] == "1"){echo "checked";} ?>>
      <label class="form-check-label" for="singleParent">
        Single Parent
      </label>
    </div>
    <div class="form-check form-group col-md-8">
      <input class="form-check-input" type="checkbox" value="1" name="ethnicMinority" id="ethnicMinority" <?php if(isset($_SESSION['ethnicMinority']) && $_SESSION['ethnicMinority'] == "1"){echo "checked";} ?>>
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
		    <option value="Cannot check">Can't check</option> <!-- TODO: Change "Can't change" to "Cannot change" in database. -->
        <option value="Can check" <?php if((isset($_SESSION['pvg'])) && $_SESSION['pvg']=="Can check"){echo "selected";}?>>Can Check</option>
        <option value="Incoming" <?php if((isset($_SESSION['pvg'])) && $_SESSION['pvg']=="Incoming"){echo "selected";}?>>Incoming</option>
        <option value="Passed" <?php if((isset($_SESSION['pvg'])) && $_SESSION['pvg']=="Passed"){echo "selected";}?>>Passed</option>
        <option value="Failed" <?php if((isset($_SESSION['pvg'])) && $_SESSION['pvg']=="Failed"){echo "selected";}?>>Failed</option>
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
