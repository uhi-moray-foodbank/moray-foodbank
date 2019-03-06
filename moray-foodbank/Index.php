<?php
//Starting session, including the AMDLoginhash.php file to login with.
include("PHP/ADMLoginHash.php");
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
	
	<!-- CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="CSS/bootstrap.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="CSS/styles.css" />	
</head>

<body>
<div class="container.fluid hero-wrapper">
    <div class="row hero-container">
        <h1>Login</h1>
    </div>
</div>

<?php
	//Checking if session matches the username session, redirects to home if logged in.
	if (isset($_SESSION['Username'])){
		header("Location: PHP/home.php");
	}else{
		//If session does not match username session, login page functions normally
		//Sends the entered data to the ADMLoginHash.php file
		echo '<form action="" method="post">
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