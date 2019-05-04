<?php
$title = "Search Database";
include("header.php");

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
		//echo $surname;
		$sql .=  " AND lname LIKE '%".$surname."%'";		
		$_SESSION['search_sur'] = $surname;
	}
	
	//Checks if user wants specified days to be available
	if(isset($_POST['monday'])){
		$sql .= "AND mon='1'";
		$_SESSION['search_mon'] = 1;
	} else if (empty($_POST['monday'])){
		$_SESSION['search_mon'] = 0;
	}
	if(isset($_POST['tuesday'])){
		$sql .= "AND tue='1'";
		$_SESSION['search_tue'] = 1;
	} else if (empty($_POST['tuesday'])){
		$_SESSION['search_tue'] = 0;
	}	
	if(isset($_POST['wednesday'])){
		$sql .= "AND wed='1'";
		$_SESSION['search_wed'] = 1;
	} else if (empty($_POST['wednesday'])){
		$_SESSION['search_wed'] = 0;
	}
	if(isset($_POST['thursday'])){
		$sql .= "AND thu='1'";
		$_SESSION['search_thu'] = 1;
	} else if (empty($_POST['thursday'])){
		$_SESSION['search_thu'] = 0;
	}
	if(isset($_POST['friday'])){
		$sql .= "AND fri='1'";
		$_SESSION['search_fri'] = 1;
	} else if (empty($_POST['friday'])){
		$_SESSION['search_fri'] = 0;
	}
	
	//Checks if user wants to see archived people as well
	if(isset($_POST['archived'])){
		$sql = substr_replace($sql,", archived ", 85, 0);
		$_SESSION['search_archive'] = 1;
	}else{
		$sql .= "AND archived IS NULL";
	}

	
}else if(isset($_POST['clear'])){
	unset($_SESSION['search_archive']);
	unset($_SESSION['search_fri']);
	unset($_SESSION['search_thu']);
	unset($_SESSION['search_wed']);
	unset($_SESSION['search_tue']);
	unset($_SESSION['search_mon']);
	unset($_SESSION['search_sur']);

}
//Close the sql statement and run the query
	$sql .= ";";
	$query = mysqli_query($connection, $sql);

?>

<main class="container.fluid">
<div class="container.fluid hero-wrapper">
    <div class="row hero-container">
        <h1>Testing</h1>
    </div>
</div>

<div class="container">
<!--The search inputs to specifiy the volunteers the user is looking for-->
<form method="post" class="volunteer-form">
	Surname: &nbsp; <input type = "text" name="surname"  value="<?php if(isset($_SESSION['search_sur'])){echo $_SESSION['search_sur'];}?>">
	<label>&nbsp;&nbsp; Days: </label>
	Mon <input type = "checkbox" name = "monday" <?php if((isset($_SESSION['search_mon'])) && $_SESSION['search_mon']==1){echo "checked";}?>>
	Tue	<input type = "checkbox" name = "tuesday" <?php if((isset($_SESSION['search_tue'])) && $_SESSION['search_tue']==1){echo "checked";}?>>
	Wed	<input type = "checkbox" name = "wednesday" <?php if((isset($_SESSION['search_wed'])) && $_SESSION['search_wed']==1){echo "checked";}?>>
	Thu	<input type = "checkbox" name = "thursday" <?php if((isset($_SESSION['search_thu'])) && $_SESSION['search_thu']==1){echo "checked";}?>>
	Fri	<input type = "checkbox" name = "friday" <?php if((isset($_SESSION['search_fri'])) && $_SESSION['search_fri']==1){echo "checked";}?>>
	
	<br>
	<input type ="submit" name="submit" class ="btn btn-primary" value="Search">
	<input type ="submit" name="clear" class ="btn btn-primary" value="Clear Filters">
	<input type = "checkbox" name = "archived" value = "archived"  <?php if((isset($_SESSION['search_archive'])) && $_SESSION['search_archive']==1){echo "checked";}?>> &nbsp;&nbsp;Include archived?

</form>
</div>

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
			
			if(isset($_POST['archived']) && isset($_SESSION['search_archive'])){
				$archived = $row['archived'];
			} else {
				$archived = "";
			}
			
			//Creates a string containing all the days a volunteer has available
			$days = "";
			if($mon ==1){
				$days .= "<div class='day-circle'>Mon</div>";
			}else{
				if($archived != ""){
					$days .= "<div class='day-circle day-circle-archived'>|</div>";
				}else{
					$days .= "<div class='day-circle day-circle-empty'>|</div>";
				}
			}
			if($tue ==1){
				$days .= "<div class='day-circle'>Tue</div>";
			}else{
				if($archived != ""){
					$days .= "<div class='day-circle day-circle-archived'>|</div>";
				}else{
					$days .= "<div class='day-circle day-circle-empty'>|</div>";
				}
			}
			if($wed ==1){
				$days .= "<div class='day-circle'>Wed</div>";
			}else{
				if($archived != ""){
					$days .= "<div class='day-circle day-circle-archived'>|</div>";
				}else{
					$days .= "<div class='day-circle day-circle-empty'>|</div>";
				}
			}
			if($thu ==1){
				$days .= "<div class='day-circle'>Thu</div>";
			}else{
				if($archived != ""){
					$days .= "<div class='day-circle day-circle-archived'>|</div>";
				}else{
					$days .= "<div class='day-circle day-circle-empty'>|</div>";
				}
			}
			if($fri ==1){
				$days .= "<div class='day-circle'>Fri</div>";
			}else{
				if($archived != ""){
					$days .= "<div class='day-circle day-circle-archived'>|</div>";
				}else{
					$days .= "<div class='day-circle day-circle-empty'>|</div>";
				}
			}
			
			if($saltire==NULL){
				$saltire = "N/A";
			}
			
			//Actually populates the table with the information taken or created from the database
			if($archived != ""){
				echo "<tr class='archived-row'>";
			} else {
				echo "<tr>";
			}
			echo '<td><a href="volunteer.php?volunteer=' . $row['id']. '">' .$fullname.'</a></td>';
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
</main>
</body>
</html>
