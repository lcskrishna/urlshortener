<html>
<body>

You have entered following URL:
<br> <?php echo $_POST["enteredUrl"]; ?>


<?php

//Create a Connection.
$conn= mysql_connect("localhost","root","	");

if($conn-> connect_error){
	die("Connection failed:". $conn ->connect_error);
}

echo("COnnnection Successful.");
include 'randomizedValue.php';

$encodedKey = getRandomValue();
echo "Encoded Key : ".$encodedKey;


?>

</body>
</html>