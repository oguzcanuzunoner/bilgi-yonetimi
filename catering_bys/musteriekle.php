<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
    <title>Müşter Kayıt</title>
    <link rel="stylesheet" type="text/css" href="musteriekle.css">
    <style>
        div#form{
            width: 400px;
            height: 600 px;
            border: 1px solid #1d2b37;
            position: absolute;
            top: 5%;
            left: 50%;
        }
    </style>
</head>
<body>
<img src="YLOGO.png" alt=logo width="200" >


    
    <div class="menu">
        <ul>
        <li><a href =""id="mus">Müşteri</a>
            <ul>
                <li><a href="musteriekle.php" id="musteriekle"> Müşteri Ekle</a></li>
                <li><a href="musterilerim.php" id="musterilerim"> Müşterilerim</a></li>
            </ul>
        </li>
        <li><a href ="siparislerim.php"id="siparis">Siparişler</a></li>
        <li><a href ="cikis.php"id="cikis">Çıkış</a>
        </li>
        </ul>
    </div>



        <div class = "form" > 

            <form action ="" method="POST" id="forum">
            <div class="forumaralik">
        
                <label style="font-size:30px;font-family:verdana">Müşteri Ekle </label><br><br>    
        
                <input class="kulgir" type="text" id ="ad_soyad" name ="ad_soyad" placeholder="Ad Soyad Giriniz" required><br>
        
                <input class="kulgir" type="number" id ="telefon" name ="telefon" placeholder="Telefon Numarası Giriniz" required><br>
        
                <input class="kulgir" type="email" id="mail" name="mail" placeholder=" E-Mail Giriniz" required><br>
        
                <input class="kulgir" placeholder="Doğum Tarihi Giriniz" name="tarih" type="text" onfocus="(this.type='date')" id="date"><br>
        
                <button type="submit" class="btn" >Müşteri Ekle</button>
                <?php
                 include("musterivb.php");
                ?>
             </div>
                
            </div>
            
        </form>

        </div>
        </body>
        </html>
        