<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css" type="text/css" >
    <title>Giriş</title>

</head>
<body>
    
<section>
    <form action="giris.php" method="POST">
        <input class="giris-yap"  type="text" name="kullanici_adi" placeholder="Kullanıcı adı"/>
        <input class="giris-yap" type="password" name="sifre" placeholder="Şifreniz"/>
        <button type="submit" name="giris_yap" >GİRİŞ YAP</button>
    </form>

    <form action="goruntuleme.php" method="POST">
            <input class="giris-yap" type="text" id ="siparisno" name ="siparisno" placeholder="Sipariş No Giriniz"><br>
            <button type="submit">Tıklayınız</button>
    </form>

    
</section>


</body>
</html>
