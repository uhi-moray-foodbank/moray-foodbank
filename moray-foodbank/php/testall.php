<?php
session_start();

//Connects to database
require_once("DB_Connector.php");

if(!isset($_SESSION['Username'])){
	header("Location: ../index.php");
}

//The basic query for if no inputs are given to the search bar or checkboxes
$sql = "SELECT v.id, CONCAT(lname,', ',fname) AS 'fullname', mon, tue, wed, thu, fri, saltire FROM volunteer v, days d
WHERE v.id = d.id
AND archived IS NULL";

//Appends functionality to the end of the query based on what the user inputs
if(isset($_POST['submit'])){
	$sql = "SELECT v.id, CONCAT(lname,', ',fname) AS 'fullname', mon, tue, wed, thu, fri, saltire FROM volunteer v, days d WHERE v.id = d.id";
	
	//Checks if anyone has a name similar or matching the one inputted
	if(isset($_POST['surname'])){
		$surname = $_POST['surname'];
		echo $surname;
		$sql .=  " AND lname LIKE '%".$surname."%'";		
	}
	
	//Checks if user wants specified days to be available
	if(isset($_POST['monday'])){
		$sql .= "AND mon='1'";
	}
	if(isset($_POST['tuesday'])){
		$sql .= "AND tue='1'";
	}	
	if(isset($_POST['wednesday'])){
		$sql .= "AND wed='1'";
	}
	if(isset($_POST['thursday'])){
		$sql .= "AND thu='1'";
	}
	if(isset($_POST['friday'])){
		$sql .= "AND fri='1'";
	}
	
	//Checks if user wants to see archived people as well
	if(isset($_POST['archived'])){
		$sql = substr_replace($sql,", archived ", 85, 0);
	}else{
		$sql .= "AND archived IS NULL";
	}
}

//Close the sql statement and run the query
$sql .= ";";
$query = mysqli_query($connection, $sql);

?>
<!doctype html>
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
<div class="container.fluid hero-wrapper">
    <div class="row hero-container">
        <h1>Testing</h1>
		<p><a href="logout.php">Logout</a></p>
    </div>
</div>


<!--The search inputs to specifiy the volunteers the user is looking for-->
<form method="post" class="volunteer-form">
	Surname: <input type = "text" name="surname">
	Mon <input type = "checkbox" name = "monday">
	Tue	<input type = "checkbox" name = "tuesday">
	Wed	<input type = "checkbox" name = "wednesday">
	Thu	<input type = "checkbox" name = "thursday">
	Fri	<input type = "checkbox" name = "friday">
	
	<br>
	<input type ="submit" name="submit" class ="btn btn-primary" value="Search">
	<input type = "checkbox" name = "archived" value = "archived">Include archived?

</form>

<table align="center" border="1">
    <tr>
    	<th>Name</th>
		<th>Available</th>
		<th>Saltire Award</th>
		<?php
			//Adds extra column if user wants to see archived entries
			if(isset($_POST['archived'])){
				echo "<th>Archived</th>";
			}
		?>
	</tr>
	<?php
	
		//Runs through every row returned by sql query and inserts it into a table
		while($row = mysqli_fetch_assoc($query)){
			//Sets retrieved values to variables to be used
			$id = $row['id'];
			$fullname = $row['fullname'];
			$mon = $row['mon'];
			$tue = $row['tue'];
			$wed = $row['wed'];
			$thu = $row['thu'];
			$fri = $row['fri'];
			$saltire = $row['saltire'];
			
			if(isset($_POST['archived'])){
				$archived = $row['archived'];
			}
			
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
			
			if($saltire==NULL){
				$saltire = "N/A";
			}
			
			//Actually populates the table with the information taken or created from the database
			echo "<tr>";
			echo "<td>" .$fullname. "</td>";
			echo "<td>" . $days . "</td>";
			echo "<td>" . $saltire . "</td>";
			//Populates extra column if user wants to see archived entries.
			if(isset($_POST['archived'])){
				echo "<td>" . $archived ."</td>";
				
			}
			echo "</tr>";
			
		}
	?>
       
</table>	



</body>
</html>