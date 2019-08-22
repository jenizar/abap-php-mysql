<?php
$con = mysqli_connect('localhost', 'root', '', 'sap');

if (!$con) {
    die('Could not connect: ' . mysql_error());
}
  // JSON string
$someJSON = file_get_contents("php://input");
  // Convert JSON string to Array
  $someArray = json_decode($someJSON, true);
 // print_r($someArray);        // Dump all data of the Array
 // echo $someArray[0]["banfn"]; // Access Array data

foreach ($someArray as $mydata) {
    // Use $field and $value here
	echo "\n";
	echo $mydata['banfn'];
	$query = "INSERT INTO matmas (matnr, maktx, matkl, ktmng, peinh)
     VALUES('".$mydata['matnr']."','".$mydata['maktx']."','".$mydata['matkl']."','".$mydata['ktmng']."','".$mydata['peinh']."' )";
    mysqli_query($con, $query);
}
$con->close();
?>