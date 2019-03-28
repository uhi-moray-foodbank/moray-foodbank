<?php
$title = "View Volunteer";
include("header.php");

//Connects to database
require_once("DB_Connector.php");

if(isset($_GET['volunteer'])){
	$id=$_GET['volunteer'];
	
	$sql = "SELECT * FROM volunteer WHERE id = '".$id."';";
	
	$query = mysqli_query($connection, $sql);
	
	$row = mysqli_fetch_assoc($query);
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

<p><?php echo $row['title']." ".$row['fname']." ".$row['lname']; ?></p>
<table>

		<tr><th>Address</th><td><?php echo $row['line1'].", ".$row['line2'].", ".$row['city'];?></td></tr>
		<tr><th>Postcode</th><td><?php echo $row['postcode']; ?></td></tr>
		<tr><th>Phone Number</th><td><?php echo $row['phoneNo']; ?></td></tr>
		<tr><th>Email</th><td><?php echo $row['email']; ?></td></tr>
		<tr><th>Date of Birth</th><td><?php echo $row['dofb']; ?></td></tr>
		<tr><th>Start Date</th><td><?php echo $row['startdate']; ?></td></tr>

</table>

</main>
</body>
</html>
