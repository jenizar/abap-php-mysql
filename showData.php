<!DOCTYPE html>
<html lang="en">
<head>
  <title>SAP ABAP Post Data to MySQL Database using PHP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2>SAP ABAP Post Data to MySQL Database using PHP</h2>
  <table class="table table-condensed">
    <thead>
      <tr class="info">
	    <th>ID</th>
        <th>Material No</th>
        <th>Material Name</th>
		<th>Material Group</th>
        <th>Quantity</th>
		<th>Price</th>
      </tr>
    </thead>
    <tbody>
	<tr>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sap";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM matmas";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<td>" .$row["ID"]."</td>";
		echo "<td>" .$row["matnr"]."</td>";
		echo "<td>" .$row["maktx"]."</td>";
		echo "<td>" .$row["matkl"]."</td>";
		echo "<td>" .$row["ktmng"]."</td>";
		echo "<td>" .$row["peinh"]."</td>";
		echo "</tr>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</tr>
</tbody>
</table>
</div>
</body>
</html>

