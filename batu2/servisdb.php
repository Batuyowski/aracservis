<?php
	$db = new PDO("mysql:host=localhost;dbname=aracservis;charset=utf8", "root", "");

	$arac_plaka = $_POST['arac_plaka'];
	$arac_marka = $_POST['arac_marka'];
	$arac_model = $_POST['arac_model'];
    $arac_sahibi = $_POST['arac_sahibi'];
    $servis_giris = $_POST['servis_giris'];
    $arac_durum = $_POST['arac_durum'];
	$telefon = $_POST['telefon'];

	if(!$arac_plaka || !$arac_marka || !$arac_model|| !$arac_sahibi || !$servis_giris || !$arac_durum || !$telefon){
	die("Bilgileri eksiksiz giriniz.");
}

$ekle = $db->prepare("INSERT INTO servise_gelenler SET arac_plaka = ?, arac_marka = ?, arac_model = ?, arac_sahibi = ?, servis_giris = ?, arac_durum = ?, telefon = ?");
$ekle->execute([$arac_plaka, $arac_marka, $arac_model, $arac_sahibi, $servis_giris, $arac_durum, $telefon]);

if ($ekle){
	echo "Kayıt oluştu";
	header("location:kayitislemleri.php");
}
	else{
	echo "Hata";
}
?>