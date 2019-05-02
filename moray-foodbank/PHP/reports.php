<?php
$title = "Create Reports";
include("header.php");

//Get hours function
if(isset($_POST['report'])){
	//Retrieves the current date and checks all records in the databases since a month before that
	$getlastmonth = mktime(0, 0, 0, date("m")-1, date("d"),   date("Y"));
	$lastmonth = date("Y-m-d", $getlastmonth);

	$start = $_POST['startDate'];
	$end = $_POST['endDate'];
	
	$sql1 = "SELECT sum(hoursWorked) as 'Total' FROM targetGroups t, hours h WHERE t.id = h.id AND groups IS NOT NULL AND dayWorked BETWEEN '$start' AND '$end';";
	$sql2 = "SELECT sum(hoursWorked) as 'Total' FROM targetGroups t, hours h WHERE t.id = h.id AND groups IS NULL AND dayWorked BETWEEN '$start' AND '$end';";
	
	$query1 = mysqli_query($connection, $sql1);
$query2 = mysqli_query($connection, $sql2);

$result1 = mysqli_fetch_assoc['$query1'];
$result2 = mysqli_fetch_assoc['$query2'];
	
}




?>

<main class="container.fluid">
<div class="container.fluid hero-wrapper">
    <div class="row hero-container">
        <h1>Reports</h1>
    </div>
</div>

<div class="container">
<form method="post" class="volunteer-form">
	<h2>Report </h2>	
	From <input type = "date" name = "startDate" id="startDate">
	To <input type ="date" name="endDate" id ="endDate">
	<input type ="submit" name="report" class ="btn btn-primary" value="Generate Report">
</form>


<?php 
if(isset($_POST['report'])){
	echo "<h2>Target Groups Hours: ".$result1['Total']."</h2>";
	echo "<h2>Non-Target Groups Hours: ".$result2['Total']."</h2>";
	
}
?>

</div>
</main>
</body>
</html>
