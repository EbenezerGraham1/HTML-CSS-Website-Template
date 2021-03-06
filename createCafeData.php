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
   // echo "Connected successfully <br />"; 
     }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

$query=$conn->prepare("CREATE TABLE IF NOT EXISTS cafe (id int(6) NOT NULL auto_increment,name varchar(20) NOT NULL,description varchar(200) NOT NULL,price varchar(20) NOT NULL,category varchar(30) NOT NULL,available varchar(30) NOT NULL,PRIMARY KEY (id),UNIQUE id (id),KEY id_2 (id))");
$query->execute();

$query=$conn->prepare("INSERT INTO cafe VALUES('','tea','different varieties','1.00','drinks','yes')");
$query->execute();

$query=$conn->prepare("INSERT INTO cafe VALUES('','Koko','freshly ground ','1.50','drinks','yes')");
$query->execute();

$query=$conn->prepare("INSERT INTO cafe VALUES('','Tom Brown','with fully fat or skimmed milk','2.00','drinks','yes')");
$query->execute();

$query=$conn->prepare("INSERT INTO cafe VALUES('','Oatmeal','with chips or garlic bread','6.50','main','yes')");
$query->execute();

$query=$conn->prepare("INSERT INTO cafe VALUES('','Coco Pops','with cheese, coleslaw, beans or tuna','4.50','main','yes')");
$query->execute();

$query=$conn->prepare("INSERT INTO cafe VALUES('','pizza','ham and pineapple or four cheese','5.00','main','yes')");
$query->execute();

$query=$conn->prepare("INSERT INTO cafe VALUES('','pasta','with a tomato and garlic sauce','5.50','main','yes')");
$query->execute();

$query=$conn->prepare("INSERT INTO cafe VALUES('','cheescake',' with cream','3.00','pudding','yes')");
$query->execute();

$query=$conn->prepare("INSERT INTO cafe VALUES('','ice cream','various flavours','2.50','pudding','yes')");
$query->execute();

$query=$conn->prepare("INSERT INTO cafe VALUES('','salad','uses seasonal local produce','3.50','side','yes')");
$query->execute();

$query=$conn->prepare("INSERT INTO cafe VALUES('','chocolate cake','with cream','2.50','cake','yes')");
$query->execute();

$query=$conn->prepare("INSERT INTO cafe VALUES('','carrot cake','home made here','2.50','cake','yes')");
$query->execute();

$query=$conn->prepare("INSERT INTO cafe VALUES('','apple pie','with cream or custard','3.50','pudding','yes')");
$query->execute();

$query=$conn->prepare("INSERT INTO cafe VALUES('','soup','server for availabl flavours','1.50','snack','yes')");
$query->execute();

$query=$conn->prepare("INSERT INTO cafe VALUES('','sandwiches','with a variety of fillings','2.50','snack','yes')");
$query->execute();


$conn = null;
?>