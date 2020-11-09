<?php 
// This demostrates the five fundamental steps of database interaction using PHP


//Credentials

$dbhost = 'localhost';
$dbuser = 'webuser';
$dbpass = '';
$dbname = 'globe_bank';


// Create a database connection

$connection = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);


// Test if connection succeeded
if(mysqli_connect_errno()){
    $msg = "Database connection faile: ";
    $msg .= mysqli_connect_error();
    $msg .= "(" . mysqli_connect_errno() . ")";
    exit($msg);
}


// Perform a database querry
$query = "select * from subjects";
$result_set = mysqli_query($connection, $querry);


// Test if query succeeded
if (!$result_set) {
    # code...
    exit("DataBase Query Failed");
}
// use returned querry
while($subject = mysqli_fetch_assoc($result_set)){
    echo $subject["menu_name"] . "<br>" ;
}


// Release returned data
mysqli_free_result($result_set);
// Close the connection


mysqli_close($connection);
?>