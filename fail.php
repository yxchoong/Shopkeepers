<html>
<body>
<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'new order');
 
/* Attempt to connect to MySQL database */
$mysqli = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
$query = "SELECT * FROM orders";


 
echo '<table style="float: center">
    <tr>
      <td>Name of Item</th>
      <td>Website/Application</th>
      <td>Estimated Delivery Date</th>
      <td>Checkbox if Delivered</th>
    </tr>';
 
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["col1"];
        $field2name = $row["col2"];
        $field3name = $row["col3"]; 
        $field4name = $row["col4"];
 
        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td>
              </tr>';
    }
    $result->free();
}  
?>
</body>
</html>

