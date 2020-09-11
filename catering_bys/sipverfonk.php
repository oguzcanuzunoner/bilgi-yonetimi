<?php
error_reporting(0);
$db = new PDO("mysql:host=localhost;dbname=catering_bys;charset=utf8", "root", "");

date_default_timezone_set('Europe/Istanbul');

$telefon = $_POST['telefon'];
$mail = $_POST['mail'];
$adet = $_POST['adet'];
// $teslimatci = $_POST['teslimatci'];
$adres = $_POST['adres'];
$menu = $_POST['menu'];
$tarih=date('d.m.Y H:i:s');
$kullanicicek =$db->query("select adSoyad from musteriler WHERE mail = '$mail'")->fetch();
$kullanicimail=$db->query("select mail from musteriler WHERE mail = '$mail'")->fetch();

if (!$telefon || !$mail || !$menu || !$adet || !$adres ) {
    die("Lütfen boş alan bırakmayınız.");
}

$ekle = $db->prepare("INSERT INTO siparisler SET ad_soyad = ?, telefon_numarasi = ?, mail = ?,menu = ?, adet = ?,adres= ?,tarih=?");
$ekle->execute([$kullanicicek[0], $telefon, $kullanicimail[0],$menu,$adet,$adres,$tarih]);


if ($ekle) {
    echo "Kayıt başarılı";
}else {
    echo "Bir hata oluştu.";
}