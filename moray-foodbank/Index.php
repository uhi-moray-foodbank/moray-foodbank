<?php
//Starting session, including the loginhash.php file
include("php/ADMLoginHash.php");
session_start();
?>
<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA_Compatible" content ="IE-Edge">
	<title>Moray Foodbank</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=550, initial-Scale=">
	
	
	</head>

<body>

<?php
	//Checking if session matches the username session
	if (isset($_SESSION['Username'])){
		//If session is a match, login page becomes a logout page
		echo '	<form action="Logout.php" method="post">
				<button type="submit" name="submit">Logout</button>
				</form>';
	}else{
		//If session does not match username session, login page functions normally
		//Sends the entered data to the loginhash.php file
		echo '<form action="ADMLoginHash.php" method="post">
				<table>
					<tr>
						<td>Please enter your admin login details below</td>
					</tr>
					<tr>
						<td>Username:</td>
						<td><input type="text" id="username" name="username">
						</td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="password" id="password" name="password">
						</td>
					</tr>
					<tr>
						<td><input type="submit" name="submit" value="Submit">
						</td>
						<td><?php echo $error; ?></td>
					</tr>
				</table>
			</form>';
	}
?>
	
</body>

</html>