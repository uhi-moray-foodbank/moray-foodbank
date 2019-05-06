<?php
include("header.php");

$errorTitle = false;
$errorFName = false;
$errorLName = false;

$tempUsername = $_SESSION['Username'];

$_SESSION['id'] = $_POST['id'];

$currentDate = date('Y')."-".date('m')."-".date('d');

//Get the volunteer's id to use in other queries
$query = mysqli_query($connection, "SELECT * FROM volunteer WHERE id='".$_SESSION['id']."';");

$query2 = mysqli_query($connection, "SELECT * FROM contact WHERE id='". $_SESSION['id']."';");

$id = $_POST['id'];
//If values are posted, set variables to equal posted values

if(isset($_POST['Submit'])){
				$title = $_POST['title'];
				$fname = $_POST['firstname'];
				//$fname = $_POST['fname'];
				$lname = $_POST['lname'];
				$email = $_POST['email'];
				$line1 = $_POST['line1'];
				$line2 = $_POST['line2'];
				$city = $_POST['address3'];
				$postcode = $_POST['postcode'];
				$phone = $_POST['phoneNo'];
				$dofb = $_POST['dofb'];
				

				$_SESSION['cType'] = $_POST['contactType'];
				$_SESSION['cName'] = $_POST['contactName'];
				$_SESSION['cphone'] = $_POST['contactPhone'];
				$_SESSION['relationship'] = $_POST['contactRel'];


//Update volunteer table with new values

$sql = "UPDATE volunteer SET title = '" . $title . "', fname = '" . $fname . "', lname = '" . $lname . "', line1 = '" . $line1 . "', ";
$sql .= "line2 = '" . $line2 . "', city = '" . $city . "', postcode = '" . $postcode . "', ";
$sql .= "phoneNo = '" . $phone . "', email = '" . $email . "', dofb = '" . $dofb . "' ";
$sql .= "WHERE id = '" . $id . "';";


 //echo $sql;

//Update contact table with new values
$sql2 = "UPDATE contact SET cType = '" . $cType . "', cName = '" . $cName . "', phoneNo = '" . $cPhone . "', relationship = '" . $relationship . "' ";
$sql2 .= "WHERE id = '" . $id . "';";

$sql3 = "UPDATE volunteer SET archived = '" . $current_date . "' ";
$sql3 .= "WHERE id = '" . $id . "';";

if(!empty($_POST['title']) && !empty($_POST['firstname']) && !empty($_POST['lname'])) {	
		$result = mysqli_query($connection, $sql);
		$result2 = mysqli_query($connection, $sql2);
		header("Location: home.php");
	} else {
    if(empty($_POST['title'])) $errorTitle = true;
    if(empty($_POST['firstname'])) $errorFName = true;
    if(empty($_POST['lname'])) $errorLName = true;

//header("Location: home.php");
}
}

if(isset($_POST['Archive'])){
	if(!empty($_POST['title']) && !empty($_POST['firstname']) && !empty($_POST['lname'])) {	
		$sql3 = "UPDATE volunteer SET archived = '" . $currentDate . "' ";
		$sql3 .= "WHERE id = '" . $id . "';";
		$result3 = mysqli_query($connection, $sql3);
		header("Location: home.php");
	} else {
		if(empty($_POST['title'])) $errorTitle = true;
		if(empty($_POST['firstname'])) $errorFName = true;
		if(empty($_POST['lname'])) $errorLName = true;
}
}
$row = mysqli_fetch_assoc($query);
$id = $row['id'];

$row2 = mysqli_fetch_assoc($query2);
?>

<main class="container.fluid">
<div class="container.fluid hero-wrapper">
    <div class="row hero-container">
        <h1>Update Volunteer Details</h1>
    </div>
</div>

