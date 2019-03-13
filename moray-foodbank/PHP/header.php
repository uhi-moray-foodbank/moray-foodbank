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
    <title>Moray Foodbank - <?php echo $title;?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="../CSS/bootstrap.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="../CSS/styles.css" />

    <!-- Javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../JS/bootstrap.bundle.js"></script>
    <script src="../JS/sidebar.js"></script>
	
</head>

<body>
    <div class="container.fluid header-wrapper">
        <div class="container header">
            <div class="row">
                <div class="col-4 header-menu">
                    <nav id="headerNav" class="header-nav">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <ul class="header-list">
                            <li><a href="register-a.php">NEW VOLUNTEER</a></li>
                            <li><a href="testall.php">VIEW ALL VOLUNTEERS</a></li>
                            <li><a href="logout.php">LOGOUT</a></li>
                        </ul>
                    </nav>

                    <!-- Menu button -->
                    <span onclick="openNav()">
                        <i class="fas fa-bars btn-menu"></i>
                    </span>
                </div>


                <div class="col-4 header-logo">
                    <a href="#"><img class="img-fluid" src="#" alt="Moray Foodbank logo"></a>
                </div>

                <div class="col-4 header-account">
                    <div class="dropdown" id="headerAccountMenu">
                        <button class="btn btn-login-menu dropdown-toggle" type="button" id="dropdownAccountMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            ADMIN
                            <i class="fas fa-user icon-login"></i>
                        </button>
                        <div class="dropdown-menu login-menu" aria-labelledby="dropdownAccountMenu">
                            <a href="logout.php" class="btn btn-danger" type="button">LOG OUT</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>