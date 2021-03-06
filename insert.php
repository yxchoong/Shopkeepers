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
  height: 700px;
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

.topleft {
  position: absolute;
  top: 70px;
  left: 20px;
  font-size: 18px;
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
<div class = "topleft"><strong><a href = "past.php" style="color:#F82DA3"> View Past Orders </a></strong> </div> 
	<h2><p style = "font-family:Lobster; font-style:italic; font-size: 40px">Current Orders</p></h2>
	<img src="https://i.ibb.co/f8M0T6v/laptop.png" alt="laptop" border="0" height="180px" width="180px">
<p><a href="add new.php" style="color:#B618A1 "><strong> Add new order!</strong></a></p>

<form action="past.php" method="post">
  <table style="float: center">
   <tr>
      <th colspan="6">Current Orders</th>
    </tr>
    <tr>
      <th>Name of Item</th>
      <th>Website/Application</th>
      <th>Category</th>
      <th>Delivery Date</th>
      <th>Delivered?</th>
      <th> </th>

</div>


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

$sql = "INSERT INTO new (username, name, website, category, delivery) VALUES ('".$_SESSION["username"]."', '".$_POST["name"]."','".$_POST["website"]."',
'".$_POST["category"]."','".$_POST["delivery"]."')";
if(mysqli_query($conn, $sql)){
    echo "New order added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
$sql = "SELECT name, website, category, delivery FROM new WHERE username = '".$_SESSION["username"]."' ORDER BY delivery";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
  ?>
  <tr>
  <td><?php echo $row["name"]; ?> </td>
  <td><?php echo $row["website"]; ?> </td>
  <td><?php echo $row["category"]; ?> </td>
  <td><?php echo $row["delivery"]; ?> </td>
  <td><input type='checkbox' name='delete[]' value=<?php echo $row['name']; ?>> </td>
  <td> <a href="delete.php?id=<?php echo $row['name']; ?>">Delete</a></td>
  </tr>
<?php
  }

echo "</table>";
} else { echo "No Current Orders"; }
$conn->close();
?>
</table>
</br>
<input type="submit" name='but_delete' value="Update Orders" />
</form>

</body>
</html>
