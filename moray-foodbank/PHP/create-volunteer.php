<?php
$title = "Registration - Final";
include("header.php");
require_once('DB_Connector.php');

$tempUsername = $_SESSION['Username'];

//Volunteer table
$currentDate = date('Y')."-".date('m')."-".date('d');

$sql = "INSERT INTO volunteer (title, fname, lname, line1, line2, city, postcode, phoneNo, email, dofb, startdate, saltire) VALUES (";
$sql .= "'" . $_SESSION['title'] . "', ";
$sql .= "'" . $_SESSION['fname'] . "', ";
$sql .= "'" . $_SESSION['lname'] . "', ";
$sql .= "'" . $_SESSION['line1'] . "', ";
$sql .= "'" . $_SESSION['line2'] . "', ";
$sql .= "'" . $_SESSION['city'] . "', ";
$sql .= "'" . $_SESSION['postcode'] . "',";
$sql .= "'" . $_SESSION['phoneNo'] . "', ";
$sql .= "'" . $_SESSION['email'] . "',";
$sql .= "'" . $_SESSION['dofb'] . "', ";
$sql .= "'" . $currentDate . "',";
$sql .= "'" . "0" . "');";

$result = mysqli_query($connection, $sql);

//Get the new volunteer's id to use in other queries
$query = mysqli_query($connection, "SELECT id FROM volunteer WHERE fname='".$_SESSION['fname'] ."' AND lname = '".$_SESSION['lname']."'AND email = '".$_SESSION['email']."' AND startdate = '".$currentDate."';");

$row = mysqli_fetch_assoc($query);
$id = $row['id'];

//Reference table 1
$sql = "INSERT INTO reference (id, refNo, refName, refEmail, refTel, refRel) VALUES (";
$sql .= "'" . $id . "', ";
$sql .= "'" . "1" . "', ";
$sql .= "'" . $_SESSION['refName1'] . "', ";
$sql .= "'" . $_SESSION['refEmail1'] . "', ";
$sql .= "'" . $_SESSION['refTel1'] . "', ";
$sql .= "'" . $_SESSION['refRel1'] . "'); ";

$result = mysqli_query($connection, $sql);


//Reference table 2
$sql = "INSERT INTO reference (id, refNo, refName, refEmail, refTel, refRel) VALUES (";
$sql .= "'" . $id . "', ";
$sql .= "'" . "1" . "', ";
$sql .= "'" . $_SESSION['refName2'] . "', ";
$sql .= "'" . $_SESSION['refEmail2'] . "', ";
$sql .= "'" . $_SESSION['refTel2'] . "', ";
$sql .= "'" . $_SESSION['refRel2'] . "'); ";

$result = mysqli_query($connection, $sql);

//Days table
$sql = "INSERT INTO reference (id, mon, tue, wed, thu, fri) VALUES (";
$sql .= "'" . $id . "', ";
$sql .= "'" . $_SESSION['mon'] . "', ";
$sql .= "'" . $_SESSION['tue'] . "', ";
$sql .= "'" . $_SESSION['wed'] . "', ";
$sql .= "'" . $_SESSION['thu'] . "', ";
$sql .= "'" . $_SESSION['fri'] . "'); ";

$result = mysqli_query($connection, $sql);

//Contact table
$sql = "INSERT INTO contact (id, cType, cName, phoneNo, relationship) VALUES (";
$sql .= "'" . $id . "', ";
$sql .= "'" . $_SESSION['cType'] . "', ";
$sql .= "'" . $_SESSION['cName'] . "', ";
$sql .= "'" . $_SESSION['cPhone'] . "', ";
$sql .= "'" . $_SESSION['relationship'] . "'); ";

$result = mysqli_query($connection, $sql);


//RecordCard table
$sql = "INSERT INTO recordCard (id, healthIssues, pdRequest, otherInfo, pvg, confAgree, hsSigned) VALUES (";
$sql .= "'" . $id . "', ";
$sql .= "'" . $_SESSION['healthIssues'] . "', ";
$sql .= "'" . $_SESSION['pdRequest'] . "', ";
$sql .= "'" . $_SESSION['otherInfo'] . "', ";
$sql .= "'" . $_SESSION['pvg'] . "', ";
$sql .= "'" . $_SESSION['confAgree'] . "', ";
$sql .= "'" . $_SESSION['hsSigned'] . "');";

$result = mysqli_query($connection, $sql);

// remove all session variables
session_unset();

// destroy the session
session_destroy();

$_SESSION['Username'] = $tempUsername;

header("location: home.php");
?>
