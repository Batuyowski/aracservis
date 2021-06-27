<?php
	$db = new PDO("mysql:host=localhost;dbname=aracservis;charset=utf8", "root", "");

	$arac_sahibi = $_POST['arac_sahibi'];
	$arac_plaka = $_POST['arac_plaka'];
	$arac_marka = $_POST['arac_marka'];

	if(!$arac_sahibi || !$arac_plaka || !$arac_marka){
	die("Bilgileri eksiksiz giriniz.");
}

$ekle = $db->prepare("INSERT INTO araclar SET arac_sahibi = ?, arac_plaka = ?, arac_marka = ?");
$ekle->execute([$arac_sahibi, $arac_plaka, $arac_marka]);

if ($ekle){
	echo "Kayıt oluştu";
	header("location:aracekle.php");
}
	else{
	echo "Hata";
}
?>