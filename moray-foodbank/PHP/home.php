<?php
$title = "Home";
include("header.php");
?>

<main class="container.fluid">
<div class="container.fluid hero-wrapper">
    <div class="row hero-container">
        <h1>Home</h1>
    </div>
</div>

<div class="container main-wrapper">
    <div class="row">
        <div class="col col-12 col-sm-4 card" style="width: 18rem;">
            <img class="card-img-top" src="../IMAGES/icon-new-volunteer.png" alt="icon of simple forms">
            <div class="card-body">
                <!--h5 class="card-title">New Volunteer</h5-->
                <p class="card-text">Fill out the registration forms to register a new volunteer in the database.</p>
                <a href="register-a.php" class="btn btn-primary">Register</a>
            </div>
        </div>
        <div class="col col-12 col-sm-4 card" style="width: 18rem;">
            <img class="card-img-top" src="../IMAGES/icon-search.png" alt="icon of magnifying glass and... a barrel?">
            <div class="card-body">
                <!--h5 class="card-title">Search Database</h5-->
                <p class="card-text">View the database and search for volunteers</p>
                <a href="viewall.php" class="btn btn-primary">Search</a>
            </div>
        </div>
        <div class="col col-12 col-sm-4 card" style="width: 18rem;">
            <img class="card-img-top" src="../IMAGES/icon-reports.png" alt="icon of a printer">
            <div class="card-body">
                <!--h5 class="card-title">Print Forms & Reports</h5-->
                <p class="card-text">View different reports with the option of printing them.</p>
                <a href="reports.php" class="btn btn-primary">View</a>
            </div>
        </div>
    </div>
</div>
</main>		
</body>
</html>
