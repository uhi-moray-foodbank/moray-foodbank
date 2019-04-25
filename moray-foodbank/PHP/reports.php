<?php
$title = "Create Reports";
include("header.php");

//Get hours function
if(isset($_POST['gethours'])){
	//Retrieves the current date and checks all records in the databases since a month before that
	$getlastmonth = mktime(0, 0, 0, date("m")-1, date("d"),   date("Y"));
	$lastmonth = date("Y-m-d", $getlastmonth);

	$currentdate = date("Y-m-d");
	if(isset($_POST['saltire'])){
		$sql = "SELECT v.id, CONCAT(lname, ', ',fname) AS fullname, dayWorked, hoursWorked, saltire FROM volunteer v, hours h WHERE v.id = h.id AND dayWorked < ".$lastmonth."AND archived IS NULL ORDER BY dayWorked DESC;";
	}else{
		$sql = "SELECT v.id, CONCAT(lname, ', ',fname) AS fullname, dayWorked, hoursWorked FROM volunteer v, hours h WHERE v.id = h.id AND dayWorked < ".$lastmonth." AND archived IS NULL ORDER BY dayWorked DESC;";
	}

}

//Get days function to see when a volunteer is free
if(isset($_POST['getdays'])){
	$sql = "SELECT v.id, CONCAT(lname,', ',fname) AS 'fullname', mon, tue, wed, thu, fri FROM volunteer v, days d WHERE v.id = d.id AND archived IS NULL ";
	
	if(isset($_POST['monday'])){
		$sql .= "AND mon=1";
	}
	if(isset($_POST['tuesday'])){
		$sql .= "AND tue=1";
	}	
	if(isset($_POST['wednesday'])){
		$sql .= "AND wed=1";
	}
	if(isset($_POST['thursday'])){
		$sql .= "AND thu=1";
	}
	if(isset($_POST['friday'])){
		$sql .= "AND fri=1";
	}
	$sql .= ";";
	
}

$query = mysqli_query($connection, $sql);

?>

<main class="container.fluid">
<div class="container.fluid hero-wrapper">
    <div class="row hero-container">
        <h1>Reports</h1>
    </div>
</div>

<div class="container">
<form method="post" class="volunteer-form">
	<h2>Hours </h2>	
	Include saltire? <input type = "checkbox" name = "saltire" value = "saltire">
	<input type ="submit" name="gethours" class ="btn btn-primary" value="Get Hours">
</form>
<form method="post" class="volunteer-form">
	<h2>Days </h2>	
	Mon <input type = "checkbox" name = "monday">
	Tue	<input type = "checkbox" name = "tuesday">
	Wed	<input type = "checkbox" name = "wednesday">
	Thu	<input type = "checkbox" name = "thursday">
	Fri	<input type = "checkbox" name = "friday">
	<input type ="submit" name="getdays" class ="btn btn-primary" value="Get Days">
</form>

<?php 
if(isset($_POST['gethours'])){
echo '<table align="center" border="1">
    <tr>
    	<th>Name</th>
		<th>Day Worked</th>
		<th>Hours Worked</th>';
			//Adds extra column if user wants to see saltire entries
			if(isset($_POST['saltire'])){
				echo "<th>Saltire</th>";
			}
		
echo '</tr>';
	
	
		//Runs through every row returned by sql query and inserts it into a table
		while($row = mysqli_fetch_assoc($query)){
			//Sets retrieved values to variables to be used
			$id = $row['id'];
			$fullname = $row['fullname'];
			$day = $row['dayWorked'];
			$hour = $row['hoursWorked'];
					
			if($saltire==NULL){
				$saltire = "No";
			}else{
				$saltire = "Yes";
			}
			
			//Actually populates the table with the information taken or created from the database
			echo "<tr>";
			echo '<td><a href="volunteer.php?volunteer=' . $row['id']. '">' .$fullname.'</a></td>';
			echo "<td>" . $day . "</td>";
			echo "<td>" . $hours . "</td>";

			//Populates extra column if user wants to see entries with saltire award.
			if(isset($_POST['saltire'])){
				echo "<td>" . $saltire ."</td>";
				
			}
			echo "</tr>";
			
		}
	
	echo "</table>";
}

if(isset($_POST['getdays'])){
	echo '<table align="center" border="1">
		<tr>
			<th>Name</th>
			<th>Available</th>
		</tr>';
	while($row = mysqli_fetch_assoc($query)){
			//Sets retrieved values to variables to be used
			$id = $row['id'];
			$fullname = $row['fullname'];
			
			$mon = $row['mon'];
			$tue = $row['tue'];
			$wed = $row['wed'];
			$thu = $row['thu'];
			$fri = $row['fri'];
			
			//Creates a string containing all the days a volunteer has available
			$days = "";
			if($mon ==1){
				$days .= "M ";
			}
			if($tue ==1){
				$days .= "T ";
			}
			if($wed ==1){
				$days .= "W ";
			}
			if($thu ==1){
				$days .= "Th ";
			}
			if($fri ==1){
				$days .= "F ";
			}
			
			
			//Actually populates the table with the information taken or created from the database
			echo "<tr>";
			echo '<td><a href="volunteer.php?volunteer=' . $row['id']. '">' .$fullname.'</a></td>';
			echo "<td>" . $days . "</td>";
			echo "</tr>";
		}
	echo "</table>";		
}
?>

</div>
</main>
</body>
</html>
