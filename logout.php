<?php
session_start();
session_destroy();

$message = 'Cikis basarili.';
echo "<SCRIPT> 
	alert('$message')
	window.location.replace('login.php');
</SCRIPT>";

?>