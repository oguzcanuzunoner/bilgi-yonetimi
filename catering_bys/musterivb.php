<?php
error_reporting(0);
$db = new PDO("mysql:host=localhost;dbname=catering_bys;charset=utf8", "root", "");


$ad_soyad = $_POST['ad_soyad'];
$telefon = $_POST['telefon'];
$mail = $_POST['mail'];
$dogum_tarihi = $_POST['tarih'];


if (!$ad_soyad || !$telefon || !$mail || !$dogum_tarihi) {
    die("lütfen boş alan bırakmayınız.");
}

$ekle = $db->prepare("INSERT INTO musteriler SET adSoyad = ?, telefonNumarasi = ?, mail = ?, dogum_tarihi = ?");
$ekle->execute([$ad_soyad, $telefon, $mail,$dogum_tarihi]);

if ($ekle) {
    echo "Kayıt başarılı";
}else {
    echo "Bir hata oluştu.";
}


?>