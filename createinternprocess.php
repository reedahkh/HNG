<?php
session_start();

//creates database connection
include("hngdbconnection.php");


// Selecting database from server

if (isset ($_POST ['submit']));

$Firstname = $_POST ['Firstname'];
$Middlename = $_POST ['Middlename'];
$Lastname = $_POST ['Lastname'];
$Gender = $_POST ['Gender'];
$DOB = $_POST ['DOB'];
$Phone = $_POST ['Phone'];
$Email = $_POST ['Email'];
$Home_Address = $_POST ['Home_Address'];


//Execute the query
mysqli_query ($connection, "INSERT INTO Interns (Firstname, Middlename, Lastname, Gender, DOB, Phone, Email, Home_Address) VALUES ( '$Firstname', '$Middlename', '$Lastname', '$Gender', '$DOB', '$Phone', '$Email', '$Home_Address')");
if(mysqli_affected_rows ($connection)>0){
	echo "<p> Record Added Successfully </p>";
}	
	else {echo "<p> Not Added </P>";
	echo mysqli_error($connect);
}

?>