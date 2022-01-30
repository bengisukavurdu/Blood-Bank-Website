<?php 

session_start(); 

include "conn.php";

if (isset($_POST['email']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $username = validate($_POST['email']);

    $password = validate($_POST['password']);

    if (empty($username)) {

        $message = 'Lutfen e-mail giriniz.';
		echo "<SCRIPT> 
			alert('$message')
			window.location.replace('login.php');
		</SCRIPT>";

        exit();

    }
	else if(empty($password)){

        $message1 = 'Lutfen sifreyi giriniz.';
		echo "<SCRIPT> 
			alert('$message1')
			window.location.replace('login.php');
		</SCRIPT>";

        exit();

    }
	else{

        $sql = "SELECT * FROM users WHERE kullanici_adi='$username' AND sifre='$password'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['kullanici_adi'] === $username && $row['sifre'] === $password) {

                echo "Logged in!";

                $_SESSION['kullanici_adi'] = $row['kullanici_adi'];

                $_SESSION['id'] = $row['id'];
				
                $message2 = 'Giris basarili.';
				echo "<SCRIPT> 
					alert('$message2')
					window.location.replace('profile_after_login.php');
				</SCRIPT>";
				
                exit();

            }else{

                $message3 = 'Hatali e-mail veya sifre.';
				echo "<SCRIPT> 
					alert('$message3')
					window.location.replace('login.php');
				</SCRIPT>";

                exit();

            }

        }
		else{

			$message4 = 'Hatali e-mail veya sifre.';
			echo "<SCRIPT> 
				alert('$message4')
				window.location.replace('login.php');
			</SCRIPT>";

            exit();

        }

    }

}

else{

    header("Location: index.php");

    exit();

}