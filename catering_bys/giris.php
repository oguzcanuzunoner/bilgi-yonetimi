<?php

$db = new PDO("mysql:host=localhost;dbname=catering_bys;charset=utf8", "root", "");

session_start();
ob_start();

$kadi = $_POST['kullanici_adi'];
$sifre = $_POST['sifre'];

if (!$kadi || !$sifre) {
    die("boş alan bırakmayınız!");
}

$user = $db->query("SELECT * FROM personel WHERE kullaniciAdi = '$kadi' AND sifre = '$sifre'")->fetch();

if ($user) {
    $_SESSION['user'] = $user;
    header("location:musterilerim.php");
}else {
    echo "Bilgiler hatalı";

}







?>