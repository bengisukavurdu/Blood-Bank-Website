<?php

$email = $_POST['email'];
$pword = $_POST['password'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blood";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO users(kullanici_adi, sifre)
		VALUES ('$email', '$pword')";

if ($conn->query($sql) === TRUE) {
	$message = 'Yeni kayit olustu.';
	echo "<SCRIPT> 
        alert('$message')
        window.location.replace('login.php');
    </SCRIPT>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

?>