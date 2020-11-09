<?php 
// This demostrates the five fundamental steps of database interaction using PHP


//Credentials

$dbhost = 'localhost';
$dbuser = 'webuser';
$dbpass = '';
$dbname = 'globe_bank';


// Create a database connection

$connection = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
// Perform a database querry
// use returned querry
// Release returned data
// Close the connection


mysqli_close($connection);
?>