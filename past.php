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
<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet'></head>

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
  font-family: Lobster;
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
	<h2><p style = "font-family:Lobster; font-style:italic; font-size: 40px">Past Orders</p></h2>
	<img src="https://iili.io/dx7QVa.md.png" alt="dx7QVa.md.png" border="0" height="220px" width="290px">
  <table style="float: center">
    <tr>
      <th colspan="4">Past Orders</th>
    </tr>
    <tr>
      <th>Name of Item</th>
      <th>Website/Application</th>
      <th>Category</th>
      <th>Delivered On</th>
    </tr>

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

if(isset($_POST['but_delete'])){

  if(isset($_POST['delete'])){
    foreach($_POST['delete'] as $deleteid){
   $sql = "INSERT INTO old (username, name, website, category, delivery) SELECT username, name, website, category, delivery from new WHERE name='$deleteid' and username = '".$_SESSION["username"]."' ";
    }
  }
mysqli_query($conn, $sql);


if(isset($_POST['but_delete'])){

  if(isset($_POST['delete'])){
    foreach($_POST['delete'] as $deleteid){
   $delete = "DELETE FROM new WHERE name='$deleteid' and username = '".$_SESSION["username"]."'";
    }
  }


mysqli_query($conn, $delete);


}
}

$sql = "SELECT name, website, category, delivery FROM old WHERE username = '".$_SESSION["username"]."' ORDER BY delivery";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["name"]. "</td><td>" . $row["website"] . "</td><td>" . $row["category"] . "</td><td>"
. $row["delivery"]. "</td><tr>" ;
}
echo "</table>";
} else { echo "No Past Orders"; }
$conn->close();
?>
</table>

</body>
</html>
