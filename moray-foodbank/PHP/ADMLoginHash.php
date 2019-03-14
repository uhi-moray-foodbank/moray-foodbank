<?php
//Requires the db_connection.php file to connect to the database
require_once( 'DB_Connector.php' );
//Starts the session
session_start();


if ( isset( $_POST[ 'submit' ] ) ) {
	//If there was a submit posted, set the username and password in the database to equal the username and password variables
	$username = $_POST[ 'username' ];
	$password = $_POST[ 'password' ];
	echo $username . "<br />";
	echo $password;

	$query = mysqli_query( $connection, "SELECT * FROM admin WHERE username = '$username'" ); 
	$rows = mysqli_fetch_assoc($query);
	$row = mysqli_num_rows($query);
	if(password_verify($password, $rows['pass']) && $row == 1){
		$test =$rows['username'];
		$testing = $rows['id'];
		$_SESSION['Username'] = $test ;
		$_SESSION['ID'] = $testing;
		header("Location: home.php");
	}else{
		echo "Invalid entry";
	}
}
?>
