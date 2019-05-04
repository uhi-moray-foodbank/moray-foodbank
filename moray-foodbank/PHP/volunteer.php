<?php
$title = "View Volunteer";
include("header.php");

if(isset($_GET['volunteer'])){
	$id=$_GET['volunteer'];
	
	//Initial volunteer details
	$sql = "SELECT * FROM volunteer WHERE id = '".$id."';";
	$query = mysqli_query($connection, $sql);
	$row = mysqli_fetch_assoc($query);	
	
	//Contact details
	$contact_sql = "SELECT * FROM contact WHERE id = '".$id."';";
	$contact_query = mysqli_query($connection, $contact_sql);
	$contact_num = mysqli_num_rows($contact_query);
	
	//Reference details
	$reference_sql = "SELECT * FROM reference WHERE id = '".$id."';";
	$reference_query = mysqli_query($connection, $reference_sql);
	$reference_num = mysqli_num_rows($reference_query);
	
	//Days details
	$days_sql = "SELECT * FROM days WHERE id = '".$id."';";
	$days_query = mysqli_query($connection, $days_sql);
	$days_row = mysqli_fetch_assoc($days_query);
	
	//Hours
	$hours_sql = "SELECT sum(hoursWorked) as 'TotalHours' FROM hours WHERE id = '".$id."' GROUP BY id";
	$hours_query = mysqli_query($connection, $hours_sql);
	$hours_row = mysqli_fetch_assoc($hours_query);
	
	//Roles
	$roles_sql = "SELECT * FROM roles WHERE id = '".$id."';";
	$roles_query = mysqli_query($connection, $roles_sql);
	$roles_row = mysqli_fetch_assoc($roles_query);

	//Target Groups
	$target_sql = "SELECT * FROM targetGroups WHERE id = '".$id."';";
	$target_query = mysqli_query($connection, $target_sql);
	$target_row = mysqli_fetch_assoc($target_query);	

	//Record Card
	$record_sql = "SELECT * FROM recordCard WHERE id = '".$id."';";
	$record_query = mysqli_query($connection, $record_sql);
	$record_row = mysqli_fetch_assoc($record_query);
	
}else{
	Header("Location: testall.php");
}
?>

<main class="container.fluid">
<div class="container.fluid hero-wrapper">
    <div class="row hero-container">
        <h1>View Volunteer</h1>
    </div>
</div>

