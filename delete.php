<?php

// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

$conn = mysqli_connect("localhost", "root", "", "new order");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id']; // get id through query string

$del = mysqli_query($conn,"delete from new where name = '$id'"); // delete query

if($del){
    echo "New order added successfully.";
}

if ($del){
    mysqli_close($conn); // Close connection
    header("location:current.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>