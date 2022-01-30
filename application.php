<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$gender = $_POST['gender'];
$bloodtype = $_POST['bloodtype'];
$bday = $_POST['bday'];
$weight = $_POST['weight'];
$illness = $_POST['illness'];
$phone = $_POST['phone'];
$mail = $_POST['mail'];
$city = $_POST['city'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blood";


$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($weight < 50) {
	$message1 = 'Kilonuz 50 kilonun altinda oldugu icin kan veremezsiniz.';
	 echo "<SCRIPT> 
		alert('$message1')
		window.location.replace('donate_form.php');
	</SCRIPT>";
}

if ($illness == "Var") {
	$message2 = 'Kronik rahatsizliginiz oldugu icin kan veremezsiniz.';
	 echo "<SCRIPT> 
		alert('$message2')
		window.location.replace('donate_form.php');
	</SCRIPT>";
}

if ($bday < 18) {
	$message3 = '18 yasindan kucuk oldugunuz icin kan veremezsiniz.';
	 echo "<SCRIPT> 
		alert('$message3')
		window.location.replace('donate_form.php');
	</SCRIPT>";
}

if ($bday > 65) {
	$message4 = '65 yasindan buyuk oldugunuz icin kan veremezsiniz.';
	 echo "<SCRIPT> 
		alert('$message4')
		window.location.replace('donate_form.php');
	</SCRIPT>";
}

if ($weight >= 50 && $illness != "Var" && $bday >= 18 && $bday <= 65) {

$sql = "INSERT INTO blood(ad, soyad, cinsiyet, kan_grubu, yas, kilo, kronik_hastalik, telefon, email, sehir)
		VALUES ('$firstname', '$lastname', '$gender', '$bloodtype', '$bday', '$weight', '$illness', '$phone', '$mail', '$city')";

if ($conn->query($sql) === TRUE) {
	$message = 'Yeni kayit olusturuldu.';
	 echo "<SCRIPT> 
		alert('$message')
		window.location.replace('donate_form.php');
	</SCRIPT>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();

?>