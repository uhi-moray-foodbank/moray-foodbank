
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
			echo "<table><th>Sorry, hours have already been added for that volunteer on that day.</th></table>";
		} else
		{
			// (1, 	'2019-03-08', 6);
			$query2 = "
				INSERT INTO hours (id, dayWorked, hoursWorked)
				VALUES ('".$vol."', '".$date."', '".$hours."');";
			if ($connection->query($query2) === FALSE) # $link may not be the correct variable
			{
				echo "<table><th>Failed to add hours.</th></table>";
			} 
			else
			{
				echo "<table><th>Hours Added.</th></table>";
			}
		}
} else
{
	?>
	<form name='addhours' action='' method='post'>
		<input type="hidden" id="vol" name="vol" value="<?php echo $id; ?>">
		<table>
			<tr>
				<th>Date</th>
				<th>Hours</th>
				<th></th>
			</tr>
			<tr>
				<td>
					<input name='date' type='date' min="2000-01-01" max="3000-12-31" value="<?php echo "20".date("y-m-d")?>";>
				</td>
				<td>
					<select id="hours" name="hours">
					   <option value = 1>One</option>
					   <option value = 2>Two</option>
					   <option value = 3>Three</option>
					   <option value = 4>Four</option>
					   <option value = 5>Five</option>
					   <option value = 6>Six</option>
					   <option value = 7>Seven</option>
					   <option value = 8>Eight</option>
					   <option value = 9>Nine</option>
					   <option value = 10>Ten</option>
					   <option value = 11>Eleven</option>
					   <option value = 12>Twelve</option>
					</select>
				</td>
				<td>
					<input type="submit">
				</td>
			</tr>
		</table>
	</form>
	<?php
}
?>