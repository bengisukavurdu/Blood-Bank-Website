<?php
session_start();
include "conn.php";

$city = $_POST['city'];
$bloodtype = $_POST['bloodtype'];

$sql = "SELECT * FROM blood WHERE sehir='$city' AND kan_grubu='$bloodtype'";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

if (mysqli_num_rows($result) === 1) {
$_SESSION['isim'] = $row['ad'];
$_SESSION['soyisim'] = $row['soyad'];
$_SESSION['cinsiyet'] = $row['cinsiyet'];
$_SESSION['kan_grubu'] = $row['kan_grubu'];
$_SESSION['dogum_gunu'] = $row['yas'];
$_SESSION['kilo'] = $row['kilo'];
$_SESSION['hastalık'] = $row['kronik_hastalik'];
$_SESSION['telefon'] = $row['telefon'];
$_SESSION['email'] = $row['email'];
$_SESSION['sehir'] = $row['sehir'];

$message = 'Kayit bulundu.';
echo "<SCRIPT> 
	alert('$message')
	window.location.replace('donation_table.php');
</SCRIPT>";
}

else {
$message2 = 'Kayit bulunamadi.';
echo "<SCRIPT> 
	alert('$message2')
	window.location.replace('donation_search.php');
</SCRIPT>";
}
exit();

           
?>