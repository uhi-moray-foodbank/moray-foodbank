<?php
//Starting session, including the AMDLoginhash.php file to login with.
include("PHP/ADMLoginHash.php");

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
    <link rel="stylesheet" type="text/css" media="screen" href="CSS/bootstrap.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="CSS/styles.css" />

    <!-- Javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="JS/bootstrap.bundle.js"></script>
    <script src="JS/sidebar.js"></script>	
</head>

<body>

<div class="container.fluid header-wrapper">
	<div class="container header">
		<div class="row">
			<div class="col-12 header-logo">
				<a href="#"><img class="img-fluid" src="IMAGES/moray-foodbank-logo.png" alt="Moray Foodbank logo"></a>
			</div>
		</div>
	</div>
</div>

<main class="container.fluid">
<div class="container.fluid hero-wrapper">
    <div class="row hero-container">
        <h1>Login</h1>
    </div>
</div>

<div class="container">
<?php
	//Checking if session matches the username session, redirects to home if logged in.
	if (isset($_SESSION['Username'])){
		header("Location: PHP/home.php");
	}else{
		//If session does not match username session, login page functions normally
		//Sends the entered data to the ADMLoginHash.php file
		echo '<form action="" method="post" class="login-form">
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
	echo $error;
?>
</div>
</main>
</body>
</html>
