<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html>
<head>
<!-- this is the title of the website -->
<title>Shopkeepers, keeping your shopping easy.</title> 
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Dancing Script' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet'>
</head>

<STYLE>A {text-decoration: none;} </STYLE>

<style>
body {
  height: 100%;
  font-family: "Inconsolata", sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: #000000;
}

.navbar a {
  float: right;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.dropdown {
  float: right;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 0px 5px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: #FC94AF;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #FC94AF;
  min-width: 100px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
  font-size: 15px;
}

.dropdown-content a:hover {
  background-color: #FC94AF;
}

.dropdown:hover .dropdown-content {
  display: block;
}

.navbar a.active {
  background-color: #FC94AF;
  color: black;
}

.header {
  background-color: #F1F1F1;
  text-align: center;
  padding: 70px;
  color:#FC94AF;
  font-size: 50px;
  font-family: Pacifico;
}

.content {
  background-color: #F1F1F1;
  padding: 10px;
  height: 600px;
  text-align: center;
}

.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #ffb5c8;
  border: none;
  color: black;
  text-align: center;
  font-size: 13px;
  padding: 25px;
  width: 225px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
  font-family: Merriweather;
  text-color: black;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}

</style>

<body>
	<script> 
		alert("Please remember to update your order status!");  // display string message
	</script> 

<div class="navbar">
  <div class="dropdown">
    <button class="dropbtn" class="active"><a href="welcome.php">Account 
      <i class="fa fa-caret-down"></i>
    </a></button>
    <div class="dropdown-content">
      <a href="reset-password.php">Reset Password</a>
      <a href="logout.php">Log out</a>
    </div>
  </div> 
<a href="about us.php">About Us</a>
<a href="main.php">Home</a>
</div>

<div class = "content">

    <div class="page-header">
	    <h1><p style = "font-family:Lobster; font-size: 35px; font-style:italic;">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to Shopkeepers!</p></h1>
    </div>

    <img src="https://i.ibb.co/LkXRX4g/shop.png" alt="shop" border="0" style="width:300px;height:250px;"/></a><br><br>
    <p style="color: black;">
    <button class="button" style="vertical-align:middle"><span><a href="current.php" style="color:#00354f">View Current Orders</a></span></button>
	    
     <button class="button" style="vertical-align:middle"><span><a href="past.php" style="color:#00354f">View Past Orders</a></span></button>
    </p>
</body>
</html>
