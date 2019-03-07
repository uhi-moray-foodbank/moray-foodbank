<?php
require_once( 'DB_Connector.php' );

$error = "";
if ( isset( $_POST[ 'submit' ] ) ) {
	if ( empty( $_POST[ 'username' ] ) || empty( $_POST[ 'password' ] ) ) {
		$error = "You need to enter a Username & Password";
		echo $error;
	} else {
		$username = $_POST[ 'username' ];
		$password = $_POST[ 'password' ];
		$hash = password_hash( $password, PASSWORD_BCRYPT );
		echo "VARIABLES SENT ";
		
		echo " ";
		echo $username, $hash;

		//echo $hash;

		$sql = "INSERT admin ";
		$sql .= "(username, pass) ";
		$sql .= "VALUES (";
		$sql .= "'" . $username . "', ";
		$sql .= "'" . $hash . "'";
		$sql .= ");";
		$result = mysqli_query( $connection, $sql ); 

		echo "Testing result display";
		echo $result;
		if ( $result ) {
			echo "Account Created";
			header("Location: ../index.php" );
		} else {
			// INSERT failed
			echo "Account Creation Failed";
			exit;
		}
	}
}
?>