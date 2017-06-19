


<!DOCTYPE HTML>
<html>
<head><title>Thank your for Subscribing</title>
<link href="CSS/stylesheet.css" type="text/css" rel="stylesheet"
</head>
	
	<body>
<?php
	define("DB_SERVER", "localhost");
	define("DB_USER", "root");
	define("DB_PASS", "");
	define("DB_NAME", "hostel");


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hostel";

 
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", DB_USER, DB_PASS);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully <br />"; 
     }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
 

$name=$_POST['name'];
$suite=$_POST['suite']; 
$email=$_POST['email'];
$years=$_POST['years'];


$query=$conn->prepare("INSERT INTO booking VALUES ('','$name','$suite','$email','$years')");
$query->execute();

$conn = null;


 	echo '<p>Hi </p>'.$_POST['name'] .' <p>thanks for Booking a </p>'.$_POST['suite'].'</br>';
 	echo '<p>We will send you payments via </p>'. $_POST['email'];
?>
</body>	
</html>
	