<div class="container">
<form class="volunteer-form" action="" method="post">
  <div class="form-row">
    <div class="form-group col-md-2">
      <label for="title">TITLE*</label>
      <input type="text" class="form-control  <?php if($errorTitle){echo 'is-invalid';}?>" name="title" id="title" placeholder="Title" value="<?php echo $row ['title']; ?>">
      <div class="invalid-feedback">
          Title required.
      </div>
    </div>
    <div class="form-group col-md-4">
      <label for="fname">FIRST NAME*</label>
      <input type="text" class="form-control <?php if($errorFName){echo 'is-invalid';}?>" name="firstname" id="fname" placeholder="First Name" value="<?php echo $row ['fname']; ?>">
      <div class="invalid-feedback">
          First name required.
      </div>
    </div>
    <div class="form-group col-md-6">
      <label for="lname">SURNAME*</label>
      <input type="text" class="form-control <?php if($errorLName){echo 'is-invalid';}?>" name="lname" id="lname" placeholder="Surname" value="<?php echo $row ['lname']; ?>">
      <div class="invalid-feedback">
          Last name required.
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="email">EMAIL</label>
      <input type="email" class="form-control" name="email" id="email" placeholder="Email address" value="<?php echo $row ['email']; ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="line1">ADDRESS LINE 1</label>
      <input type="text" class="form-control" name="line1" id="line1" placeholder="First line of address" value="<?php echo $row ['line1']; ?>">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="phoneNo">PHONE</label>
      <input type="text" class="form-control" name="phoneNo" id="phoneNo" placeholder="Phone number" value="<?php echo $row ['phone']; ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="line2">ADDRESS LINE 2</label>
      <input type="text" class="form-control" name="line2" id="line2" placeholder="Second line of address" value="<?php echo $row ['line2']; ?>">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="dofb">DATE OF BIRTH</label>
      <input type="date" class="form-control" name="dofb" id="dofb" placeholder="Date of birth" min="1900-01-01" max= <?php echo date('Y-m-d'); ?> value="<?php echo $row ['dofb']; ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="address3">CITY</label>
      <input type="text" class="form-control" name="address3" id="address3" placeholder="City" value="<?php echo $row ['city']; ?>">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6 offset-md-6">
      <label for="postcode">POSTCODE</label>
      <input type="text" class="form-control" name="postcode" id="postcode" placeholder="Postcode" value="<?php echo $row ['postcode']; ?>">
    </div>
  </div>
  <br>
  <label>EMERGENCY CONTACT</label>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="contactName">FULL NAME</label>
      <input type="text" class="form-control" name="contactName" id="contactName" placeholder="Full name" value="<?php echo $row2 ['cName']; ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="contactPhone">PHONE</label>
      <input type="text" class="form-control" name="contactPhone" id="contactPhone" placeholder="Phone Number" value="<?php echo $row2 ['cPhone']; ?>">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="contactRel">RELATIONSHIP</label>
      <input type="text" class="form-control" name="contactRel" id="contactRel" placeholder="Relationship to volunteer" value="<?php echo $row2 ['relationship']; ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="contactType">CONTACT TYPE</label>
      <select class="form-control" id="contactType" name="contactType">
		<option value="Support" <?php if(row2['cType']=="Support"){echo "selected";}?>>Support</option>
        <option value="Emergency" <?php if(row2['cType']=="Emergency"){echo "selected";}?>>Emergency</option>
      </select>
    </div>
  <div class="form-row">
    <div class="form-group col-md-6 offset-md-3 form-buttons">
		<!--<button type="submit" class="btn btn-primary disabled">Back</button>-->
		<!--<input type ="submit" name="cancel" class ="btn btn-primary" value="Back">-->
		<!--<button type="submit" class="btn btn-primary">Next</button>-->
		<input type = "hidden" name = "id" id="id" value = "<?php echo $id; ?>">
		<input type ="submit" name="Submit" class ="btn btn-primary" value="Edit Volunteer Details">
    </div>
	<div class="form-group col-md-6 offset-md-3 form-buttons">
		<!--<button type="submit" class="btn btn-primary disabled">Back</button>-->
		<!--<input type ="submit" name="cancel" class ="btn btn-primary" value="Back">-->
		<!--<button type="submit" class="btn btn-primary">Next</button>-->
		<input type = "hidden" name = "id" id="id" value = "<?php echo $id; ?>">
		<input type ="submit" name="Archive" class ="btn btn-primary" value="Archive Volunteer">
    </div>
  </div>
</form>
</div>
</main>
</body>
