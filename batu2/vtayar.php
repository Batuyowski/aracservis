<?php

	try{
	$host='localhost';
	$vtadi='aracservis';
	$kullanici='root';
	$sifre='';
	$vt=new
	PDO("mysql:host=$host;dbname=$vtadi;chatset=UTF8","$kullanici",$sifre);
}
catch(PDOException $e){
	print $e->getMessage();
}

?>