<div class="container">
<form class="volunteer-details" action="" method="post">
	<p><?php if($row['archived']==null){echo $row['archived'];} ?></p>
	<h2><?php echo $row['title']." ".$row['fname']." ".$row['lname']; ?></h2>
	<table class="volunteer-details">

		<tr><th>Address</th><td><?php echo $row['line1'].", ".$row['line2'].", ".$row['city'];?></td></tr>
		<tr><th>Postcode</th><td><?php echo $row['postcode']; ?></td></tr>
		<tr><th>Phone Number</th><td><?php echo $row['phoneNo']; ?></td></tr>
		<tr><th>Email</th><td><?php echo $row['email']; ?></td></tr>
		<tr><th>Date of Birth</th><td><?php echo $row['dofb']; ?></td></tr>
		<tr><th>Start Date</th><td><?php echo $row['startdate']; ?></td></tr>
		<tr><th>Saltire Award</th><td><?php if($row['saltire']=='1'){echo "Yes";}else{echo "No";}?></td></tr>

	</table>
	<br>
	<?php 		
		//Contacts
		if($contact_num>0){
			echo "<h2> Contacts </h2>";
			echo "<table><tr><th>Contact Type</th><th>Contact Name</th><th>Contact Number</th><th>Contact Relationship</th></tr>";
			
			while($contact_row = mysqli_fetch_assoc($contact_query)){
				echo "<tr>";
				echo "<td>".$contact_row['cType']."</td>";
				echo "<td>".$contact_row['cName']."</td>";
				echo "<td>".$contact_row['phoneNo']."</td>";
				echo "<td>".$contact_row['relationship']."</td>";
				echo "</tr>";
			}
			echo "</table>";
		}else{
			echo "<h2>No Contacts</h2>";
		}
		
		echo "<br>";
		
		//References
		if($reference_num >0){
			echo "<h2> References </h2>";
			echo "<table><tr><th>Reference Name</th><th>Reference Email</th><th>Reference Phone</th><th>Reference Relationship</th></tr>";
			
			while($reference_row = mysqli_fetch_assoc($reference_query)){
				echo "<tr>";
				echo "<td>".$reference_row['refName']."</td>";
				echo "<td>".$reference_row['refEmail']."</td>";
				echo "<td>".$reference_row['refTel']."</td>";
				echo "<td>".$reference_row['refRelation']."</td>";
				echo "</tr>";
			}
			echo "</table>";
		}else{	
			echo "<h2>No References</h2>";
		}
		
		echo "<br>";
		
		//Days
		$days = "";
		if($days_row['mon'] ==1){
			$days .= "|Monday|";
		}
		if($days_row['tue'] ==1){
			$days .= "|Tuesday|";
		}
		if($days_row['wed'] ==1){
			$days .= "|Wednesday|";
		}
		if($days_row['thu'] ==1){
			$days .= "|Thursday|";
		}
		if($days_row['fri'] ==1){
			$days .= "|Friday|";
		}
				
		echo "<h2> Days Available: </h2>";
		echo "<p>".$days."</p>";
		
		echo "<br>";
		
		//Hours
		echo "<h2>Total Hours Worked: ".$hours_row['TotalHours'] ."</h2>";
		
		echo "<br>";
		
		//Roles
		$roles = "";
		if($roles_row['foodbankCentre'] ==1){
			$roles .= "|Foodbank Centre|";
		}
		if($roles_row['promoEvents'] ==1){
			$roles .= "|Promotional Events|";
		}
		if($roles_row['collections'] ==1){
			$roles .= "|Collections|";
		}
		if($roles_row['fundraising'] ==1){
			$roles .= "|Fundraising|";
		}
		if($roles_row['buddyScheme'] ==1){
			$roles .= "|Buddy Scheme|";
		}
		if($roles_row['delivery'] ==1){
			$roles .= "|Delivery|";
		}
		if($roles_row['Drivers'] ==1){
			$roles .= "|Drivers|";
		}
		if($roles_row['cooking'] ==1){
			$roles .= "|Cooking|";
		}
		if($roles_row['store'] ==1){
			$roles .= "|Store|";
		}
		if($roles_row['adhoc'] ==1){
			$roles .= "|Adhoc|";
		}
		if($roles_row['external'] ==1){
			$roles .= "|External|";
		}
		
		echo "<h2> Roles: </h2>";
		echo "<p>".$roles."</p>";
		echo "<br>";
		
		//Target Groups
		$target = "";
		if($target_row['lowIncome'] ==1){
			$target .= "|Low Income|";
		}
		if($target_row['mentalHealth'] ==1){
			$target .= "|Mental Health|";
		}
		if($target_row['disabilityPhysical'] ==1){
			$target .= "|Physical Disability|";
		}
		if($target_row['chronicCondition'] ==1){
			$target .= "|Chronic Condition|";
		}
		if($target_row['carers'] ==1){
			$target .= "|Carer|";
		}
		if($target_row['abused'] ==1){
			$target .= "|Abused|";
		}
		if($target_row['lgbti'] ==1){
			$target .= "|LGBTI|";
		}
		if($target_row['offenders'] ==1){
			$target .= "|Offender|";
		}
		if($target_row['youngRisk'] ==1){
			$target .= "|Young Risk|";
		}
		if($target_row['homeless'] ==1){
			$target .= "|Homeless|";
		}
		if($target_row['addiction'] ==1){
			$target .= "|Addiction|";
		}
		if($target_row['singleParent'] ==1){
			$target .= "|Single Parent|";
		}
		if($target_row['ethnicMinority'] ==1){
			$target .= "|Ethnic Minority|";
		}
		
		echo "<h2> Target Groups: </h2>";
		echo "<p>".$target."</p>";
		
		echo "<br>";
		
		//Record Card
		echo "<h2>Health Issues: </h2>";
		echo "<p>".$record_row['healthIssues']."</p>";
		
		echo "<h2>PD Request: </h2>";
		echo "<p>".$record_row['pdRequest']."</p>";
		
		echo "<h2>Other Information: </h2>";
		echo "<p>".$record_row['otherInfo']."</p>";
		
		echo "<h2>PVG Check: </h2>";
		echo "<p>".$record_row['pvg']."</p>";

		$confAgree = $record_row['confAgree'];
		$hsSigned = $record_row['hsSigned'];

		
		echo "<h2>Confidentiality Agreement Signed: </h2>";
		if($confAgree = 1){
			echo "<p>Yes</p>";
		}else{
			echo "<p>No</p>";
		}
		echo "<h2>H&S checklist complete: </h2>";
		if($hsSigned = 1){
			echo "<p>Yes</p>";
		}else{
			echo "<p>No</p>";
		}
		
		
		
		
	?>

</form>
	<form method = "post" action = "editAccount.php">
	<div class="form-row">
    <div class="form-group col-md-6 offset-md-3 form-buttons">
      <input type ="submit" name="edit" class ="btn btn-primary" value="Edit Details">
	  <input type = "hidden" name = "id" id="id" value = "<?php echo $id; ?>">
	  <input type = "hidden" name = "fname" id="fname" value = "<?php echo $fname; ?>">
	  <input type = "hidden" name = "lname" id="lname" value = "<?php echo $lname; ?>">
	  <input type = "hidden" name = "line1" id="line1" value = "<?php echo $line1; ?>">
	  <input type = "hidden" name = "line2" id="line2" value = "<?php echo $line2; ?>">
	  <input type = "hidden" name = "city" id="city" value = "<?php echo $city; ?>">
	  <input type = "hidden" name = "postcode" id="postcode" value = "<?php echo $postcode; ?>">
	  <input type = "hidden" name = "phoneNo" id="phoneNo" value = "<?php echo $phoneNo; ?>">
	  <input type = "hidden" name = "email" id="email" value = "<?php echo $email; ?>">
	  <input type = "hidden" name = "dofb" id="dofb" value = "<?php echo $dofb; ?>">
	  <input type = "hidden" name = "contactType" id="contactType" value = "<?php echo $cType; ?>">
	  <input type = "hidden" name = "contactName" id="contactName" value = "<?php echo $cName; ?>">
	  <input type = "hidden" name = "relationship" id="contactRel" value = "<?php echo $relationship; ?>">
    </div>
  </div>
  </form>
</div>
</main>
</body>
</html>
