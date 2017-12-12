<?php
$connect = mysqli_connect("localhost","root","","pondok_it");
$email = $_POST['email'];
$password = $_POST['password'];

if (!empty($email) && !empty($password)){
	$sql = mysqli_query($connect, "SELECT * FROM user WHERE email ='$email' AND password ='$password'");
	$result = mysqli_num_rows($sql);
	if($result){
		$row = mysqli_fetch_array($sql);
		session_start();
		$_SESSION['login'] = true;
		$_SESSION['email'] = $email;
		$_SESSION['nama'] = $row['nama'];
		echo "Berhasil Hore!!";
	}else{
		echo "Email dan Password salah";
	}
} else {
	echo "Email dan password anda kosong, isi duls";
}
?>