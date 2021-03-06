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

table {
  font-family: "Inconsolata", sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

input[type=text] {
  width: 40%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  background-color: FC94AF;
  color: black;
}

</style>

<body>

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



<div class="content">
  <h2><p style = "font-family:Lobster; font-style:italic; font-size: 40px">Add New Order</p></h2>
  <img src="https://i.ibb.co/S0Rvh33/webpage.png" alt="webpage" border="0">
<form action="insert.php" method="post">
<p style = "font-family:candara;">	
    Name of Item: <input type="text" name = "name" /><br/>
    Website/Application bought from: <input type="text" name = "website" /><br/><br>
    Category: <select id = "category" name ="category">
      <option value = "beauty and personal care">Beauty and Personal Care</option>
      <option value = "Mobile and Gadgets">Mobile and Gadgets</option>
      <option value = "Home and Living">Home and Living</option>
      <option value = "Food and Beverage">Food and Beverage</option>
      <option value = "Bags">Bags</option>
      <option value = "Jewellery and Accessories">Jewellery and Accessories</option>
      <option value = "Shoes">Shoes</option>
      <option value = "Clothings">Clothings</option>
      <option value = "Miscellaneous">Miscellaneous</option>
    </select><br/>
    <br/>
    Delivery Date: <input type="date" name = "delivery" /><br/>
    <br/>
    <input type="submit" />
</form>

</div>
  
</body>
</html>
