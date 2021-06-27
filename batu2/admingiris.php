<?php
    session_start();
	$db = new PDO("mysql:host=localhost;dbname=aracservis;charset=utf8", "root", "");

	$k_kullaniciadi = $_POST['k_kullaniciadi'];
	$k_sifre = $_POST['k_sifre'];

	if(!$k_kullaniciadi || !$k_sifre){
	die("Bilgileri eksiksiz giriniz.");
}

$user = $db->query("SELECT * FROM k_bilgiler WHERE k_kullaniciadi = '$k_kullaniciadi' AND k_sifre = '$k_sifre'")->fetch();

if($user){
	$_SESSION['user'] = $user;
	header("location:admin-index.php");
}
	else{
	echo "Bilgiler hatalı";
}
?>