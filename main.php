<?php?>

<!DOCTYPE html>
<html>
<head>
<!-- this is the title of the website -->
<title>Shopkeepers, keeping your shopping easy.</title> 
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet'>
</head>

<style>
body {
  height: 100%;
  font-family: "Inconsolata", sans-serif;
  font-size : 20px;
}
/* Add a black background color to the top navigation */
.topnav {
  background-color: #333;
  overflow: hidden;
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
  background-color:#F1F1F1 ;
  text-align: center;
  padding: 70px;
  color:#FC94AF;
  font-size: 50px;
  font-family: Pacifico;
}

.content {
  background-color:#F1F1F1;
  padding: 10px;
  height: 700px;
  text-align: center;
}

</style>

<body>

<div class="navbar">
  <a href="welcome.php">Account </a>
    
<a href="about us.php">About Us</a>
<a href="main.php" class="active">Home</a>
</div>

<div class="content">
	<h1><p style = "font-family:Lobster; font-style:italic; font-size: 40px">Hello, we are the Shopkeepers!</p></h1>
  <img src="https://i.ibb.co/LkXRX4g/shop.png" alt="shop" border="0" height="280px" width="300px"/></a>
  <p> Welcome to Shopkeepers, the one-stop website to keep track of your online purchases.</strong>
  <br></br>

  With Shopkeepers, you will never have troubles remembering what you bought online or whether they have been delivered!</p>

  </br> 
  <p> <strong>Should you have any enquiries, <a href = "mailto: shopkeepers2020@gmail.com">send an email</a> to us!</strong></p>
</div>
  
</body>
</html>
