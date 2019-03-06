<?php
session_start();

//Checks if user is logged in. If they are not, redirect them to the login page.
if(!isset($_SESSION['Username'])){
	header("Location: ../index.php");
}

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
        <h1>Home</h1>
		<p><a href="logout.php">Logout</a></p>

    </div>
</div>

<p><a href="register-a.php">Begin Registration Here</a></p>
<p><a href="testall.php">View all volunteers</a></p>
		
</body>
</html>