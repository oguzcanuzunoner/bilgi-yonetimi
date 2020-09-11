<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
  <title>Sipariş Verme</title>
  <link rel="stylesheet" type="text/css" href="sipver.css ">

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

            <form action= "" method = "POST" id="forum">
            <div class="forumaralik">
        
                <label style="font-size:30px;font-family:verdana">Sipariş Bilgileri </label><br><br>  
                <div class="form-group">
                  <h2>Menüler </h2>

                  <label for="cars">Menü Seçiniz:</label>
                    <select class = "select-css" id="menu" name="menu">
                      <option value="Geleneksel Menü">Geleneksel Menü</option>
                      <option value="Modern Sofra Menü">Modern Sofra Menü</option>
                      <option value="Kış Menü">Kış Menü</option>
                      <option value="Karadeniz Menü">Karadeniz Menü</option>
                    </select>
                </div>  
        
                <input class="kulgir" type="text" id ="adet" name ="adet" placeholder="Adet Giriniz" required><br>

                <input class="kulgir" type="text" id ="telefon" name ="telefon" placeholder="Telefon Numarası Giriniz" required><br>
        
                <input class="kulgir" type="email" id="mail" name="mail" placeholder=" E-Mail Giriniz" required><br>



                <textarea class="adres" name = "adres" rows="10" cols="60" placeholder="Adresi Giriniz" required style="resize: none;"></textarea><br>
                <br><br>
        
                <button class="btn" href="#">Siparis Ver</button>
                <?php
                 include("sipverfonk.php");
                ?>
             </div>
        
            </div>
        </form>
        </div>
        </body>
        </html>
        