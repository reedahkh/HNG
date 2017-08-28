<?php
$servername= "localhost";
$username= "root";
$password= ""; 
$database = "hng";
#start a new connection
$connection= new mysqli ($servername, $username, $password, $database); 

#test connection
if($connection ->connect_error)
{
	die ("connection failed" . $connection ->connect_error);
}
#echo "Successfully connected to your Database";


$sql = "select * from interns";
$result = mysqli_query ($connection, $sql);

?>
