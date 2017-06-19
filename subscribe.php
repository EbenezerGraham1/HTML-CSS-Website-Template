


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
$email=$_POST['email']; 


$query=$conn->prepare("INSERT INTO subscription VALUES ('','$name','$email')");
$query->execute();

$conn = null;


 	echo 'Hi '.$_POST['name'] .' thanks for subscribing.</br>';
 	echo 'We will contact you whenever the next leasing season is due via '. $_POST['email'];
?>
</body>	
</html>
	