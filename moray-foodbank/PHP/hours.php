
<?php
// add hours to database
if (!empty($_POST['hours']))
{
	$vol = $_POST['vol'];
	$date = $_POST['date'];
	$hours = $_POST['hours'];
	
	// check to see if hours have already been added for that day.
	$query1 = '
		SELECT * from hours
		WHERE id = '.$vol.' AND dayWorked = "'.$date.'";';
		$result1 = mysqli_query($connection, $query1); # $link may not be the correct variable
		$num_results1 = mysqli_num_rows($result1);
		if ($num_results1 != 0)
		{
			$result ="Sorry, hours have already been added for that volunteer on that day.";
		} else
		{
			// (1, 	'2019-03-08', 6);
			$query2 = "
				INSERT INTO hours (id, dayWorked, hoursWorked)
				VALUES ('".$vol."', '".$date."', '".$hours."');";
			if ($connection->query($query2) === FALSE) # $link may not be the correct variable
			{
				$result ="Failed to add hours.";
			} 
			else
			{
				$result ="Hours added.";
			}
		}
}
?>