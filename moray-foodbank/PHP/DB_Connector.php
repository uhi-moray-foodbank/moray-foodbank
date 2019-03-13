<?php 

//Creates a connection to the database
$dbhost = 'comp-hons.uhi.ac.uk';
$dbuser = 'mo14012559';
$dbpass = 'mo14012559';
$dbname = 'mo14012559';

$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if(mysqli_connect_errno()){
	$msg = "Database connection failed ";
	$msg .= mysqli_connect_errno();
	$msg .= " (" . mysqli_connect_errno() . ")";
	exit($msg);
}
else {
	$msg = "Connection successfull.";
}
?>
