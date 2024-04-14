<?php 
$servername = "localhost";
$dbname = "willforum";
$username = "root";
$password = "";
// $dbname = "dslqhzwy_willforum";
// $username = "dslqhzwy_willforumuser";
// $password = "%A~jd_yM=F-x";
try {
  $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  if ($pdo) {
		// echo "Connected to the database successfully!";
	}
} catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
	// echo 'Connection failed!<br>';
}
?>