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
<!-- TODO: replace the placeholder images with the correct icons -->
    <div class="row">
        <div class="col col-12 col-sm-4 card" style="width: 18rem;">
            <img class="card-img-top" src="../IMAGES/moray-foodbank-logo.png" alt="icon of simple forms">
            <div class="card-body">
                <h5 class="card-title">New Volunteer</h5>
                <p class="card-text">Fill out the registration forms to register a new volunteer in the database.</p>
                <a href="register-a.php" class="btn btn-primary">Register</a>
            </div>
        </div>
        <div class="col col-12 col-sm-4 card" style="width: 18rem;">
            <img class="card-img-top" src="../IMAGES/moray-foodbank-logo.png" alt="icon of magnifying glass and... a barrel?">
            <div class="card-body">
                <h5 class="card-title">Search Database</h5>
                <p class="card-text">View the database and search for volunteers</p>
                <a href="testall.php" class="btn btn-primary">Search</a>
            </div>
        </div>
        <div class="col col-12 col-sm-4 card" style="width: 18rem;">
            <img class="card-img-top" src="../IMAGES/moray-foodbank-logo.png" alt="icon of a printer">
            <div class="card-body">
                <h5 class="card-title">Print Forms & Reports</h5>
                <p class="card-text">View different reports with the option of printing them.</p>
                <a href="#" class="btn btn-primary">View</a>
            </div>
        </div>
    </div>
</div>

<!-- TODO: temporary navigation - to be removed once these pages have a purpose -->
<div class="container">
    <p><strong>Temporary Navigation - remove later</strong></p>
    <p><a href="starting-checklist.php">Starting checklist</a></p>
</div>
<!-- END OF TEMP SECTION -->
</main>		
</body>
</html>
