<?php
	$db = new PDO("mysql:host=localhost;dbname=aracservis;charset=utf8", "root", "");

	$k_kullaniciadi = $_POST['k_kullaniciadi'];
	$k_sifre = $_POST['k_sifre'];

	if(!$k_kullaniciadi || !$k_sifre){
	die("Bilgileri eksiksiz giriniz.");
}

$ekle = $db->prepare("INSERT INTO k_bilgiler SET k_kullaniciadi = ?, k_sifre = ?");
$ekle->execute([$k_kullaniciadi, $k_sifre]);

if ($ekle){
	echo "Kayıt oluştu";
}
	else{
	echo "Hata";
}
?>